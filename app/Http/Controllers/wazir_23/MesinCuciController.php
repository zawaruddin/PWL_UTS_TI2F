<?php

namespace App\Http\Controllers\wazir_23;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\wazir_23\MesinCuci;

class MesinCuciController extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //paginate mesin cuci
        $mesincuci = MesinCuci::paginate(3);
        return view('wazir_23.index', compact('mesincuci'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mesincuci = new MesinCuci;
        return view('wazir_23.create', compact('mesincuci'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request -> validate([
            'nama' => 'required',
            'totalcucian' => 'required',
            'deskripsi' => 'required'
        ]);

        $mesincuci = new MesinCuci;
        $mesincuci -> nama = $request -> nama;
        $mesincuci -> totalcucian = $request -> totalcucian;
        $mesincuci -> deskripsi = $request -> deskripsi;
        $mesincuci -> save();

        return redirect() -> route('mesin.index')
            ->with('success', 'Pesanan Berhasil Di Buat');;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mesincuci = MesinCuci::find($id);
        return view('wazir_23.edit', compact('mesincuci'));
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
        $request -> validate([
            'nama' => 'required',
            'totalcucian' => 'required',
            'deskripsi' => 'required'
        ]);

        $mesincuci = MesinCuci::find($id);
        $mesincuci -> nama = $request -> nama;
        $mesincuci -> totalcucian = $request -> totalcucian;
        $mesincuci -> deskripsi = $request -> deskripsi;
        $mesincuci -> save();

        return redirect() -> route('mesin.index')
        ->with('success', 'Pesanan Berhasil Diupdate');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //make destroy with harddelete
        $mesincuci = MesinCuci::where("id", $id)->first();
        $mesincuci -> delete();
        return redirect() -> route('mesin.index')
        ->with('success', 'Pesanan Berhasil Dihapus');;
    }
}
