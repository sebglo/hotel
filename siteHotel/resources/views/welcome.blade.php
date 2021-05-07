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
    <link rel="stylesheet" href="../../css/style.css">

    <!-- Styles -->
    <style>
        .box {
            display: inline;
            width: 100px;
        }

    </style>
</head>

<body class="w3-light-grey">

    <!-- Navigation Bar -->
    <div class="w3-bar w3-white w3-large">
        <div class="relative flex items-top bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 left-0 sm:block">
                    <a href="/" class="w3-bar-item w3-button w3-red w3-mobile">
                        <i class="fa fa-bed w3-margin-right"></i>Accueil</a>
                    {{-- <a href="/reserve" class="w3-bar-item w3-button w3-mobile">Réserver</a> --}}
                    <a href="/contact" class="w3-bar-item w3-button w3-mobile">Contact</a>
                    <a href="/reservation" class="w3-bar-item w3-button w3-mobile">Mes reservation</a>


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
    <div class="">
        @yield('content')
    </div>



    <!-- Footer -->
    {{-- <footer class="w3-padding-32 w3-black w3-center w3-display-bottommiddle"> --}}
    {{-- <footer class="w3-container w3-center w3-black footer">
        <h5>Find Us On</h5>
        <div class="w3-xlarge w3-padding-16">
            <i class="fa fa-facebook-official w3-hover-opacity"></i>
            <i class="fa fa-instagram w3-hover-opacity"></i>
            <i class="fa fa-snapchat w3-hover-opacity"></i>
            <i class="fa fa-pinterest-p w3-hover-opacity"></i>
            <i class="fa fa-twitter w3-hover-opacity"></i>
            <i class="fa fa-linkedin w3-hover-opacity"></i>
        </div>
        <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank"
                class="w3-hover-text-green">w3.css</a></p>
    </footer> --}}






    <!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->

</body>

</html>
