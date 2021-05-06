

@extends('welcome')



@section('content')
<div class="w3-content" style="max-width:1532px;">

    <h2>Mes reservation</h2>


    <div class="w3-container w3-white">

        @foreach ($reservations  as  $reservation)


Chambre id : {{ $reservation->chambre_id }}


@endforeach


</div>
@endsection
