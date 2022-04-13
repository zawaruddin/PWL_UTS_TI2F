<?php

namespace App\Http\Controllers\rifqi_01;

use App\Http\Controllers\Controller;
use App\Models\rifqi_01\Tas;
use Illuminate\Http\Request;

class TasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tas = Tas::all();
        return view('rifqi_01.index', compact('tas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rifqi_01.create');
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
            'nama'  => 'string|required',
            'jenis' => 'string|required',
            'harga' => 'required|numeric|'
        ]);

        $data = $request->all();

        $tas = Tas::create($data);

        if ($tas) {
            return redirect()->route('tas.index')->with('success', 'Data berhasil ditambahkan');
        }else{
            return redirect()->route('tas.index')->with('error', 'Data gagal ditambahkan');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\rifqi_01\Tas  $tas
     * @return \Illuminate\Http\Response
     */
    public function show(Tas $ta)
    {
        return view('rifqi_01.show', compact('ta'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\rifqi_01\Tas  $tas
     * @return \Illuminate\Http\Response
     */
    public function edit(Tas $ta)
    {
        return view('rifqi_01.edit', compact('ta'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\rifqi_01\Tas  $tas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tas $ta)
    {
        $request->validate([
            'nama'  => 'string|required',
            'jenis' => 'string|required',
            'harga' => 'required|numeric|'
        ]);

        $data = $request->all();

        $update = $ta->update($data);

        if ($update) {
            return redirect()->route('tas.index')->with('success', 'Data berhasil diupdate');
        }else{
            return redirect()->route('tas.index')->with('error', 'Data gagal diupdate');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\rifqi_01\Tas  $tas
     * @return \Illuminate\Http\Response
     */
    public function delete(Tas $tas)
    {
        $tas->delete();

        return redirect()->route('tas.index')->with('success', 'Data berhasil didelete');
    }
}
