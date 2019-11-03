@extends('layouts.layout')

@section('content')
<div class="container">
    <div class="jumbotron">
        <h1 class="display-5">Recevabilite Admistrative</h1>
        <p class="lead">Demande: {{ $demande->code }} </p>
        <br>
        <strong>{{ $demande->nom_medicament }} {{ $demande->forme_pharmaceutique }} </strong> du laboratoire <I>{{ $demande->labo }}</I></p>
        <hr class="my-4">


        @if($demande->status != 'Acceptée')
            <div class="alert alert-warning">
                Status: <strong>{{ $demande->status}}</strong>
            </div>
        @else
            <div class="alert alert-success">
                Status: <strong>{{ $demande->status}}</strong>
            </div>
        @endif
        <p class="lead">
        </p>
    </div>

    <div class="container-fluid">
        <div class="card">
            <div class="card-header">Verification du Produit</div>
            <div class="card-body">
                <form>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Nom Commercial</label>
                            <input type="text" class="form-control" id="inputEmail4" placeholder="">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Dosage</label>
                            <input type="text" class="form-control" id="inputEmail4" placeholder="">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Dosage</label>
                            <input type="text" class="form-control" id="inputEmail4" placeholder="">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Forme</label>
                            <input type="text" class="form-control" id="inputEmail4" placeholder="">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="inputEmail4">Presentation</label>
                            <input type="text" class="form-control" id="inputEmail4" placeholder="">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Laboratoire Demandeur</label>
                            <input type="text" class="form-control" id="inputEmail4" placeholder="">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Laboratoire Fabricant</label>
                            <input type="text" class="form-control" id="inputEmail4" placeholder="">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Sign in</button>
                </form>
            </div>
        </div>

        <div class="card">
            <div class="card-header">Verification des Pieces</div>
            <div class="card-body">
                <form action="">
                    <table class="table">
                        <tbody>
                            <tr>
                                <th>Lettre de demande + CD</th>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="lettre" id="inlineRadio1" value="option1">
                                        <label class="form-check-label" for="inlineRadio1">Oui</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="lettre" id="inlineRadio2" value="option2">
                                        <label class="form-check-label" for="inlineRadio2">Non</label>
                                    </div>
                                </td>
                                <td>
                                    <input type="text" class="form-control" placeholder="Commentaire">
                                </td>
                            </tr>

                            <tr>
                                <th>RCP (Resumé des caracteristiques du Produit</th>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="rcp" id="inlineRadio3" value="option1">
                                        <label class="form-check-label" for="inlineRadio1">Oui</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="rcp" id="inlineRadio4" value="option2">
                                        <label class="form-check-label" for="inlineRadio2">Non</label>
                                    </div>
                                </td>
                                <td>
                                    <input type="text" class="form-control" placeholder="Commentaire">
                                </td>
                            </tr>

                            <tr>
                                <th>Attestation de Prix</th>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="attestation" id="inlineRadio1" value="option1">
                                        <label class="form-check-label" for="inlineRadio1">Oui</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="attestation" id="inlineRadio2" value="option2">
                                        <label class="form-check-label" for="inlineRadio2">Non</label>
                                    </div>
                                </td>
                                <td>
                                    <input type="text" class="form-control" placeholder="Commentaire">
                                </td>
                            </tr>

                            <tr>
                                <th>Echantillons du Produits Fini + Bulletins d'analyse</th>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="produit_fini" id="inlineRadio1" value="option1">
                                        <label class="form-check-label" for="inlineRadio1">Oui</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="produit_fini" id="inlineRadio2" value="option2">
                                        <label class="form-check-label" for="inlineRadio2">Non</label>
                                    </div>
                                </td>
                                <td>
                                    <input type="text" class="form-control" placeholder="Commentaire">
                                </td>
                            </tr>

                            <tr>
                                <th>Echantillon Matiere Premiere + Bulletins d'Analyse</th>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="matiere" id="inlineRadio1" value="option1">
                                        <label class="form-check-label" for="inlineRadio1">Oui</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="matiere" id="inlineRadio2" value="option2">
                                        <label class="form-check-label" for="inlineRadio2">Non</label>
                                    </div>
                                </td>
                                <td>
                                    <input type="text" class="form-control" placeholder="Commentaire">
                                </td>
                            </tr>

                            <tr>
                                <th>Dossier Technique (Verification Completude format CTD)</th>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="ctd" id="inlineRadio1" value="option1">
                                        <label class="form-check-label" for="inlineRadio1">Oui</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="ctd" id="inlineRadio2" value="option2">
                                        <label class="form-check-label" for="inlineRadio2">Non</label>
                                    </div>
                                </td>
                                <td>
                                    <input type="text" class="form-control" placeholder="Commentaire">
                                </td>
                            </tr>

                        </tbody>
                    </table>
                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                </form>
            </div>
        </div>

        <div class="card">
            <div class="card-header">Verification des Echantillons</div>
            <div class="card-body">
            <form action="">
                    <table class="table">
                        <tbody>
                            <tr>
                                <th>VERIFICATION DE LA DATE DE PEREMPTION sur les conditionnements primaires et secondaires
                                    Elle représente au moins 1/3 de la date de conservation :
                                </th>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="date_peremption" id="inlineRadio1" value="option1">
                                        <label class="form-check-label" for="inlineRadio1">Oui</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="date_peremption" id="inlineRadio2" value="option2">
                                        <label class="form-check-label" for="inlineRadio2">Non</label>
                                    </div>
                                </td>
                                <td>
                                    <input type="text" class="form-control" placeholder="Commentaire">
                                </td>
                            </tr>

                            <tr>
                                <th>VERIFICATION DE LA CORRESPONDANCE des échantillons avec le package présenté dans le dossier :</th>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="package" id="inlineRadio3" value="option1">
                                        <label class="form-check-label" for="inlineRadio1">Oui</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="package" id="inlineRadio4" value="option2">
                                        <label class="form-check-label" for="inlineRadio2">Non</label>
                                    </div>
                                </td>
                                <td>
                                    <input type="text" class="form-control" placeholder="Commentaire">
                                </td>
                            </tr>

                            <tr>
                                <th>VERIFICATION DU NOM DU FABRIQUANT :</th>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="nom_fabricant" id="inlineRadio1" value="option1">
                                        <label class="form-check-label" for="inlineRadio1">Oui</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="nom_fabricant" id="inlineRadio2" value="option2">
                                        <label class="form-check-label" for="inlineRadio2">Non</label>
                                    </div>
                                </td>
                                <td>
                                    <input type="text" class="form-control" placeholder="Commentaire">
                                </td>
                            </tr>

                            <tr>
                                <th>VERIFICATION DE LA PRESENCE DU NUMERO DE LOT sur les conditionnements primaires et secondaires:</th>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="numero_lot" id="inlineRadio1" value="option1">
                                        <label class="form-check-label" for="inlineRadio1">Oui</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="numero_lot" id="inlineRadio2" value="option2">
                                        <label class="form-check-label" for="inlineRadio2">Non</label>
                                    </div>
                                </td>
                                <td>
                                    <input type="text" class="form-control" placeholder="Commentaire">
                                </td>
                            </tr>

                            <tr>
                                <th>Echantillon Matiere Premiere + Bulletins d'Analyse</th>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="matiere" id="inlineRadio1" value="option1">
                                        <label class="form-check-label" for="inlineRadio1">Oui</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="matiere" id="inlineRadio2" value="option2">
                                        <label class="form-check-label" for="inlineRadio2">Non</label>
                                    </div>
                                </td>
                                <td>
                                    <input type="text" class="form-control" placeholder="Commentaire">
                                </td>
                            </tr>

                            <tr>
                                <th>VERIFICATION DE L’ETIQUETAGE pour les Substances Vénéneuses: </th>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="etiquetage" id="inlineRadio1" value="option1">
                                        <label class="form-check-label" for="inlineRadio1">Oui</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="etiquetage" id="inlineRadio2" value="option2">
                                        <label class="form-check-label" for="inlineRadio2">Non</label>
                                    </div>
                                </td>
                                <td>
                                    <input type="text" class="form-control" placeholder="Commentaire">
                                </td>
                            </tr>

                        </tbody>
                    </table>
                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
