@include('Menue')
<div class="container mt-4 col-md-5" style="border:none;">
    <div>
        <br>
        <p class="text-center" style="font-weight:600; font-size:25px;">Nombre de Formation par refentil

    </div>
</div>

<img style="height:20rem;" src="{{asset('image/Capture2.png')}}" class="card-img-bottom" alt="...">
<div class="card-body">

    @forelse ($referentiels as $referentiel)

    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>
                    {{ $referentiel->libelleReferentiel }}
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $referentiel->formations_count }} formations </td>
            </tr>
        </tbody>

        @empty

        <p>Pas de formation enregistrer</p>

        @endforelse

</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.2.1/chart.min.js"></script>
@include('Menuef')