@auth

<div class="w3-container w3-padding l6 m8">
    <div class="w3-container w3-red">
        <h2><i class="fa fa-bed w3-margin-right"></i>Formulaire de reservation</h2>
    </div>
    <div class="w3-container w3-white w3-padding-16">

        <form method="POST" action="/reservation">


            @csrf
            <div class="w3-row-padding" style="margin:0 -16px;">
                <div class="w3-half w3-margin-bottom">
                    <label><i class="fa fa-calendar-o"></i> Date de debut</label>
                    <input class="w3-input w3-border" type="text" placeholder="DD MM YYYY" name="date_debut" required>
                </div>
                <div class="w3-half">
                    <label><i class="fa fa-calendar-o"></i> Jusque'au :</label>
                    <input class="w3-input w3-border" type="text" placeholder="DD MM YYYY" name="date_fin" required>
                </div>
            </div>
            <div class="w3-row-padding" style="margin:8px -16px;">
                <div class="w3-half w3-margin-bottom">
                    <label><i class="fa fa-male"></i> Nombre de personne</label>
                    <input class="w3-input w3-border" type="number" value="1" name="nombre_de_personne" min="1" max="15">
                </div>

                <input type="hidden" name="chambre_id" value="{{ $chambre->id }}">


                {{-- {{ Form::hidden('invisible', 'secret', array('chambre_id' => $chambre->id)) }}


                <input id="invisible_id" name="chambre_id" type="hidden" value="secret"> --}}


            </div>

                <button class="w3-button w3-block w3-black w3-margin-bottom">Reserver votre chambre</button>

            {{-- {!! Form::close() !!} --}}
        </form>
    </div>
</div>

@endauth


@guest
<div class="w3-container w3-padding l6 m8">
    <div class="w3-container w3-red">
        <h2><i class="fa fa-bed w3-margin-right"></i>Formulaire de reservation</h2>
    </div>
    <div class="w3-container w3-white w3-padding-16">
        <h3>Veuillez vous connecter pour reserver</h3>
    </div>
</div>

@endguest
< {{-- </header> --}}
