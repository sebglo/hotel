<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        /* return view('layouts.home'); */
        $chambres = \App\Models\Chambre::all();//latest()->paginate(5);

        //return view('layouts/home', compact('chambres'))
            //->with('i', (request()->input('page', 1) - 1) * 5)
            //;

            return view('layouts.home',array(
                'chambres' => $chambres
            ));
    }
}
