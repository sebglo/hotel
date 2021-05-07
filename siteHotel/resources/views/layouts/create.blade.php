@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-lg-2">
            {{-- colone 1 --}}
        </div>
        <div class="col-lg-8">
            {{-- colone 2 --}}
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h2>Creation d'une chambre</h2>
                    </div>
                    <div class="pull-right">
                        <a class="w3-bar-item w3-button w3-grey w3-mobile" href="{{ route('chambre.index') }}"> Retour</a>
                    </div>
                </div>
            </div>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> il y a un probleme dans votre saisie.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            {{-- 'taille' => 'required',
            'prix' => 'required',
            'nombre_de_lit' => 'required',
            'type_de_lit' => 'required',
            'balcon' => 'required', --}}
            <form action="{{ route('chambre.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Taille de la chambre:</strong>
                            <input type="text" name="taille" class="form-control"
                                placeholder="taille">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Prix de la chambre:</strong>
                            <input type="text" name="prix" class="form-control"
                                placeholder="prix">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Nombre de lit:</strong>
                            <input type="text" name="nombre_de_lit" class="form-control"
                                placeholder="nombre_de_lit">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Type de lit:</strong>
                            <input type="text" name="type_de_lit" class="form-control"
                                placeholder="type_de_lit">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Balcon:</strong>
                            <input type="text" name="balcon" class="form-control"
                                placeholder="balcon">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <button class="w3-bar-item w3-button w3-grey w3-mobile" type="submit" class="btn btn-primary">Valider</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-2">
            {{-- colone 3 --}}
        </div>
    </div>


@endsection
