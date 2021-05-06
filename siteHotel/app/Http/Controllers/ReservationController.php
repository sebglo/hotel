<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Models\Chambre;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //


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
        // $id = Auth::id();
        if (auth()->check()) {

            Auth::user();
            $reservation =  new Reservation();
            $reservation->user_id = Auth::user()->id;
            $reservation->chambre_id = $request->get('chambre_id');
            $reservation->date_debut = $request->get('date_debut');
            $reservation->date_fin = $request->get('date_fin');
            $reservation->nombre_de_personne = $request->get('nombre_de_personne');

            $reservation->save();

            /*    Reservation::create(request()->validate([
            'user_id' => $id,
            'chambre_id' => 'required',
            'date_debut' => 'required',
            'date_fin' => 'required',
            'nombre_de_personne' => 'required',

        ])); */


            return redirect('/home');
        }

        return view('auth.login');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function show(Reservation $reservation)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function edit(Reservation $reservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reservation $reservation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservation $reservation)
    {
        //
    }
}
