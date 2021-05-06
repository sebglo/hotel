@extends('layouts.app')

@section('content')
<div class="w3-container w3-white w3-padding-16">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h3>{{ Auth::user()->name }} vous etez bien connecté(e)</h3></div>

                {{-- <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div> --}}
            </div>
        </div>
    </div>
</div>

<div class="container w3-padding-16">
    <a class="w3-bar-item w3-button w3-red w3-mobile" href="{{ route('layouts.create') }}">Entrer une nouvelle chambre</a><br>
</div>

<div class="container">

    <table class="table table-bordered">
        <tr class="w3-bar-item w3-red">
        <th>No</th>
        <th>Prix</th>
        <th>taille</th>
        <th>nbx de lit</th>
        <th>type de lit</th>
        <th>balcon</th>
        <th width="280px">Action</th>
        </tr>
        {{-- <?php
//print_r($chambres); die;  ?> --}}
        @foreach ($chambres as $chambre)
        {{-- Auth::ChambreController()->index  --}}
        <tr>
        <td class="w3-padding-16 w3-border">{{ $chambre->id }}</td>
        <td class="w3-padding-16 w3-border">{{ $chambre->prix }}</td>
        <td class="w3-padding-16 w3-border">{{ $chambre->taille }}</td>
        <td class="w3-padding-16 w3-border">{{ $chambre->nombre_de_lit }}</td>
        <td class="w3-padding-16 w3-border">{{ $chambre->type_de_lit }}</td>
        <td class="w3-padding-16 w3-border">{{ $chambre->balcon }}</td>
        <td class="w3-padding-16 w3-border">
        <form action="{{ route('layouts.destroy',$chambre->id) }}" method="POST">
        <a class="w3-bar-item w3-button w3-grey w3-mobile" href="{{ route('layouts.edit',$chambre->id) }}">Edit</a>
        @csrf
        @method('DELETE')
        <button type="submit" class="w3-bar-item w3-button w3-grey w3-mobile">Delete</button>
        </form>
        </td>
        </tr>
        @endforeach
        </table>
</div>

@endsection
