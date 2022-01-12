<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SettingController extends Controller
{

    public function index()
    {
        $data = Auth::user();
        if (Auth::guard('admin')->check()) {
            $data['user'] = Auth::guard('admin')->user();
        } else {
            $data['user'] = Auth::guard('pengguna')->user();
        }
        return view('admin.setting.index', $data);
    }



    public function store(Request $request)
    {
        if (request('current')) {
            // $user = Auth::user();

            if (Auth::guard('admin')->check()) {
                $user = Auth::guard('admin')->user();
            } else {
                $user = Auth::guard('pengguna')->user();
            }

            $chek = Hash::check(request('current'), $user->password);
            if ($chek) {
                if (request('new') == request('confirm')) {
                    $user->password = request('new');
                    $user->save();

                    return back()->with('success', 'Password berhasil di ganti');
                } else {
                    return back()->with('danger', 'password tidak cocok');
                }
            } else {
                return back()->with('danger', 'pasword sekarang salah');
            }
        } else {
            return back()->with('danger', 'password kosong');
        }
    }
}
