@include('Menue')
<div class="container mt-4 col-md-5" style="border:none;">
    <div>
        <br>
        <p class="text-center" style="font-weight:600; font-size:25px;">Nos Referentiels </p>
    </div>
</div>

<div class="card mb-3">
    <img style="height:20rem;" src="{{asset('image/Capture2.png')}}" class="card-img-bottom" alt="...">
    <div class="card-body">
        <h5 class="card-title"> Nos types de formation</h5>

        <p class="card-text"><small class="text-muted"> Les critères à prendre en compte pour choisir sa formation sont
                multiples : l'insertion professionnelle, l'adéquation de la formation avec son projet, le programme, la
                reconnaissance de la formation et de l'école, mais aussi sa durée et son coût .Si l’organisme n’est pas
                référencé, renseignez-vous auprès de Transitions Pro Île-de-France afin de savoir s’il est
                référençable</small></p>

        @forelse ($type->referentiels as $referentiel)
        <a href="/referentiels/{{ $referentiel['id'] }}" class="btn btn-outline-warning"
            style="width:200px;">{{ $referentiel['libelleReferentiel'] }}<br></a>

        @empty

        <p>Pas de eferentiel enregistrer</p>

        @endforelse
    </div>

    <div class="col-md-3 mx-auto mt-5">
    </div>
</div>


@include('Menuef')