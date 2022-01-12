<?php 

namespace App\Http\Controllers;

class indexController extends Controller{

	function showbrand(){
		return view('brand');
	}

	function showdetail(){
		return view('detail');
	}

	function showkategori(){
		return view('kategori');
	}

	function showshoes(){
		return view('shoes');
	}


	function showsearch(){
		return view('search');
	}

	function showkeranjang(){
		return view('keranjang');
	}
}