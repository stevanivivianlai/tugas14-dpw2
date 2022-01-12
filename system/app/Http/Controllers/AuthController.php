<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Pengguna;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

  function showlogin()
  {
    return view('login');
  }

  function loginprocess()
  {
    // if (Auth::attempt(['email' => request('email'), 'password' => request('password')])){
    //   return redirect('admin/dashboard')->with('success', 'login berhasil');
    // }else{
    //   return back()->with('danger','login anda gagal');
    // }

    // multi table  Authentication

    $email = request('email');
    $user = Admin::where('email', $email)->first();
    if ($user) {
      $guard = "admin";
    } else {
      $user = Pengguna::where('email', $email)->first();
      if ($user) {
        $guard = "pengguna";
      } else {
        $guard = false;
      }
    }

    if (!$guard) {
      return back()->with('danger', 'email tidak di temukan di database');
    } else {
      if (Auth::guard($guard)->attempt(['email' => request('email'), 'password' => request('password')])) {
        return redirect("dashboard/$guard")->with('success', 'login berhasil');
      } else {
        return back()->with('danger', 'login gagal, silakan cek pasword dan email anda');
      }
    }

  }

  function logout()
  {
    Auth::logout();
    return redirect('login');
  }

	function registration(){

	}

	function forgotPassword(){

	}
}