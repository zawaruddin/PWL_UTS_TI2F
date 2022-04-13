<?php

namespace App\Http\Controllers\aditya_24;
use App\Models\aditya_24\Lemari_Es;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class LemariEsController extends Controller
{
    public function index()
    {
        //fungsi eloquent menampilkan data menggunakan pagination
     $Lemari_Es = $Lemari_Es = DB::table('lemari_es')->paginate(3); // Mengambil semua isi tabel
     $Lemari_Es = lemari_es::orderBy('id_lemaries', 'asc')->paginate(3);
    return view('aditya_24.index', compact('Lemari_Es'));
    //  with('i', (request()->input('page', 1) - 1) * 5);
    // $lemari=Lemari_Es::with('kelas')->get();
    // $paginate=Lemari_Es::orderby('id_Lemari_Es','asc')->paginate(3);
    // return view('Lemari_Es.index',['Lemari_Es'=>$Lemari_Es,'paginate'=>$paginate]);
    //       //  with('i', (request()->input('page', 1) - 1) * 5);
    }
public function create()
    {
        $lemaries=lemari_es::all();//mendapatkan data dari tabel kelas
        return view('aditya_24.create',['lemaries'=>$lemaries]);
    }
public function store(Request $request)
    {
        //melakukan validasi data
        $request->validate([
        'merek' => 'required',
        'jumlah_pintu' => 'required',
        'berat' => 'required',
        'warna' => 'required',
        'harga' => 'required'
        ]);
        $Lemari_Es = new Lemari_Es;
        $Lemari_Es->merek = $request->get('merek');
        $Lemari_Es->jumlah_pintu = $request->get('jumlah_pintu');
        $Lemari_Es->berat = $request->get('berat');
        $Lemari_Es->warna = $request->get('warna');
        $Lemari_Es->harga = $request->get('harga');
        //$Lemari_Es->save();
        //$kelas=new Kelas;
        //$kelas->id=$request->get('Kelas');
        $Lemari_Es->save();
        // //fungsi eloquent untuk menambah data
        // //  Lemari_Es::create($request->all());
        // $Lemari_Es->save();
        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('webnya.index')
            ->with('success', 'Lemari_Es Berhasil Ditambahkan');
    }
    public function show($id)
    {
        $lemaries = lemari_es::find($id);
        return view('aditya_24.detail', compact('lemaries'));
    }
    public function edit($id)
        {
        //menampilkan detail data dengan menemukan berdasarkan Nim Mahasiswa untuk diedit
            $lemaries = DB::table('lemari_es')->where('id_lemaries', $id)->first();;
            $lemaries=lemari_es::all();//mendapatkan data dari table kelas
            return view('aditya_24.edit', compact('lemaries'));
        }
    public function update(Request $request,$id)
        {
            //melakukan validasi data
            $request->validate([
                'merek' => 'required',
                'jumlah_pintu' => 'required',
                'berat' => 'required',
                'warna' => 'required',
                'harga' => 'required'
            ]);
            Mahasiswa::find($id)->update($request->all());
            //fungsi eloquent untuk mengupdate data inputan kita
            // Mahasiswa::find($Nim)->update($request->all());
                //jika data berhasil diupdate, akan kembali ke halaman utama
                return redirect()->route('webnya.index')
                    ->with('success', 'Mahasiswa Berhasil Diupdate');
        }
}
