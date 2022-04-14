<?php

namespace App\Http\Controllers\nisa_17;

use Illuminate\Http\Request;
use App\Models\nisa_17\Tv;
use Illuminate\Support\Facades\DB;

class TvController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tv = Tv::with('tv')->get();
        $paginate = Tv::orderBy('id', 'asc')->paginate(3);
        return view('nisa_17.index', ['tv' => $tv, 'paginate' => $paginate]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('nisa_17.create');
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
            'merk' => 'required',
            'jenis' => 'required',
            'ujuran' => 'required',
            'warna' => 'required',
            'harga' => 'required',
        ]);
        
        Tv::create($request->all());
        return redirect()->route('nisa_17.index')
        ->with('success', 'Data Berhasil Ditambahkan');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Tv $tv)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Tv $tv)
    {
        $Tv = $tv;
        return view('nisa_17.edit', compact('Tv'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tv $tv)
    {
        $tv->validate([
            'merk' => 'required',
            'jenis' => 'required',
            'ujuran' => 'required',
            'warna' => 'required',
            'harga' => 'required',
        ]);
        
        Tv::where('id', $tv->id)->update($tv);
        return redirect()->route('nisa_17.index')
        ->with('success', 'Data Berhasil DiUpdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tv $tv)
    {
        Tv::where('id', $tv->id)->delete();
        return redirect()->route('nisa_17.index')
        ->with('success', 'Data Berhasil Dihapus');
    }
}
