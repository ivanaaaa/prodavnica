<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Kategorija;
use Illuminate\Http\Request;
use Session;

class KategorijaController extends Controller
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
            $kategorija = Kategorija::where('ime', 'LIKE', "%$keyword%")
				->paginate($perPage);
        } else {
            $kategorija = Kategorija::paginate($perPage);
        }

        return view('kategorija.index', compact('kategorija'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('kategorija.create');
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
        
        $requestData = $request->all();
        
        Kategorija::create($requestData);

        Session::flash('flash_message', 'Категоријата е додадена!');

        return redirect('kategorii');
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
        $kategorija = Kategorija::findOrFail($id);

        return view('kategorija.show', compact('kategorija'));
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
        $kategorija = Kategorija::findOrFail($id);

        return view('kategorija.edit', compact('kategorija'));
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
        
        $requestData = $request->all();
        
        $kategorija = Kategorija::findOrFail($id);
        $kategorija->update($requestData);

        Session::flash('flash_message', 'Категоријата е ажурирана!');

        return redirect('kategorii');
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
        if (count(Kategorija::find($id)->produkti)!=0){
            return redirect('kategorii');
        }
        Kategorija::destroy($id);

        Session::flash('flash_message', 'Категоријата е избришана!');

        return redirect('kategorii');
    }
}
