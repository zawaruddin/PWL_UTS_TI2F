<?php

namespace App\Http\Controllers\asad_15;

use DB;
use App\Models\asad_15\Karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $karyawan = $karyawan = DB::table('karyawan')->get();
        $posts = Karyawan::orderBy('Nama', 'desc')->paginate(6);
        return view('karyawan.index', compact('karyawan'));
        with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('karyawan.create');
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
            'Nama' => 'required',
            'Jabatan' => 'required',
            'Alamat' => 'required',
            'Hp' => 'required',
        ]);
        Karyawan::create($request->all());
        return redirect()->route('karyawan.index')->with('success', 'Karyawan Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($Nama)
    {
        $Karyawan = DB::table('karyawan')->where('nama', $Nama)->first();
        return view('karyawan.detail', compact('Karyawan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($Nama)
    {
        $Karyawan = DB::table('karyawan')->where('nama', $Nama)->first();
        return view('karyawan.edit', compact('Karyawan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $Nama)
    {
        $request->validate([
            'Nama' => 'required',
            'Jabatan' => 'required',
            'Alamat' => 'required',
            'Hp' => 'required',
        ]);
        Mahasiswa::find($Nama)->update($request->all());
        return redirect()->route('karyawan.index')->with('success', 'Karyawan Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($Nama)
    {
        Karyawan::find($Nama)->delete();
        return redirect()->route('karyawan.index')->with('success','Karyawan Berhasil Dihapus');
    }
}
