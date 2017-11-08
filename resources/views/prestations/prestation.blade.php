@extends('layouts.app')

@section('addprestation')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Création de la liste de prestations :</div>

                <div class="panel-body">
                    <form method="POST" action="{{ url('/addprestation') }}">
                    {!! csrf_field() !!}
                        <div class="form-group">
                            <label for="ListName">Nom de la liste :</label>
                            <input name="listname" type="text" class="form-control" aria-describedby="emailHelp" placeholder="Entrez le nom de la liste">
                        </div>
                        <button type="submit" class="btn btn-secondary">Créer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('showprestation')
    @if($presta->count() > 0)
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Liste de prestations :</div>

                        <div class="panel-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Nom de la liste</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($presta as $key => $prestas)
                                    <tr>
                                        <th>{{$prestas->name_lists}}</th>
                                        <th>
                                            <a href="{{ url('/prestation/'.$prestas->id) }}" type="button" class="btn btn-default">Editer</a>
                                            <a href="{{ url('/deletelist/'.$prestas->id) }}" type="button" class="btn btn-default">Supprimer</a>
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