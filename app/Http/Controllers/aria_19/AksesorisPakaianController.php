<?php

namespace App\Http\Controllers\aria_19;

use App\Models\aria_19\AksesorisPakaian;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AksesorisPakaianController extends Controller
{
    public function index()
    {
        return view("aria_19.index", [
            "data" => AksesorisPakaian::all()
        ]);
    }

    public function create()
    {
        return view("aria_19.create");
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            "nama" => "required",
            "warna" => "required",
            "desc" => "required",
            "harga" => "required",
        ]);

        AksesorisPakaian::create($validatedData);
        return redirect("dashboard")->with("success", "Tambah data berhasil");
    }

    public function show($id)
    {
        return view("aria_19.show", [
            "datadetail" => AksesorisPakaian::where("id", $id)->first()
        ]); 
    }

    public function edit($id)
    {
        return view("aria_19.edit", [
            "datadetail" => AksesorisPakaian::where("id", $id)->first()
        ]);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            "nama" => "required",
            "warna" => "required",
            "desc" => "required",
            "harga" => "required",
        ]);

        AksesorisPakaian::where("id", $id)->update($validatedData);
        return redirect("dashboard")->with("success", "Tambah barhasil di edit");
    }

    public function destroy($id)
    {
        $data = AksesorisPakaian::where("id", $id)->first();
        AksesorisPakaian::destroy($data);
        return redirect("dashboard")->with("success", "Your posts has been deleted");
    }
}
