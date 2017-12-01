@extends('layouts.app')

@section('addcustomers')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Création de la liste de clients :</div>

                    <div class="panel-body">
                        <form method="POST" action="{{ url('/addcustomers/'.$id) }}">
                            {!! csrf_field() !!}
                            <div class="form-group">
                                <label for="CustomerName">Nom et prénom du client :</label>
                                <input name="info_cust_name" type="text" class="form-control" placeholder="Entrer le nom et prénom du client">
                            </div>
                            <div class="form-group">
                                <label for="CustomerPhone">Numéro de téléphone du client :</label>
                                <input name="info_cust_phone" type="text" class="form-control" placeholder="Entrer le numéro de téléphone du client">
                            </div>
                            <div class="form-group">
                                <label for="CustomerStreet">Adresse du client :</label>
                                <input name="info_cust_street" type="text" class="form-control" placeholder="Exemple : 132 Avenue du Général Leclerc">
                            </div>
                            <div class="form-group">
                                <label for="CustomerCity">Code postal et ville du client :</label>
                                <input name="info_cust_city" type="text" class="form-control" placeholder="Exemple : 64000 Pau">
                            </div>
                            <button type="submit" class="btn btn-secondary">Ajouter à la liste</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('showcustomers')
    @if($customer->count() > 0)
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">Vos clients :</div>

                        <div class="panel-body">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th class="col-md-2">Nom</th>
                                    <th class="col-md-3">Numéro de téléphone</th>
                                    <th class="col-md-5">Adresse du client</th>
                                    <th class="col-md-2"></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($customer as $key => $customers)
                                    <tr>
                                        <th>{{$customers->info_cust_name}}</th>
                                        <th>{{$customers->info_cust_phone}}</th>
                                        <th>{{$customers->info_cust_street}}<br>{{$customers->info_cust_city}}</th>
                                        <th>
                                            <a href="{{ url('/deletecustomer/'.$customers->id) }}" type="button" class="btn btn-default">Supprimer</a>
                                        </th>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection