<?php 

namespace App\Http\Controllers;
use App\Models\Provinsi;

class HomeController extends Controller{


	function showBeranda(){
		return view('admin.beranda');
	}

	function showProduk(){
		return view('admin.produk.index');
	}

	function showProfile(){
		return view('admin.profil.index');
	}

	function showKategori(){
		return view('admin.kategori.index');
	}

	function test($produk, $hargaMin = 0, $hargaMax = 0){
		if($produk == 'payung'){
			echo "Tampilkan Produk Payung";
		}elseif($produk == 'sepeda'){
			echo "Produk Sepeda";
		}
	echo "<br>";
	echo "Harga Min adalah $hargaMin <br>";
	echo "Harga Max adalah $hargaMax <br>";
	}

	 public function showAlamat()
  {
    $data['list_provinsi'] = Provinsi::all();
    return view('client.alamat',$data);
  }

}
