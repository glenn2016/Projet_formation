@include('Menue')
<div class="card mt-4 col-md-5">
    <div class="card">Ajouter un candidat</div>
    <div class="card-body">
        
        <form action="/ajoute" method="POST" id="mon-formulaire">
        @csrf   
        @method('PUT') 
            <div class="card-body">

                <div class="mt-4">
                    <div>
                        <label class="h6">Nom</label>
                    </div>
                    <div>
                        <input type="text" name="nomCandidat" class="form-control" placeholder="Nom"
                            id="nom" value="{{$Referentiel['nomCandidat']}}">
                    </div>
                </div>

                <div class="mt-4">
                    <div>
                        <label class="h6">Prénom</label>
                    </div>
                    <div>
                        <input type="text" name="prenom" class="form-control" placeholder="Prenom"
                            id="prenom"  value="{{$Referentiel['prenom']}}">
                    </div>
                </div>
                <div class="mt-4">
                    <div>
                        <label class="h6">Email</label>
                    </div>
                    <div>
                        <input type="email" name="email" class="form-control" placeholder="email"
                            id="email" value="{{$Referentiel['email']}}">
                    </div>
                </div>
                <div class="mt-4">
                    <div>
                        <label class="h6">Age</label>
                    </div>
                    <div>
                        <input type="number" name="age" class="form-control" placeholder="Age" id="age"
                            min="0" max="35"  value="{{$Referentiel['age']}}">
                    </div>
                </div>
                <div class="mt-4">
                    <div>
                        <label class="h6">Niveau d'étude</label>
                    </div>
                    <div>
                        <input type="text" name="niveauEtude" class="form-control"
                            placeholder="Niveau d'étude" id="niveau"  value="{{$Referentiel['niveauEtude']}}">
                    </div>
                </div>
                <div class="mt-4">
                    <div>
                        <input type="text" name="formations" class="form-control" id="niveau"
                            value="{{ $formation['id'] }}" hidden>
                    </div>
                </div>
                
                <div class="mt-4">
                    <div>
                        <label class="h6">Sexe</label>
                    </div>

                    <div>
                        <select class="form-select"  name="sexe" id="sexe" aria-label="Default select example" > 
                            <option  selected>--Faites votre choix--</option>
                            <option value="Homme">Homme</option>
                            <option value="Femme">Femme</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="card text-center">
                <button type="submit" class="btn btn-primary">Enregistrer</button>
            </div>

        </form>
       
    </div>
</div>


@include('Menuef')