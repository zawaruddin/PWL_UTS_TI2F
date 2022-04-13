<?php

namespace App\Http\Controllers\aliyya_22;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\aliyya_22\Motor;

class MotorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $motor = Motor::all();
        $motor = Motor::orderBy('id_motor')->paginate(3);
        return view('aliyya_22.index', compact('motor'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('aliyya_22.create');
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
            'nama_motor' => 'required',
            'merk_motor' => 'required',
            'transmisi' => 'required',
            'warna_motor' => 'required',
            'harga' => 'required',
        ]);
        Motor::create($request->all());

        return redirect()->route('motor.index')
            ->with('success', 'Data baru berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $motor = Motor::find($id);
        return view('aliyya_22.detail', compact('motor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $motor = Motor::find($id);
        return view('aliyya_22.edit', compact('motor'));
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
            'nama_motor' => 'required',
            'merk_motor' => 'required',
            'transmisi' => 'required',
            'warna_motor' => 'required',
            'harga' => 'required',
        ]);

        Motor::find($id)->update($request->all());
        return redirect()->route('motor.index')
            ->with('success', 'Data  berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_motor)
    {
        Motor::find($id_motor)->delete();
        return redirect()->route('motor.index')
            ->with('success', 'Data berhasil dihapus!');
    }

    public function search(Request $request)
    {
        $keyword = $request->search;
        $motor = Motor::where('nama_motor', 'like', "%" . $keyword . "%")->paginate(3);
        return view(view: 'motor.index', data: compact(var_name: 'motor'));
    }
}
