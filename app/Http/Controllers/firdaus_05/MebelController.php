<?php

namespace App\Http\Controllers;

use App\Models\Mebel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MebelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mebel = $mebel = DB::table('mebel')->get();
        $posts = Mebel::orderBy('Kode', 'desc')->paginate(6);
        return view('firdaus_05.index', compact('mebel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mebel.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'Kode' => 'required',
            'Nama' => 'required',
            'Jenis' => 'required',
            'Harga' => 'required', 
        ]);

        Mebel::create($request->all());
        return redirect()->route('firdaus_05.index')
        ->with('success', 'Mahasiswa Berhasil Ditambahkan');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($Kode)
    {
        $Mebel = Mebel::find($Kode);
        return view('firdaus_05.detail', compact('Mebel'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($Kode)
    {
        $Mahasiswa = DB::table('mebel')->where('kode', $Kode)->first();;
        return view('firdaus_05.edit', compact('Mebel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $Kode)
    {
        $request->validate([
            'Kode' => 'required',
            'Nama' => 'required',
            'Jenis' => 'required',
            'Harga' => 'required', 
        ]);

        Mebel::find($Kode)->update($request->all());

        return redirect()->route('firdaus_05.index')
        ->with('success', 'Mebel Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($Kode)
    {
        Mebel::find($Kode)->delete();
        return redirect()->route('firdaus_05.index')
        -> with('success', 'Mebel Berhasil Dihapus');
    }
}
