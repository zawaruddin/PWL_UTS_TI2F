<?php

namespace App\Http\Controllers;

use App\Models\AksesorisPakaian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AksesorisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aksesoris = DB::table('aksesoris')->get(); // Mengambil semua isi tabel
        $posts = AksesorisPakaian::paginate(5);
        return view('nisrina_09.index', ['aksesoris' => $posts])
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('nisrina_09.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validasi data
        $request->validate([
            'kode_barang'=>'required',
            'nama'=>'required',
            'harga'=>'required',
            'stok'=>'required',
        ]);

        //fungsi untuk menambahkan data
        AksesorisPakaian::create($request->all());
        //jika data berhasil ditambahkan, maka halaman kembali ke halaman utama
        return redirect()->route('aksesoris.index')
            ->with('success', 'Data Aksesoris Pakaian Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Menampilkan Detail data
        $aksesoris = AksesorisPakaian::find($id);
        return view('nisrina_09.detail', compact('aksesoris'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //menampilkan detail data dengan menemukan data berdasarkan id aksesoris
        $aksesoris = DB::table('aksesoris')->where('id', $id)->first();
        return view('nisrina_09.edit', compact('aksesoris'));
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
        //validasi data
        $request->validate([
            'kode_barang'=>'required',
            'nama'=>'required',
            'harga'=>'required',
            'stok'=>'required',
        ]);

        //fungsi untuk mengupdate data inputan
        AksesorisPakaian::find($id)->update($request->all());
        //jika data berhasil ditambahkan, maka halaman kembali ke halaman utama
        return redirect()->route('aksesoris.index')
            ->with('success', 'Data Aksesoris Pakaian Berhasil Diupdate');
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
        AksesorisPakaian::find($id)->delete();
        return redirect()->route('aksesoris.index')
            -> with('success', 'Aksesoris Pakaian Berhasil Dihapus');
    }

    public function search(Request $request)
    {
        $keyword = $request->search;
        $aksesoris = AksesorisPakaian::where('nama', 'like', "%" . $keyword . "%");
        return view('nisrina_09.index', compact('aksesoris'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
