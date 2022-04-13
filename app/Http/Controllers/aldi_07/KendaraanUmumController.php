<?php

namespace App\Http\Controllers\aldi_07;

use App\Http\Controllers\Controller;
use App\Models\aldi_07\KendaraanUmum;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KendaraanUmumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $kendaraanUmum = KendaraanUmum::orderBy('id','desc');
        return view('aldi_07.index',compact('kendaraanUmum'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('aldi_07.create');
    }

    /**
     * Store a newly created resource in storage.
     *-
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // melakukan validasi data
        $request->validate([
            'nama' => 'required',
            'roda' => 'required',
            'nomor' => 'required',
            'jenis' => 'required',
            'tahun' => 'required',
            'merk' => 'required',
            'muatan' => 'required',
        ]);

        // fungsi eloquent untuk menambah data
        KendaraanUmum::create($request->all());


        // jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('aldi_07.index')
            ->with('success', 'Kendaraan Umum Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // menampilkan detail data dengan menemukan/berdasarkan ID
        $kendaraanUmum = KendaraanUmum::find($id);
        return view('aldi_07.detail', compact('kendaraanUmum'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // menampilkan detail data dengan menemukan berdasarkan Nim Mahasiswa untuk diedit
        $kendaraanUmum = KendaraanUmum::find($id);
        return view('aldi_07.edit', compact('kendaraanUmum'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'roda' => 'required',
            'nomor' => 'required',
            'jenis' => 'required',
            'tahun' => 'required',
            'merk' => 'required',
            'muatan' => 'required',
        ]);

        //fungsi eloquent untuk mengupdate data inputan kita
        KendaraanUmum::find($id)->update($request->all());


        //jika data berhasil diupdate, akan kembali ke halaman utama
        return redirect()->route('aldi_07.index')
            ->with('success', 'Kendaraan Umum Berhasil Diupdate');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //fungsi eloquent untuk menghapus data
        KendaraanUmum::find($id)->delete();
        return redirect()->route('aldi_07.index')
            -> with('success', 'Kendaraan Umum Berhasil Dihapus');
    }
}
