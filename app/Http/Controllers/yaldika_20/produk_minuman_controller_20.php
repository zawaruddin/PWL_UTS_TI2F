<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class produk_minuman_controller_20 extends Controller
{
    public function index()
{
	//fungsi eloquent menampilkan data menggunakan pagination
	$minuman = $minuman = DB::table('minuman')->get(); // Mengambil semua isi tabel
	$posts = minuman::orderBy('Nim', 'desc')->paginate(6);
	return view('minuman.index', compact('minuman'));
	with('i', (request()->input('page', 1) - 1) * 5);
}
public function create()
{
	return view('minuman.create');
}
public function store(Request $request)
{
	//melakukan validasi data
	$request->validate([
	'Rasa' => 'required',
	'Ukuran' => 'required',

	]);
	//fungsi eloquent untuk menambah data
	minuman::create($request->all());//jika data berhasil ditambahkan, akan kembali ke halaman utama
	return redirect()->route('minuman.index')
	->with('success', 'minuman Berhasil Ditambahkan');
}
public function show($Nim)
{
	//menampilkan detail data dengan menemukan/berdasarkan Nim minuman
	$minuman = minuman::find($Nim);
	return view('minuman.detail', compact('minuman'));
}
public function edit($Nim)
{
	//menampilkan detail data dengan menemukan berdasarkan Nim minuman untuk diedit
	$minuman = DB::table('minuman')->where('nim', $nim)->first();;
	return view('minuman.edit', compact('minuman'));
}
public function update(Request $request, $Nim)
{
	//melakukan validasi data
	$request->validate([
	'Nim' => 'required',
	'Nama' => 'required',
	'Kelas' => 'required',
	'Jurusan' => 'required',
	]);
	//fungsi eloquent untuk mengupdate data inputan kita
	minuman::find($Nim)->update($request->all());
	//jika data berhasil diupdate, akan kembali ke halaman utama
	return redirect()->route('minuman.index')
	->with('success', 'minuman Berhasil Diupdate');
}
public function destroy( $Nim)
{
	//fungsi eloquent untuk menghapus data
	minuman::find($Nim)->delete();
	return redirect()->route('minuman.index')
	-> with('success', 'minuman Berhasil Dihapus');
}
};

