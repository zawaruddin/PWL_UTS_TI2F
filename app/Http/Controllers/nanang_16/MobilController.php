<?php

namespace App\Http\Controllers\nanang_16;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\nanang_16\Mobil;

class MobilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Mobil::all();
        return view('nanang_16.pages.mobil.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('nanang_16.pages.mobil.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // request()->validate([
        //     'nama'  => 'required|string|min:10|max:100',
        //     'brand' => 'required|string|min:10|max:30',
        //     'mesin' => 'required|string|min:10|max:100',
        //     'total' => 'required',
        //     'harga' => 'reguired',
        //     'warna' => 'required',
        // ]);

        $datas = Mobil::create($request->all());

        return redirect()->route('mobil.index')
                        ->with('success','Data created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Mobil $mobil)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Mobil $mobil)
    {
        return view('nanang_16.pages.mobil.edit', compact('mobil'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mobil $mobil)
    {
        // $validateData = $request->validate([
        //     'nama'  => 'required|string|min:10|max:100',
        //     'brand' => 'required|string|min:10|max:30',
        //     'mesin' => 'required|string|min:10|max:100',
        //     'total' => 'required',
        //     'harga' => 'reguired',
        //     'warna' => 'required',
        // ]);

        $mobil->update($request->all());

        if($mobil) {
            return redirect()->route('mobil.index')->with('success','Data updated successfully!');
        }else{
            return redirect()->route('mobil.index')->with('error','Data failed to update');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mobil $mobil)
    {
        $mobil->delete();

        return redirect()->route('mobil.index')->with('success', 'Data berhasil Dihapus');
    }
}
