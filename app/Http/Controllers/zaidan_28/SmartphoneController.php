<?php

namespace App\Http\Controllers\zaidan_28;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\zaidan_28\Smartphone;

class SmartphoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $smartphone = Smartphone::all();
        return view('zaidan_28.index', compact('smartphone'));
        with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('zaidan_28.create');
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
            'Penyimpanan' => 'required',
            'Stok' => 'required',
        ]);

        Smartphone::create($request->all());

        return redirect()->route('hp.index')
            ->with('success', 'Smartphone Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $smartphone = Smartphone::find($id);
        return view('zaidan_28.detail', compact('Smartphone'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Smartphone::find($id)->delete();
         return redirect()->route('zaidan_18.index')
         -> with('success', 'Smartphone Berhasil Dihapus');
    }
}
