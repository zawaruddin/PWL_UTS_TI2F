<?php

namespace App\Http\Controllers;

use App\Models\Sekolah;
use Illuminate\Http\Request;

class SekolahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sekolah = Sekolah::all();
        $posts = Sekolah::orderBy('NPSN')->paginate(6);
        return view('sekolah.index', compact('sekolah'));
        with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mahasiswas.create');
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
            'NPSN' => 'required',
            'nama_sekolah' => 'required',
            'alamat' => 'required',
            'no_telepon' => 'required',
        ]);
        Sekolah::create($request->all());
        return redirect()->route('sekolah.index')
            ->with('success', 'Data Sekolah Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($NPSN)
    {
        $sekolah = Sekolah::find($NPSN);
        return view('sekolah.detail', compact('Sekolah'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($NPSN)
    {
        $Sekolah = Sekolah::find($NPSN);
        return view('sekolah.edit', compact('Sekolah'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $NPSN)
    {
        $request->validate([
            'NPSN' => 'required',
            'nama_sekolah' => 'required',
            'alamat' => 'required',
            'no_telepon' => 'required',
        ]);
        Sekolah::find($NPSN)->update($request->all());
        return redirect()->route('sekolah.index')
            ->with('success', 'Data Sekolah Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($NPSN)
    {
        Sekolah::find($NPSN)->delete();
        return redirect()->route('sekolah.index')
            -> with('success', 'Data Sekolah Berhasil Dihapus');

    }
}
