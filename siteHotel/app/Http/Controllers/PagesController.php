<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index()
    {
        return view('LayoutPublic.listSimple');
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
