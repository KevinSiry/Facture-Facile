<html>
<head>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <meta charset="UTF-8">
    <link href="C:\wamp64\www\FactureFacile\public\css\facture.css" rel="stylesheet" media="all">
</head>
<body>
<div class="container">
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
        <table>
            <thead>
            <tr>
                <th class="table-header-size" style="width: 50%;">Désignation</th>
                <th class="text-right table-header-size" style="width: 8%;">Quantité</th>
                <th class="text-right table-header-size" style="width: 6%;">Unité</th>
                <th class="text-right table-header-size" style="width: 10%;">Prix Unit HT</th>
                <th class="text-right table-header-size" style="width: 8%;">TVA %</th>
                <th class="text-right table-header-size" style="width: 7%;">TVA</th>
                <th class="text-right table-header-size" style="width: 8%;">Prix HT</th>
            </tr>
            </thead>

            <tbody>
            @for ($i = 0; $i < 10; $i++)
                <tr style="height: 55px">
                    <td>In addition to conditional statements, Blade estatements, Blade<br>In addition to conditional statements, Blade estatements, Blade</td>
                    <td class="text-right">a</td>
                    <td class="text-right">a</td>
                    <td class="text-right">a</td>
                    <td class="text-right">a</td>
                    <td class="text-right">a</td>
                    <td class="text-right">a</td>
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

    <div style="text-align: center" id="footer">
        <p>N°SIRET : {{$prestataire->info_siret}}</p>
        <p>N°TVA intracommunautaire : {{$prestataire->info_tva}}</p>
    </div>
</div>
</body>
</html>