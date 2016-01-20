<?php
include('../pages/header.php');
include('../lib/php/dbConnect.php');
require '../lib/php/Client.php';
require '../lib/php/ClientDB.php';



if ($_POST) {

    
    $client = new ClientDB($cnx);
    $client->newclient($_POST["nom"], $_POST["prenom"], $_POST["rue"], $_POST["mdp"], $_POST["email"], $_POST["login"],$_POST["numero"],$_POST["tel"],$_POST["cp"],1,1);
    $client->createClient();
    $inscription = true;
}
?>

<?php
?>
<head>
    <title>Inscription</title>
    <link rel="stylesheet" href="../lib/bootstrap/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="../lib/bootstrap/js/bootstrap.min.js"></script>
</head>
<body background="../img/blacktheme.jpg">
    <form action="inscription.php" method="post">
        <div class="container">


            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-4"></div>
                <div class="input-group input-group-lg col-lg-6 col-md-6 col-sm-4">

                    <span class="input-group-addon">Login </span>
                    <input type="text" class="form-control" name="login" placeholder="Entrez un identifiant">
                    <div class="col-lg-3 col-md-3 col-sm-4"></div>
                </div>
            </div><br>
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-4"></div>
                <div class="input-group input-group-lg col-lg-6 col-md-6 col-sm-4">

                    <span class="input-group-addon">Mot de passe </span>
                    <input type="text" class="form-control" name="mdp" placeholder="Entrez un mot de passe">
                    <div class="col-lg-3 col-md-3 col-sm-4"></div>
                </div>
            </div><br>
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-4"></div>
                <div class="input-group input-group-lg col-lg-6 col-md-6 col-sm-4">

                    <span class="input-group-addon">Nom </span>
                    <input type="text" class="form-control" name="nom" placeholder="Entrez un nom">
                    <div class="col-lg-3 col-md-3 col-sm-4"></div>
                </div>
            </div><br>
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-4"></div>
                <div class="input-group input-group-lg col-lg-6 col-md-6 col-sm-4">

                    <span class="input-group-addon">Prenom </span>
                    <input type="text" class="form-control" name="prenom" placeholder="Entrez un prenom">
                    <div class="col-lg-3 col-md-3 col-sm-4"></div>
                </div>
            </div><br>
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-4"></div>
                <div class="input-group input-group-lg col-lg-6 col-md-6 col-sm-4">

                    <span class="input-group-addon">Email </span>
                    <input type="text" class="form-control" name="email" placeholder="Entrez une adresse email">
                    <div class="col-lg-3 col-md-3 col-sm-4"></div>
                </div>
            </div><br>
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-4"></div>
                <div class="input-group input-group-lg col-lg-6 col-md-6 col-sm-4">

                    <span class="input-group-addon">Téléphone </span>
                    <input type="text" class="form-control" name="tel" placeholder="Entrez un numéro de téléphone">
                    <div class="col-lg-3 col-md-3 col-sm-4"></div>
                </div>
            </div><br>
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-4"></div>
                <div class="input-group input-group-lg col-lg-6 col-md-6 col-sm-4">

                    <span class="input-group-addon">Rue </span>
                    <input type="text" class="form-control" name="rue" placeholder="Entrez un nom de rue">
                    <div class="col-lg-3 col-md-3 col-sm-4"></div>
                </div>
            </div><br>
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-4"></div>
                <div class="input-group input-group-lg col-lg-6 col-md-6 col-sm-4">

                    <span class="input-group-addon">Numero </span>
                    <input type="text" class="form-control" name="numero" placeholder="Entrez un numéro de rue">
                    <div class="col-lg-3 col-md-3 col-sm-4"></div>
                </div>
            </div><br>
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-4"></div>
                <div class="input-group input-group-lg col-lg-6 col-md-6 col-sm-4">

                    <span class="input-group-addon">Ville </span>
                    <input type="text" class="form-control" name="ville" placeholder="Entrez une ville">
                    <div class="col-lg-3 col-md-3 col-sm-4"></div>
                </div>
            </div><br>
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-4"></div>
                <div class="input-group input-group-lg col-lg-6 col-md-6 col-sm-4">

                    <span class="input-group-addon">Code Postal </span>
                    <input type="text" class="form-control" name="cp" placeholder="Entrez un code postal">
                    <div class="col-lg-3 col-md-3 col-sm-4"></div>
                </div>
            </div><br>
            <div class="col-lg-7 col-md-7 col-sm-6"></div>
            <input type="submit" class="button btn-send" style="margin-top: 10px;margin-bottom: 0px;" value="S'inscrire maitenant"/>




        </div><br>
    </form>
</div>
<footer>
<?php
include('../pages/footer.php');
?>
</footer>
</body>

