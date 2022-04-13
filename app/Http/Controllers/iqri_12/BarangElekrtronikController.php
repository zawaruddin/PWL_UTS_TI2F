<?php

namespace App\Http\Controllers\iqri_12;
use App\Models\iqri_12\Elektronik;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class BarangElekrtronikControler extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $elektronik = Elektronik::all(); // Mengambil semua isi tabel
        $paginate = Elektronik::orderBy('id', 'asc')->paginate(3);
        
        return view('iqri_12.index', ['elektornik' => $elektronik,'paginate'=>$paginate]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('iqri_12.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //melakukan validasi data
             $request->validate([
            'Nama' => 'required',
            'Merk' => 'required',
            'Harga' => 'required',
            'Suplier' => 'required',
            'Tanggal_Beli' => 'required',

            ]);
            //fungsi eloquent untuk menambah data
            Elektronik::create($request->all());
            //jika data berhasil ditambahkan, akan kembali ke halaman utama
            return redirect()->route('iqri_12.index')
            ->with('success', 'Barang Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //menampilkan detail data dengan menemukan/berdasarkan Nim Mahasiswa
        $elektronik = Elektronik::where('id', $id)->first();
        return view('iqri_12.detail', compact('elektronik'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //menampilkan detail data dengan menemukan berdasarkan Nim Mahasiswa untuk diedit
        $elektronik = DB::table('elektronik')->where('id', $id)->first();
        return view('iqri_12.edit', compact('elektronik'));
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
            'Nama' => 'required',
            'Merk' => 'required',
            'Harga' => 'required',
            'Suplier' => 'required',
            'Tanggal_Beli' => 'required',
            ]);
            //fungsi eloquent untuk mengupdate data inputan kita
            Elektronik::where('id', $id)->update([
            'nama'=>$request->Nama,
            'merk'=>$request->Merk,
            'harga'=>$request->Harga,
            'suplier'=>$request->Suplier,
            'tanggal_beli'=>$request->Tanggal_Beli,
            ]);

            //jika data berhasil diupdate, akan kembali ke halaman utama
            return redirect()->route('iqri_12.index')
            ->with('success', 'Barang Berhasil Diupdate');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //fungsi eloquent untuk menghapus data
        Elektronik::where('id', $id)->delete();
        return redirect()->route('iqri_12.index')-> with('success', 'Barang Berhasil Dihapus');
    }
}
