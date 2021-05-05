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

<div class="container">
    <a class="w3-bar-item w3-button w3-red w3-mobile" href="{{-- {{ route('layouts.create') }} --}}">Entrer une nouvelle chambre</a>
</div>

<div class="container">

    <table class="table table-bordered">
        <tr>
        <th>No</th>
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
        <td>{{ $chambre->id }}</td>
        <td>{{ $chambre->taille }}</td>
        <td>{{ $chambre->nombre_de_lit }}</td>
        <td>{{ $chambre->type_de_lit }}</td>
        <td>{{ $chambre->balcon }}</td>
        <td>
        <form action="{{ route('layouts.destroy',$chambre->id) }}" method="POST">
        <a class="btn btn-info" href="{{ route('layouts.show',$chambre->id) }}">Show</a>
        <a class="btn btn-primary" href="{{ route('layouts.edit',$chambre->id) }}">Edit</a>
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
        </form>
        </td>
        </tr>
        @endforeach
        </table>
</div>

@endsection
