@include('Menue')

<div class="container mt-4 col-md-5" style="border:none;">
    <div>
        <br>
        <p class="text-center" style="font-weight:600; font-size:25px;">Formations en
            {{ $referenciel['libelleReferentiel'] }}</p>
    </div>
</div>

<div class="card mb-3">
    <img style="height:20rem;" src="{{asset('image/Capture2.png')}}" class="card-img-bottom" alt="...">
    <div class="card-body">

        <div class="row">
            @forelse ($referenciel->formations as $formation)
            <div class="col-md-4 mx-auto mb-5">
                <div class="card" style="width: 17rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $formation['nomFormation'] }}</h5>
                        <p class="card-text">{{ $formation['duree'] }}</p>
                        <p class="card-text"> Description :{{ $formation['description'] }}</p>

                        <a href="/formations/{{ $formation['id'] }}" class="btn btn-secondary" style="width:200px;"
                            ata-bs-toggle="modal" data-bs-target="#creercompte">S'inscrire à
                            cette formation</a>
                    </div>
                </div>
            </div>
            @empty
            <p>Pas de Formation</p>

            @endforelse
        </div>
    </div>

</div>

<div class="col-md-3 mx-auto mt-5">
</div>
</div>
@include('Menuef')