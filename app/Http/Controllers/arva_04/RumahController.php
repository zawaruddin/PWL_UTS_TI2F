<?php

namespace App\Http\Controllers\arva_04;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\arva_04\Rumah;

class RumahController extends Controller
{

    public function index()
    {
       //fungsi eloquent menampilkan data menggunakan pagination
       $rumah = Rumah::paginate(5); // Mengambil semua isi tabel
       $posts = rumah::orderBy('Type', 'desc')->paginate(5);
       return view('rumah.index', compact('rumah'));
       with('i', (request()->input('page', 1) - 1) * 5);

    }

    public function create()
    {
        return view('rumah.create');
    }

    public function store(Request $request)
    {
        //melakukan validasi data
        $request->validate([ 'Type' => 'required', 'blok' => 'required', 'harga' => 'required'
        ]);

        //fungsi eloquent untuk menambah data
        Rumah::create($request->all());

        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('rumah.index')
        ->with('success', 'Rumah Berhasil Ditambahkan');

    }

    public function destroy($Type)
    {
        //fungsi eloquent untuk menghapus data
        Rumah::find($Type)->delete();
        return redirect()->route('rumah.index')
        -> with('success', 'Rumah Berhasil Dihapus');

    }

}


