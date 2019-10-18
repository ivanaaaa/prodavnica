<?php

namespace App\Http\Controllers;

use App\Kategorija;
use App\Produkt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PocetnaController extends Controller
{
    public function index(){
        $kategorii = Kategorija::all();
        $produkti = Produkt::all();
        return view('pocetna', compact('produkti', 'kategorii'));
    }

    public function show($id)
    {
        $produkti = Produkt::findOrFail($id);
        $kategorii = Kategorija::all();
        return view('produkt', compact('produkti', 'kategorii'));
    }
    public function showByKat($id)
    {
        $kategorii = Kategorija::all();
        $produkti = Kategorija::where('id', '=', $id)->with('produkti')->get();
        $produkti = $produkti[0]->produkti;
        return view('pocetna', compact('produkti', 'kategorii'));
    }
}
