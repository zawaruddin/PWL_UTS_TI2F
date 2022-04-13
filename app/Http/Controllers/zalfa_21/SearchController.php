<?php

namespace App\Http\Controllers\zalfa_21;
use App\Http\Controllers\Controller\zalfa_21;

use Illuminate\Http\Request;

use App\Models\zalfa_21\ProdukSnack;

class SearchController extends Controller
{
    public function search(Request $request) {
        $keyword = $request->cari;

        $ProdukSnack = ProdukSnack::where('nama', 'like', '%' . $keyword . '%')->paginate(3);
        return view('zalfa_21.index',[
            'ProduckSnack' => $ProduckSnack
        ]);
    }
}