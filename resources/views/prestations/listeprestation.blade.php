@extends('layouts.app')

@section('listeprestation')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Ajout de prestations :</div>

                <div class="panel-body">
                    <form method="POST" action="{{ url('/addpresta/'.$id) }}">
                        {!! csrf_field() !!}
                        <div class="form-group">
                            <label for="PrestaName">Nom de la prestation :</label>
                            <input name="prestaname" type="text" class="form-control" placeholder="Entrez le nom de la prestation">
                        </div>
                        <button type="submit" class="btn btn-secondary">Ajouter</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('showcontenuliste')
    @if($listepresta->count() > 0)
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Contenu de la liste de prestations :</div>

                    <div class="panel-body">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Nom de la prestation</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($listepresta as $key => $listeprestas)
                                <tr>
                                    <th>{{$listeprestas->presta_name}}</th>
                                    <th>
                                        <a href="{{ url('/deletepresta/'.$listeprestas->id.'/'.$id) }}" type="button" class="btn btn-default">Supprimer</a>
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