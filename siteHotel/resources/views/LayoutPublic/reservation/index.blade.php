

@extends('welcome')


@section('content')

<div class="w3-content" style="max-width:1532px;">

    <div class="w3-container w3-margin-top" id="rooms">



        <div class="w3-container w3-white">

    <h2>Mes reservation</h2>


    <table>

        <thead>
            <tr>
              <th>Prix</th>
              <th>Date debut</th>
              <th>Date fin</th>
              <th>Nombre de personne</th>

              <th>Actions</th>
            </tr>
          </thead>
        @foreach ($reservations  as  $reservation)


        <tr>
            <td>
                {{$reservation->chambre->prix }}
            </td>
        <td>
            {{ $reservation->date_debut }}
        </td>
        <td>
            {{ $reservation->date_fin }}
        </td>
        <td>
            {{$reservation->nombre_de_personne }}
        </td>
<td>
    <form action="/reservation/{{$reservation->id}}" method="POST">

        @method('delete')
        @csrf
        <div class="form-group">
            <input type="submit" class="btn btn-danger delete-user" value="Supprimmer">
        </div>
    </form>
</td>

        </tr>

@endforeach

</table>

</div>
@endsection
</div>
