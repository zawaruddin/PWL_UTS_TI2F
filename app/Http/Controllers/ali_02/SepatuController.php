<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SepatuController extends Controller
{
    /**
     * Display a listing of the resource.
     *gak bisa
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sepatus = Sepatu::all();
        $posts = Sepatu::orderBY('Nim', 'desc')->paginate(6);
        return view('ali_02.index', compact('sepatus'));
        with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view(ali_02.create);
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
            'warna' => 'required',
            'ukuran' => 'required',
            'bahan' => 'required',
            'harga' => 'required',
            'No_Handphone' => 'required',
            ]);

            Sepatu::create($request->all());

            return redirect()->route('ali_02.index')
                ->with('success', 'Sepatu Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Sepatu = Sepatu::find($id);
        return view('ali_02.detail', compact('Sepatu'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $Sepatu = Sepatu::find($id);
        return view('ali_02.edit', compact('Sepatu'));
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
            'warna' => 'required',
            'ukuran' => 'required',
            'bahan' => 'required',
            'harga' => 'required',
            'No_Handphone' => 'required',
            ]);

            Sepatu::find($id)->update($request->all());

            return redirect()->route('ali_02.index')
            ->with('success', 'Sepatu Berhasil Diupdate');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Sepatu::find($id)->delete();
        return redirect()->route('ali_02.index')
        -> with('success', 'Sepatu Berhasil Dihapus');
    }
}
