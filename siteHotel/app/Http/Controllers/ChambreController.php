<?php

namespace App\Http\Controllers;

use App\Models\Chambre;
use Illuminate\Http\Request;

class ChambreController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /* return view('layouts.home'); */
        $chambres = \App\Models\Chambre::all(); //latest()->paginate(5);

        //return view('layouts/home', compact('chambres'))
        //->with('i', (request()->input('page', 1) - 1) * 5)
        //;

        return view('layouts.home', array(
            'chambres' => $chambres
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('layouts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'taille' => 'required',
            'prix' => 'required',
            'nombre_de_lit' => 'required',
            'type_de_lit' => 'required',
            'balcon' => 'required',
        ]);

        Chambre::create($request->all());

        return redirect()->route('chambre.index')
            ->with('success', 'chambre created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Chambre  $chambre
     * @return \Illuminate\Http\Response
     */
    public function show(Chambre $chambre)
    {
        //

        /* return view('LayoutPublic.singleRoom',
        [
            'single' => $chambre
        ]); */
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Chambre  $chambre
     * @return \Illuminate\Http\Response
     */
    public function edit(Chambre $chambre)
    {
        //
        //print_r($chambre); die;
        //dd($chambre->id);
        return view('layouts.edit', compact('chambre'));
        //return view('layouts.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Chambre  $chambre
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Chambre $chambre)
    {
        //
        $request->validate([
            'taille' => 'required',
            'prix' => 'required',
            'nombre_de_lit' => 'required',
            'type_de_lit' => 'required',
            'balcon' => 'required',
        ]);

        $chambre->update($request->all());

        return redirect()->route('chambre.index')
            ->with('success', 'chambre updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Chambre  $chambre
     * @return \Illuminate\Http\Response
     */
    public function destroy(Chambre $chambre)
    {
        //
        $chambre->delete();

        return redirect()->route('chambre.index')
            ->with('success', 'chambre deleted successfully');
    }
}
