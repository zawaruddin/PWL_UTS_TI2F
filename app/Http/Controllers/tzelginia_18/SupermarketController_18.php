<?php

namespace App\Http\Controllers\tzelginia_18;

use Illuminate\Http\Request;
use App\Models\tzelginia_18\Supermarket_18;
use Illuminate\Support\Facades\DB;


class SupermarketController_18 extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //fungsi eloquent menampilkan data menggunakan pagination 
        // $supermarket = $supermarket = DB::table('supermarket')->get(); // Mengambil semua isi tabel

        $supermarket = Supermarket_18::all(); // Mengambil semua isi tabel
        $supermarket = Supermarket_18::orderBy('id', 'desc')->paginate(3);
        return view('tzelginia_18.index',  compact('supermarket'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tzelginia_18.create');
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
            'kode_brg' => 'required|unique:supermarket',
            'nama_brg' => 'required',
            'merk_brg' => 'required',
            'harga_brg' => 'required',
            'stok_brg' => 'required',
        ]);

        //fungsi eloquent untuk menambah data
        Supermarket_18::create($request->all());

        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('tzelginia_18.index')
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
        $supermarket = Supermarket_18::find($id);
        return view('tzelginia_18.detail', compact('supermarket'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $supermarket = Supermarket_18::find($id);
        return view('tzelginia_18.edit', compact('supermarket'));
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
            'kode_brg' => 'required',
            'nama_brg' => 'required',
            'merk_brg' => 'required',
            'harga_brg' => 'required',
            'stok_brg' => 'required',
        ]);

        //fungsi eloquent untuk menambah data
        Supermarket_18::find($id)->update($request->all());

        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('tzelginia_18.index')
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
        Supermarket_18::find($id)->delete();
        return redirect()->route('tzelginia_18.index')
            ->with('success', 'Barang Berhasil Dihapus');
    }
}
