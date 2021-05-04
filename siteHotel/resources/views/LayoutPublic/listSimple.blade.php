@extends('welcome')

@section('content')

    <!-- Page content  affichage de trois chambre de l'hotel-->
    <div class="w3-content" style="max-width:1532px;">


        <div class="w3-row-padding w3-padding-16">
            <div class="w3-third w3-margin-bottom">
                <img src="../../images/room_single.jpg" alt="Norway" style="width:100%">
                <div class="w3-container w3-white">
                    <h3>Single Room</h3>
                    <h6 class="w3-opacity">From $99</h6>
                    <p>Single bed</p>
                    <p>15m<sup>2</sup></p>
                    <p class="w3-large"><i class="fa fa-bath"></i> <i class="fa fa-phone"></i> <i class="fa fa-wifi"></i>
                    </p>
                    <a href="/single">
                        <button class="w3-button w3-block w3-black w3-margin-bottom">Choose Room</button>
                    </a>
                </div>
            </div>
            <div class="w3-third w3-margin-bottom">
                <img src="../../images/room_double.jpg" alt="Norway" style="width:100%">
                <div class="w3-container w3-white">
                    <h3>Double Room</h3>
                    <h6 class="w3-opacity">From $149</h6>
                    <p>Queen-size bed</p>
                    <p>25m<sup>2</sup></p>
                    <p class="w3-large"><i class="fa fa-bath"></i> <i class="fa fa-phone"></i> <i class="fa fa-wifi"></i> <i
                            class="fa fa-tv"></i></p>
                    <a href="/single">
                        <button class="w3-button w3-block w3-black w3-margin-bottom">Choose Room</button>
                    </a>
                </div>
            </div>
            <div class="w3-third w3-margin-bottom">
                <img src="../../images/room_deluxe.jpg" alt="Norway" style="width:100%">
                <div class="w3-container w3-white">
                    <h3>Deluxe Room</h3>
                    <h6 class="w3-opacity">From $199</h6>
                    <p>King-size bed</p>
                    <p>40m<sup>2</sup></p>
                    <p class="w3-large"><i class="fa fa-bath"></i> <i class="fa fa-phone"></i> <i class="fa fa-wifi"></i> <i
                            class="fa fa-tv"></i> <i class="fa fa-glass"></i> <i class="fa fa-cutlery"></i></p>
                    <a href="/single">
                        <button class="w3-button w3-block w3-black w3-margin-bottom">Choose Room</button>
                    </a>
                </div>
            </div>
        </div>


        <div class="w3-row-padding w3-large w3-center" style="margin:32px 0">
            <div class="w3-third"><i class="fa fa-map-marker w3-text-red"></i> 423 Some adr, Chicago, US</div>
            <div class="w3-third"><i class="fa fa-phone w3-text-red"></i> Phone: +00 151515</div>
            <div class="w3-third"><i class="fa fa-envelope w3-text-red"></i> Email: mail@mail.com</div>
        </div>

        <div class="w3-panel w3-red w3-leftbar w3-padding-32">
            <h6><i class="fa fa-info w3-deep-orange w3-padding w3-margin-right"></i> On demand, we can offer
                playstation, babycall, children care, dog equipment, etc.</h6>
        </div>


    </div>

@endsection
