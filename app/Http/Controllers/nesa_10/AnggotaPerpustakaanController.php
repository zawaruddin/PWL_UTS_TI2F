<?php

namespace App\Http\Controllers;

use App\Models\AnggotaPerpustakaan;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory; 

class AnggotaPerpustakaanController extends Controller
{
 /**
 * Display a listing of the resource.
 *
 * @return \Illuminate\Http\Response
 */
 public function index()
 {
    //fungsi eloquent menampilkan data menggunakan pagination
    $anggota_perpustakaans = $anggota_perpustakaans = DB::table('anggota_perpustakaans')->paginate(3); // Mengambil semua isi tabel
    $posts = anggota_perpustakaan::orderBy('id_anggota', 'desc')->paginate(6);
    return view('nesa_10.index', compact('anggota_perpustakaans'));
 }

 public function search(Request $request){
      $cari = $request->search;

      $anggota_perpustaakans = DB::table('anggota_perpustakaans')
            ->where('nama', 'like', '%' .$cari. '%')
            ->paginate(1);

      return view('nesa_10.index', ['anggota_perpustakaans' => $mahasiswa]);
 }

 public function create()
 {
    return view('nesa_10.create');
 }
 
 public function store(Request $request)
 {
 //melakukan validasi data
    $request->validate([
    'id_anggota' => 'required',
    'nama_anggota' => 'required',
    'nomor_telepon' => 'required',
    'alamat' => 'required',
    'jenis_kelamin' => 'required',
    ]);
    //fungsi eloquent untuk menambah data
    anggota_perpustakaans::create($request->all());

    //jika data berhasil ditambahkan, akan kembali ke halaman utama
    return redirect()->route('nesa_10.index')->with('success', 'Anggota Berhasil Ditambahkan');
 }

 public function show($id_anggota)
 {
    //menampilkan detail data dengan menemukan/berdasarkan Nim Mahasiswa
    $anggota_perpustaakans = anggota_perpustakaans::find($Nim);
    return view('nesa_10.detail', compact('anggota_perpustakaans'));
 }

 public function edit($id_anggota)
 {
    //menampilkan detail data dengan menemukan berdasarkan Nim Mahasiswa untuk diedit
    $anggota_perpustakaans = DB::table('anggota_perpustakaans')->where('id_anggota', $anggota_perpustakaans)->first();
    return view('nesa_10.edit', compact('anggota_perpustakaans'));
 }
 public function update(Request $request, $id_anggota)
 {
    //melakukan validasi data
    $request->validate([
        'id_anggota' => 'required',
        'nama_anggota' => 'required',
        'nomor_telepon' => 'required',
        'alamat' => 'required',
        'jenis_kelamin' => 'required',
    ]);
    //fungsi eloquent untuk mengupdate data inputan kita
    anggota_perpustakaans::find($id_anggota)->update($request->all());
    //jika data berhasil diupdate, akan kembali ke halaman utama
    return redirect()->route('10.index')->with('success', 'Anggota Berhasil Diupdate');
 }

 public function destroy( $id_anggota)
 {
    //fungsi eloquent untuk menghapus data
    anggota_perpustakaans::find($id_anggota)->delete();
    return redirect()->route('10.index')-> with('success', 'Anggota Berhasil Dihapus');
 }
};