<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KasirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kasir = $kasir = DB::table('kasir')->get(); // Mengambil semua isi tabel
        $posts = kasir::orderBy('Kode', 'desc')->paginate(6);
        return view('mahasiswa.index', compact('mahasiswa'));
        with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kasir..create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    //melakukan validasi data
        $request->validate([
        'id_barang' => 'required',
        'Nama' => 'required',
        'kode' => 'required',
        'Jumlah' => 'required',  
        ]);
        Kasir::create($request->all());
        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('kasir.index')
        ->with('success', 'Barang Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //menampilkan detail data dengan menemukan/berdasarkan Nim Mahasiswa
        $kasir = Kasir::find($id);
        return view('mkasir.detail', compact('Kasir'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //menampilkan detail data dengan menemukan berdasarkan Nim Mahasiswa untuk diedit
            $kasir = DB::table('kasir')->where('kode', $id)->first();;
            return view('kasir.edit', compact('Kasir'));
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
        //melakukan validasi data
        $request->validate([
            'id_barang' => 'required',
            'Nama' => 'required',
            'kode' => 'required',
            'Jumlah' => 'required',  
            ]);
        //fungsi eloquent untuk mengupdate data inputan kita
            Kasir::find($id)->update($request->all());  
        //jika data berhasil diupdate, akan kembali ke halaman utama
            return redirect()->route('kasir.index')
                ->with('success', 'Barang Berhasil Diupdate');  
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
            Kasir::find($id)->delete();
            return redirect()->route('kasir.index')
                > with('success', 'Barang Berhasil Dihapus');
    }
}
