<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Kategorija;
use App\Produkt;
use Illuminate\Http\Request;
use Session;

class ProduktiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $produkti = Produkt::where('ime', 'LIKE', "%$keyword%")
				->orWhere('opis', 'LIKE', "%$keyword%")
				->orWhere('cena', 'LIKE', "%$keyword%")
				->orWhere('slika', 'LIKE', "%$keyword%")
				->paginate($perPage);
        } else {
            $produkti = Produkt::paginate($perPage);
        }

        return view('produkti.index', compact('produkti'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $kategorii = Kategorija::get();
        if (count($kategorii) == 0)
            return redirect('kategorii');
        return view('produkti.create', compact('kategorii'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $p = new Produkt();
        if ($request->hasFile('slika')) {
            $file = $request->slika;
            $destinationPath = public_path(). '/images/';
            $filename = $file->getClientOriginalName();

            $file->move($destinationPath, $filename);

            $p->slika = '/images/'.$filename;
        }else{
            return redirect('produkti');
    }
        $p->ime = $request->ime;
        $p->opis = $request->opis;
        $p->cena = $request->cena;
        $p->id_kategorija = $request->id_kategorija;
        $p->save();

        Session::flash('flash_message', 'Продуктот е додаден!');

        return redirect('produkti');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $produkti = Produkt::findOrFail($id);
        $kategorii = Kategorija::get();
        return view('produkti.show', compact('produkti', 'kategorii'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $produkti = Produkt::findOrFail($id);
        $kategorii = Kategorija::get();
        return view('produkti.edit', compact('produkti', 'kategorii'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {
        
        //$requestData = $request->all();
        
        $p = Produkt::findOrFail($id);
        if ($request->hasFile('slika')) {
            $file = $request->slika;
            $destinationPath = public_path(). '/images/';
            $filename = $file->getClientOriginalName();

            $file->move($destinationPath, $filename);

            $p->slika = '/images/'.$filename;
        }
        $p->ime = $request->ime;
        $p->opis = $request->opis;
        $p->cena = $request->cena;
        $p->id_kategorija = $request->id_kategorija;
        $p->update();

        Session::flash('flash_message', 'Продуктот е ажуриран!');

        return redirect('produkti');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Produkt::destroy($id);

        Session::flash('flash_message', 'Продуктот е избришан!');

        return redirect('produkti');
    }
}
