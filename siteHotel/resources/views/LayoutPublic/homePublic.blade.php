<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>HOTEL-HOTEL</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./style/styleHome.css">

</head>

<body class="w3-light-grey">

    <!-- Navigation Bar -->
    <div class="w3-bar w3-white w3-large">
        <div class="relative flex items-top  min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 left-0 sm:block">
                    <a href="/" class="w3-bar-item w3-button w3-red w3-mobile">
                        <i class="fa fa-bed w3-margin-right"></i>Accueil</a>
                    <a href="/appbis" class="w3-bar-item w3-button w3-mobile">Réserver</a>
                    <a href="/contact" class="w3-bar-item w3-button w3-mobile">Contact</a>
                    <div class="hidden fixed top-0 right-0 sm:block">
                    @auth
                        <a href="{{ url('/admin') }}" class="w3-bar-item w3-button w3-mobile">Administration</a>
                    @else
                        <a href="{{ route('login') }}" class="w3-bar-item w3-button w3-mobile">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="w3-bar-item w3-button w3-mobile">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </div>

    @yield('content')





    <!-- Footer -->
    <{{-- footer class="w3-padding-32 w3-black w3-center w3-margin-top">
        <h5>Find Us On</h5>
        <div class="w3-xlarge w3-padding-16">
            <i class="fa fa-facebook-official w3-hover-opacity"></i>
            <i class="fa fa-instagram w3-hover-opacity"></i>
            <i class="fa fa-snapchat w3-hover-opacity"></i>
            <i class="fa fa-pinterest-p w3-hover-opacity"></i>
            <i class="fa fa-twitter w3-hover-opacity"></i>
            <i class="fa fa-linkedin w3-hover-opacity"></i>
        </div>

    </footer> --}}

    <!-- Add Google Maps -->
    <script>
        function myMap() {
            myCenter = new google.maps.LatLng(41.878114, -87.629798);
            var mapOptions = {
                center: myCenter,
                zoom: 12,
                scrollwheel: false,
                draggable: false,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            var map = new google.maps.Map(document.getElementById("googleMap"), mapOptions);

            var marker = new google.maps.Marker({
                position: myCenter,
            });
            marker.setMap(map);
        }

    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap">
    </script>
    <!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->

</body>

</html>
