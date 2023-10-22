@include('Menue')

<div class="card mt-4 col-md-5">
    <div class="card">Ajouter Referentiels</div>
    <div class="card-body">
        

        <form action="/ajout_referentielle" method="POST" id="mon-formulaire">
            @csrf
            <div class="card-body">

                <div class="mt-4">
                    <div>
                        <label class="h6">Libelle</label>
                    </div>
                    <div>
                        <input type="text" name="libelleReferentiel" class="form-control" placeholder="Libelle"
                            id="libelleReferentiel">
                    </div>
                </div>

                <div class="mt-4">
                    <div>
                        <label class="h6">Horaire</label>
                    </div>
                    <div>
                        <input type="number" name="horaire" class="form-control" placeholder="horaire"
                            id="horaire">
                    </div>
                </div>

                <div class="mt-4">

                    <div>
                        <label class="h6">Validation</label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="validated" id="validated1" value="2" checked>
                        <label class="form-check-label" for="exampleRadios1">
                        Oui
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="validated" id="validated" value="1">
                        <label class="form-check-label" for="validated">
                        Non
                        </label>
                    </div>
                </div>

                <div class="mt-4"> 
                    <div>
                        <label class="h6">Type de formation</label>
                    </div>

                    <div>
                        <select class="form-select"  name="type_id" id="type_id" aria-label="Default select example" > 
                            <option selected>--Faites votre choix--</option>
                            @forelse ($types as $type)
                            <option value="{{ $type['id'] }}">{{$type['libelleType'] }}</option>
                            @empty
                            <option selected>Pas de type enregistrer</option>
                            @endforelse
                        </select>
                    </div>
                </div>

                <div class="card text-center">
                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                </div>
            </div>



        </form>
       
    </div>
</div>



@include('Menuef')