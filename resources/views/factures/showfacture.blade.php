@extends('layouts.app')

@section('showfacture')

    <div class="container">

        <a href="{{ route('PDF') }}" target="_blank">Show PDF File</a>

        <div class="panel panel-default">
            <div class="panel-body" style="padding: 5%">
                <div class="row">
                    <div class="col-xs-9">
                        <h1>{{$prestataire->info_etpname}}</h1>
                    </div>
                    <div class="col-xs-3">
                        <h1>DEVIS N°1</h1>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-5">
                        <p>{{$prestataire->info_description}}</p>
                        <p>{{$prestataire->info_street}}</p>
                        <p>{{$prestataire->info_city}}</p>
                        <p>Numéro de téléphone : {{$prestataire->info_phone}}</p>
                        <p>E-mail : {{$prestataire->info_mail}}</p>
                    </div>
                </div>

                <div class="row" style="color: red">
                    <div class="col-xs-offset-9">
                        <p>Nom du client.</p>
                        <p>Numéro de téléphone du client.</p>
                        <p>Numéro et nom de la rue.</p>
                        <p>Code postale et ville.</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-offset-1">
                        <p>Fait le : {{$date}}</p>
                    </div>
                </div>

                <div class="row">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th class="col-xs-7">Désignation</th>
                            <th class="col-xs-1">Quantité</th>
                            <th class="col-xs-1">Unité</th>
                            <th class="col-xs-2">Prix Unit HT</th>
                            <th class="col-xs-1">Prix HT</th>
                        </tr>
                        </thead>

                        <tbody>
                        @for ($i = 0; $i < 10; $i++)
                            <tr>
                                <td>a</td>
                                <td>a</td>
                                <td>a</td>
                                <td>a</td>
                                <td>a</td>
                            </tr>
                        @endfor
                        </tbody>
                    </table>
                </div>

                <div class="row">
                    <div class="col-xs-offset-9 col-xs-2">
                        <p>Total HT :</p>
                    </div>
                    <div class="col-xs-1">
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