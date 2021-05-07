@extends('welcome')

@section('content')

<div class="w3-container w3-white">

    <div class="w3-margin-top">

        <h2> Edit de votre reservion</h2>



        <form action="/reservation/{{$reservation->id}}" method="POST" ">






    @csrf
    @method('PUT')

    <strong>Date de debut:</strong>
    <input type=" text" name="date_debut" value="{{ $reservation->date_debut }}" class="form-control"
            placeholder="Titre">
            @error('title')
            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror

            <strong>Date de fin:</strong>
            <input type="text" name="date_fin" value="{{ $reservation->date_fin }}" class="form-control"
                placeholder="Titre">
            @error('title')
            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror

            <strong>Nombre de personne</strong>
            <input type="text" name="nombre_de_personne" value="{{ $reservation->nombre_de_personne }}"
                class="form-control" placeholder="Titre">
            @error('title')
            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror



            <button type="submit" class="btn btn-primary ml-3">Modifier</button>

        </form>


        @endsection
