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
