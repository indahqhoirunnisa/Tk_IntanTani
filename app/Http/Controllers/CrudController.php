<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
 
 
class PegawaiController extends Controller
{
	public function index()
	{
    	// mengambil data dari table produk
		$pegawai = DB::table('produk')->get();
 
    	// mengirim data produk ke view halaman
		return view('halaman',['produk' => $produk]);
 
	}
 
	// method untuk menampilkan view form tambah 
	public function tambah()
	{
 
		// memanggil view tambah
		return view('tambah');
 
	}
 
	// method untuk insert data ke table 
	public function store(Request $request)
	{
		// insert data ke table produk
		DB::table('produk')->insert([
            'id' => $request->id,
			'nama_produk' => $request->nama_produk,
			'jenis_produk' => $request->jenis_produk,
			'exp' => $request->exp,
			'harga' => $request->harga,
            'gambar' =>$request->gambar,
            'deskripsi' =>$request->deskripsi
		]);
		// alihkan halaman ke halaman 
		return redirect('/produk');
 
	}
 
	// method untuk edit data 
	public function edit($id)
	{
		// mengambil data  berdasarkan id yang dipilih
		$pegawai = DB::table('produk')->where('id',$id)->get();
		// passing data  yang didapat ke view edit.blade.php
		return view('edit',['produk' => $produk]);
 
	}
 
	// update data 
	public function update(Request $request)
	{
		// update data 
		DB::table('pegawai')->where('pegawai_id',$request->id)->update([
			'nama_produk' => $request->nama_produk,
			'jenis_produk' => $request->jenis_produk,
			'exp' => $request->exp,
			'harga' => $request->harga,
            'gambar' =>$request->gambar,
            'deskripsi' =>$request->deskripsi
		]);
		// alihkan halaman ke halaman 
		return redirect('/pegawai');
	}
 
	// method untuk hapus data 
	public function hapus($id)
	{
		// menghapus data  berdasarkan id yang dipilih
		DB::table('pegawai')->where('pegawai_id',$id)->delete();
		
		// alihkan halaman ke halaman 
		return redirect('/pegawai');
	}
}