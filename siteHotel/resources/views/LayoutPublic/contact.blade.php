{{-- @extends('LayoutPublic.homePublic') --}}
@extends('welcome')

@section('content')
    <div class="w3-content" style="max-width:1532px;">
        <div class="w3-container w3-white w3-margin-top"" id="contact">

            <h2>Contact</h2>
            <p>Si vous avez des questions, envoyer nous un message.</p>
            <i class="fa fa-map-marker w3-text-red" style="width:30px"></i> Grenoble, FR<br>
            <i class="fa fa-phone w3-text-red" style="width:30px"></i> Phone: +00 151515<br>
            <i class="fa fa-envelope w3-text-red" style="width:30px"> </i> Email: mail@mail.com<br>
            <form action="/contact" method="POST">

                @csrf
                <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="name" required name="name"></p>
                <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="email" required name="email">
                </p>
                <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="message" required
                        name="message"></p>
                <p><button class="w3-button w3-black w3-padding-large" type="submit">SEND MESSAGE</button></p>
            </form>
        </div>
    </div>
@endsection
