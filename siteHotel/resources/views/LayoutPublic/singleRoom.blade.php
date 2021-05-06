

@extends('welcome')



@section('content')
<div class="w3-content" style="max-width:1532px;">




    <h1>Chambre en detail</h1>
    {{-- <div class="w3-third w3-margin-bottom"> --}}
    <img src="../../images/room_single.jpg" alt="Norway" style="width:50%">
    <div class="w3-container w3-white">
        <h3> {{$chambre->prix  }} $ </h3>
        <h6 class="w3-opacity"> {{$chambre->nombre_de_lit }} lits</h6>

        <p> {{$chambre->taille}} <sup>m2</sup></p>
        <p> Balcon :  {{$chambre->balcon}} </p>
        <p class="w3-large"><i class="fa fa-bath"></i> <i class="fa fa-phone"></i> <i class="fa fa-wifi"></i>
        </p>


    </div>





@include('LayoutPublic.reservation.reservRoom')

@endsection
