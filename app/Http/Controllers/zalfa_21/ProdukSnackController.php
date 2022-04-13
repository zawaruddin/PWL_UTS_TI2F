<?php

namespace App\Http\Controllers\zalfa_21;

use Illuminate\Http\Request;
use App\Models\zalfa_21\ProdukSnack;
use DB;
use App\Http\Controllers\Controller\zalfa_21;
class ProdukSnackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ProdukSnack = ProdukSnack::orderBy('id', 'desc')->paginate(3);
        return view('zalfa_21.index', compact('ProdukSnack'));
        with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('zalfa_21.create');
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
            'nama' => 'required',
            'merk' => 'required',
            'jenis' => 'required',
            'berat' => 'required',
            'harga' => 'required',
            'expired_date' => 'required',
            ]);

            //fungsi eloquent untuk menambah data
            ProdukSnack::create($request->all());

            //jika data berhasil ditambahkan, akan kembali ke halaman utama
            return redirect()->route('zalfa_21.index')
            ->with('success', 'Snack Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //menampilkan detail data dengan menemukan/berdasarkan id produk
        $ProdukSnack = ProdukSnack::find($id);
        return view('zalfa_21.detail', compact('ProduckSnack'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //menampilkan detail data dengan menemukan berdasarkan id produk untuk diedit
        $ProdukSnack = DB::table('produk_snack')->where('id', $id)->first();;
        return view('zalfa_21.edit', compact('ProdukSnack'));
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
            'nama' => 'required',
            'merk' => 'required',
            'jenis' => 'required',
            'berat' => 'required',
            'harga' => 'required',
            'expired_date' => 'required',
        ]);

        //fungsi eloquent untuk mengupdate data inputan kita
            ProdukSnack::find($id)->update($request->all());

        //jika data berhasil diupdate, akan kembali ke halaman utama
            return redirect()->route('zalfa_21.index')
            ->with('success', 'Produk snack Berhasil Diupdate');
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
        ProdukSnack::find($id)->delete();
        return redirect()->route('zalfa_21.index')
        -> with('success', 'Produk Snack Berhasil Dihapus');
    }
}
