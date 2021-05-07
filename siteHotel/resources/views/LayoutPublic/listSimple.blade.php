@extends('welcome')

@section('content')

    <!-- Page content  affichage de trois chambre de l'hotel-->


    <div class="w3-content" style="max-width:1532px;">
        <div class="w3-row-padding w3-section w3-stretch">
            <ul class="flex">
                <table>
                    @foreach ($chambres as $chambre)
                        <tr class="{{-- w3-stretch --}}">
                            <div class="{{-- col-md-4 --}}">
                                <div class="w3-row-padding w3-padding-16">
                                    <div class="{{-- w3-third --}} w3-margin-bottom">
                                        <img src="../../images/room_single.jpg" alt="Norway" style="width:100%">
                                        <h3> {{ $chambre->prix }} $ </h3>
                                        <h6 class="w3-opacity"> {{ $chambre->nombre_de_lit }} lits</h6>

                                        <p> {{ $chambre->taille }} <sup>m2</sup></p>
                                        <p class="w3-large"><i class="fa fa-bath"></i> <i class="fa fa-phone"></i> <i
                                                class="fa fa-wifi"></i>
                                        </p>
                                        {{-- <a href="/reservation/{{$chambre->id}}"> --}}
                                        <a href="{{ URL::to('home/' . $chambre->id) }}">
                                            <button class="w3-button w3-block w3-black w3-margin-bottom">Reserver</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </tr>
                    @endforeach
                </table>
            </ul>
        </div>

        <div class="w3-row-padding w3-large w3-center" style="margin:32px 0">
            <div class="w3-third"><i class="fa fa-map-marker w3-text-red"></i> 423 Some adr, Chicago, US</div>
            <div class="w3-third"><i class="fa fa-phone w3-text-red"></i> Phone: +00 151515</div>
            <div class="w3-third"><i class="fa fa-envelope w3-text-red"></i> Email: mail@mail.com</div>
        </div>
        <h4>Localitation GPS</h4>
        {{-- enplacement point localisation --}}
        <div id="infoposition"></div>
        {{-- emplacement carte google --}}
        <div id="googleMap" style="width:100%;height:400px;"></div>

    </div>

    <div class="w3-panel w3-red w3-leftbar w3-padding-32">
        <h6><i class="fa fa-info w3-deep-orange w3-padding w3-margin-right"></i> Emplacement pour les futures publicités
        </h6>
    </div>

    <script>
        //function pour l'API la localisation GPS
        function maPosition(position) {
            var infopos = "Position déterminée :\n";
            infopos += "Latitude : " + position.coords.latitude + "\n";
            infopos += "Longitude: " + position.coords.longitude + "\n";
            infopos += "Altitude : " + position.coords.altitude + "\n";
            document.getElementById("infoposition").innerHTML = infopos;
        }

        if (navigator.geolocation)
            navigator.geolocation.getCurrentPosition(maPosition);


        //fonction pour l'API google
        function myMap() {
            var mapProp = {
                center: new google.maps.LatLng(45.187072, 5.708185599999999),
                zoom: 5,
            };
            var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
        }

    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBQu_MVauKqB04Kv0EQ3YcJNe3BSbj3F0E&callback=myMap">
    </script>



@endsection
