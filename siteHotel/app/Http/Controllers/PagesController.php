<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chambre;

class PagesController extends Controller
{
    //
    public function index()
    {
        $chambres = Chambre::all();

        return view(
            'LayoutPublic.listSimple',
            [
                'chambres' => $chambres
            ]
        );
    }

    public function contact()
    {
        return view('LayoutPublic.contact');
    }

    public function reserve()
    {
        return view('LayoutPublic.reservRoom');
    }

    public function single()
    {
        return view('LayoutPublic.singleRoom');
    }
}
