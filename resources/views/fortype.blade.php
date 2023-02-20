@include('Menue')

<div class="container mt-4 col-md-5" style="border:none;">
    <div>
        <br>
        <p class="text-center" style="font-weight:600; font-size:25px;">Nombre de Formation par refentiel

    </div>
</div>

<img style="height:20rem;" src="{{asset('image/Capture2.png')}}" class="card-img-bottom" alt="...">
<div class="card-body">


    @foreach($types as $type)
    <table class="table table-striped table-hover">

        <thead>
            <tr>
                <th>
                    {{ $type->libelleType }}
                </th>
            </tr>
        </thead>
        @foreach($type->referentiels as $referentiel)
        @foreach($referentiel->formations as $formation)
        <tbody>
            <tr>
                <td> {{ $formation->nomFormation }}</td>
            </tr>
        </tbody>
        @endforeach
        @endforeach

    </table>
    @endforeach

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.2.1/chart.min.js"></script>
    @include('Menuef')

</div>