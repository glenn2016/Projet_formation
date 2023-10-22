@include('Menue')

<div class="card mt-4 col-md-5">
    <div class="card">Ajouter Formation</div>
    <div class="card-body">
        

        <form action="/ajout_formations" method="POST" id="mon-formulaire">
            @csrf
            <div class="card-body">

            


                <div class="mt-4">
                    <div>
                        <label class="h6">Non de la Formation</label>
                    </div>
                    <div>
                        <input type="text" name="nomFormation" class="form-control" placeholder="Libelle"
                            id="nomFormation">
                    </div>
                </div>

                <div class="mt-4">
                    <div>
                        <label class="h6">Duree de laformation</label>
                    </div>
                    <div>
                        <input type="number" name="duree" class="form-control" placeholder="duree"
                            id="duree">
                    </div>
                </div>

                <div class="mt-4">
                    <div>
                        <label class="h6">Description</label>
                    </div>
                    <div>
                    <textarea class="form-control" name="description" id="description" rows="3"></textarea>
                    </div>
                </div>

                <div class="mt-4">

                    <div>
                        <label class="h6">Etat de la formation</label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="isStarted" id="isStarted1" value="0" checked>
                        <label class="form-check-label" for="exampleRadios1">
                        En attente
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="isStarted" id="isStarted2" value="1">
                        <label class="form-check-label" for="validated">
                        En cours
                        </label>
                    </div>  
                </div>

                <div class="mt-4">
                    <div>
                        <label class="h6">Date debut</label>
                    </div>
                    <div>
                    <input type="date" name="date_debut" class="form-control" placeholder="date_debut"
                            id="horaire">
                    </div>
                </div>

                <div class="mt-4"> 
                        <div>
                            <label class="h6">Type de Referentiel</label>
                        </div>

                        <div>
                            <select class="form-select"  name="referentiel_id" id="referentiel_id" aria-label="Default select example" > 
                                <option selected>--Faites votre choix--</option>
                                @forelse ($referentiels as $Referentiel)
                                    <option value="{{$Referentiel['id']}}">{{$Referentiel['libelleReferentiel']}}</option>
                                @empty
                                    <option selected>Pas de formation enregistrer</option>
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