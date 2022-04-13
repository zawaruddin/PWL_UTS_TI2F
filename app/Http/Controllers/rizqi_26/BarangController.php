<?php

namespace App\Http\Controllers\rizqi_26;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\rizqi_26\Barang;

class BarangController extends Controller
{
    public function index()
    {
        $data = Barang::latest()->paginate(5);
        return view('rizqi_26.index',compact('data'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rizqi_26.create');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'nama' => 'required',
            'stock' => 'required',
            'harga_jual' => 'required',
            'harga_beli' => 'required'
        ]);
    
        Barang::create($request->all());
    
        return redirect()->route('barang.index')
                        ->with('success','Product created successfully.');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Barang $barang)
    {
        return view('rizqi_26.show',compact('barang'));
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Barang $barang)
    {
        return view('rizqi_26.edit',compact('barang'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Barang $barang)
    {
        request()->validate([
            'nama' => 'required',
            'stock' => 'required',
            'harga_jual' => 'required',
            'harga_beli' => 'required'
        ]);
    
        $barang->update($request->all());
    
        return redirect()->route('barang.index')
                        ->with('success','Product updated successfully');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Barang $barang)
    {
        $barang->delete();
        return redirect()->route('barang.index')
                        ->with('success','Product deleted successfully');
    }
}
