@extends('layouts.app')

@section('showfacture')

    <div class="container">

        <a href="{{ route('PDF') }}">Download File</a>

        <div class="panel panel-default">
            <div class="panel-body" style="padding: 5%">
                <div class="row">
                    <div class="col-md-9">
                        <h1>{{$prestataire->info_etpname}}</h1>
                        <p style="color: red">Petite description des activités de l'entreprise. <br> Avec un retour à la ligne s'il y a beaucoup de texte.</p>
                        <p style="color: red">Numéro et nom de la rue.</p>
                        <p style="color: red">Code postale & ville.</p>
                        <p>Numéro de téléphone : {{$prestataire->info_phone}}</p>
                        <p>E-mail : {{$prestataire->info_mail}}</p>
                    </div>
                    <div class="col-md-3">
                        <h1>DEVIS N°1</h1>
                    </div>
                </div>

                <div class="row" style="color: red">
                    <div class="col-md-offset-9">
                        <p>Nom du client.</p>
                        <p>Numéro et nom de la rue.</p>
                        <p>Code postale et ville.</p>
                        <p>Numéro de téléphone du client.</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-offset-1">
                        <p>Fait le : {{$date}}</p>
                    </div>
                </div>

                <div class="row">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th class="col-md-7">Désignation</th>
                                <th class="col-md-1">Quantité</th>
                                <th class="col-md-1">Unité</th>
                                <th class="col-md-2">Prix Unit HT</th>
                                <th class="col-md-1">Prix HT</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="row">
                    <div class="col-md-offset-9 col-md-2">
                        <p>Total HT :</p>
                    </div>
                    <div class="col-md-1">
                        <p style="color: red;">PRIX</p>
                    </div>
                </div>

                <div style="text-align: center">
                    <p>N°SIRET : {{$prestataire->info_siret}}</p>
                    <p>N°TVA intracommunautaire : {{$prestataire->info_tva}}</p>
                </div>

            </div>
        </div>
    </div>

@endsection