@include('Menue')

<div class="container mt-4 col-md-5" style="border:none;">
    <div>
        <br>
        <p class="text-center" style="font-weight:600; font-size:25px;">Gestion

    </div>
</div>
<img style="height:20rem;" src="{{asset('image/Capture2.png')}}" class="card-img-bottom" alt="...">

<table class="table table-striped table-hover">
    <div class="card-body">
        <a href="http://127.0.0.1:8000/ajout_referentiel" class="btn btn-primary">Ajout Referentiels</a>
        <a href="http://127.0.0.1:8000/ajout_formation" class="btn btn-secondary">Ajout Formation</a>
        <a href="http://127.0.0.1:8000/all_candidats" class="btn btn-warning">Candidats</a>
        
    </div>
<table>
@include('Menuef')