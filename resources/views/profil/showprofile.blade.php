@extends('layouts.app')

@section('showprofile')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Vos informations :</div>

                    <div class="panel-body">
                        <form method="POST" action="{{ url('/changeprofile/'.Auth::user()->id) }}">
                            {!! csrf_field() !!}
                            @foreach($info_user as $key => $info_users)
                            <div class="form-group">
                                <label for="EtpName">Nom de l'entreprise :</label>
                                <input name="info_etpname" type="text" class="form-control" @if($info_users->info_etpname == NULL) placeholder="Entrez le nom de l'entreprise" @else value="{{ $info_users->info_etpname }}" @endif>
                            </div>
                            <div class="form-group">
                                <label for="NumPhone">N° de téléphone :</label>
                                <input name="info_phone" type="tel" class="form-control" @if($info_users->info_phone == NULL) placeholder="Entrez le numéro de téléphone" @else value="{{ $info_users->info_phone }}" @endif>
                            </div>
                            <div class="form-group">
                                <label for="AddMail">Adresse e-mail :</label>
                                <input name="info_mail" type="email" class="form-control" @if($info_users->info_mail == NULL) placeholder="Entrez votre adresse e-mail" @else value="{{ $info_users->info_mail }}" @endif>
                            </div>
                            <div class="form-group">
                                <label for="EtpDesc">Description de l'entreprise :</label>
                                <input name="info_description" type="text" class="form-control" @if($info_users->info_description == NULL) placeholder="Exemple : Développement informatique" @else value="{{ $info_users->info_description }}" @endif>
                            </div>
                            <div class="form-group">
                                <label for="EtpStreet">Adresse de l'entreprise :</label>
                                <input name="info_street" type="text" class="form-control" @if($info_users->info_street == NULL) placeholder="Exemple : 132 Avenue du Général Leclerc" @else value="{{ $info_users->info_street }}" @endif>
                            </div>
                            <div class="form-group">
                                <label for="EtpCity">Code postal et ville :</label>
                                <input name="info_city" type="text" class="form-control" @if($info_users->info_city == NULL) placeholder="Exemple : 64000 Pau" @else value="{{ $info_users->info_city }}" @endif>
                            </div>
                            <div class="form-group">
                                <label for="NumTva">N° de TVA :</label>
                                <input name="info_tva" type="text" class="form-control" @if($info_users->info_tva == NULL) placeholder="Entrez le numéro de TVA" @else value="{{ $info_users->info_tva }}" @endif>
                            </div>
                            <div class="form-group">
                                <label for="NumSiret">N° SIRET :</label>
                                <input name="info_siret" type="text" class="form-control" @if($info_users->info_siret == NULL) placeholder="Entrez le numéro SIRET" @else value="{{ $info_users->info_siret }}" @endif>
                            </div>

                            <button type="submit" class="btn btn-secondary">Modifier</button>
                            @endforeach
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
