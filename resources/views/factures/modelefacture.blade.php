<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    </head>
    <body>
    <div class="container">
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
            </div>
        </div>
    </div>
    </body>
</html>