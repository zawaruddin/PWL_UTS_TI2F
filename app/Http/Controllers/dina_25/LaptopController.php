<?php

namespace App\Http\Controllers\dina_25;

use App\Http\Controllers\Controller;
use App\Models\dina_25\Laptop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

Class LaptopController extends Controller
{
    /**
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         //fungsi eloquent menampilkan data menggunakan pagination
        $laptop = DB::table('laptop')->get(); // Mengambil semua isi tabel
        $laptops = Laptop::orderBy('id', 'asc')->paginate(3);
        return view('dina_25.index', compact('laptops'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
    /**
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dina_25.create');
    }

    public function store(Request $request)
    {
        //melakukan validasi data
        $request->validate([
            'merk' => 'required',
            'harga' => 'required',
            'processor' => 'required',
            'ram' => 'required',
            'penyimpanan' => 'required',
            'os' => 'required',
        ]);
        //fungsi eloquent untuk menambah data
        Laptop::create($request->all());
        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('laptop.index')->with('success', 'Mahasiswa Berhasil Ditambahkan');
    }
    /**
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         //menampilkan detail data dengan menemukan/berdasarkan Nim Mahasiswa
         $laptop = Laptop::find($id);
         return view('dina_25.detail', compact('laptop'));
    }

    /**
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         //menampilkan detail data dengan menemukan berdasarkan Nim Mahasiswa untuk diedit
         $laptop =  DB::table('laptop')->where('id', $id)->first();
         return view('dina_25.edit', compact('laptop'));
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
        //melakukan validasi data
        $request->validate([
            'merk' => 'required',
            'harga' => 'required',
            'processor' => 'required',
            'ram' => 'required',
            'penyimpanan' => 'required',
            'os' => 'required',
        ]);

   //fungsi eloquent untuk mengupdate data inputan kita
    Laptop::find($id)->update($request->all());
   //jika data berhasil diupdate, akan kembali ke halaman utama
        return redirect()->route('laptop.index')
        ->with('success', 'Data Laptop Berhasil Diupdate');
    }
    /**
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       //fungsi eloquent untuk menghapus data
       Laptop::find($id)->delete();
       return redirect()->route('laptop.index')
       -> with('success', 'Data Laptop Berhasil Dihapus');   
    }

    public function search(Request $request){
        $keyword = $request -> search;
        $laptops = Laptop::where('merk','like','%'. $keyword . '%')
            ->orWhere('harga', 'like', '%' .$keyword. '%')
            ->orWhere('os', 'like', '%' .$keyword. '%')
            ->paginate(3)->withQueryString();
        return view('dina_25.index', compact('laptops'));
    }
}
