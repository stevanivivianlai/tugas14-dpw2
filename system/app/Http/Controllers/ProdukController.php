<?php 

namespace App\Http\Controllers;
use App\Models\Product;

class ProdukController extends Controller{
	function index(){
		$user = request()->user();
		 $data['list_produk']= Product::all();
		return view('admin.produk.index', $data);
	}
	function create(){
		return view('admin.produk.create');
	}
	function store (){
    $produk = new Product();
    $produk->id_user = request()->user()->id;
    $produk['nama'] = request('nama');
    $produk['harga'] = request('harga');
    $produk['brand'] = request('brand');
    $produk['stok'] = request('stok');
    $produk['deskripsi'] = request('deskripsi');
    $produk->save();


		$produk->handleUploadFoto();

		return redirect('admin/produk')->with('success','Data Berhasil Ditambahkan');
	}
	function show(Product $produk){
		$data['produk'] = $produk;
		return view('admin.produk.show', $data);
	}
	function edit(Product $produk){
		$data['produk'] = $produk;
		return view('admin.produk.edit', $data);

	}
	function update(Product $produk){
		$produk['nama'] = request('nama');
		$produk['harga'] = request('harga');
		$produk['brand'] = request('brand');
		$produk['stok'] = request('stok');
		$produk['deskripsi'] = request('deskripsi');

		$produk->save();

		$produk->handleUploadFoto();
		
		return redirect('admin/produk')->with('success','Data Berhasil Diedit');

	}
	function destroy(Product $produk){
		$produk->handleDelete();
		$produk->delete();
		return redirect('admin/produk')->with('danger','Data Berhasil Dihapus');
	}

	function filter(){
		$nama = request('nama');
		$stok = explode(",", request('stok'));
		$data['harga_max'] = $harga_max = request('harga_max');
		$data['harga_min'] = $harga_min = request('harga_min');
		//$data['list_produk'] = Produk::where('nama', 'like' , "%$nama%")->get();
		//$data['list_produk'] = Produk::whereIn('stok', $stok)->get();
		//$data['list_produk'] = Produk::whereBetween('harga', [$harga_min, $harga_max])->get();
		//$data['list_produk'] = Produk::where('stok', '<>' , $stok)->get();
		//$data['list_produk'] = Produk::whereNotIn('stok', $stok)->get();
		//$data['list_produk'] = Produk::whereNotBetween('harga', [$harga_min, $harga_max])->get();
		//$data['list_produk'] = Produk::whereNull('stok')->get();
		//$data['list_produk'] = Produk::whereNotNull('stok')->get();
		//$data['list_produk'] = Produk::whereDate('created_at', '2021-10-25')->get();
		//$data['list_produk'] = Produk::whereYear('created_at', '2021')->get();
		//$data['list_produk'] = Produk::whereMonth('created_at', '10')->get();
		//$data['list_produk'] = Produk::whereMonth('created_at', '10')->whereYear('created_at', '2021')->get();
		//$data['list_produk'] = Produk::whereTime('created_at', '11:47:46')->get();
		//$data['list_produk'] = Produk::whereBetween('harga', [$harga_min, $harga_max])->whereNotIn('stok', [47])->whereYear('created_at', '2021')->get();

		$data['nama'] = $nama;
		$data['stok'] = request('stok');

		return view('admin.produk.index', $data);
	}
}