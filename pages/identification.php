<?php
include('../pages/header.php');
?>
<head>
    <title>identification</title>
    <link rel="stylesheet" href="../lib/bootstrap/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="../lib/bootstrap/js/bootstrap.min.js"></script>
</head>
<body background="../img/blacktheme.jpg">

    <div class="container">


        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-4"></div>
            <div class="input-group input-group-lg col-lg-6 col-md-6 col-sm-4">

                <span class="input-group-addon">Login </span>
                <input type="text" class="form-control" placeholder="Entrez un identifiant">
                <div class="col-lg-3 col-md-3 col-sm-4"></div>
            </div>
        </div><br>
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-4"></div>
            <div class="input-group input-group-lg col-lg-6 col-md-6 col-sm-4">

                <span class="input-group-addon">Mot de passe </span>
                <input type="text" class="form-control" placeholder="Entrez un mot de passe">
                <div class="col-lg-3 col-md-3 col-sm-4"></div>
            </div>
        </div><br>
        <div class="col-lg-7 col-md-7 col-sm-6"></div>
        <div class="btn btn-default btn-lg col-lg-2 col-md-2 col-sm-2" role="Button">Connexion</div>




    </div><br>
</div>
<footer>
    <?php
    include('../pages/footer.php');
    ?>
</footer>
</body>