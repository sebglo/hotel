<?php

namespace App\Http\Controllers;

use App\Models\Chambre;
use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $chambres = Chambre::all();

        $aut = Auth::user()->id;
        $user = User::where('id', $aut);

        return view(
            'LayoutPublic.listSimple',
            [
                'chambres' => $chambres,
                'user' => $user
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Chambre  $chambre
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $single_chambre = Chambre::find($id);
        return view(
            'LayoutPublic.singleRoom',
            [
                'chambre' => $single_chambre
            ]
        );
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
    }
}
