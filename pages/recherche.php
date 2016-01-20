<?php
include('../pages/header.php');
?>
<head>
    <title>Recherche</title>
    <link rel="stylesheet" href="../lib/bootstrap/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="../lib/bootstrap/js/bootstrap.min.js"></script>
</head>
<body background="../img/blacktheme.jpg">

    <div class="container">

        
        <div class="row">
            <div class="input-group">
                <span class="input-group-addon">                    
                    <input type="checkbox"> Cherchez-vous quelque chose en particulier ?</input>
                </span>
                <input type="text" class="form-control">
            </div>
        </div><br/>
        <div class="row">
            <div class="input-group">
                <div class="input-group-btn">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Plateforme<span class="caret"></span></button>
                    <ul class="dropdown-menu">
                        <li><a href="#">PC</a></li>
                        <li><a href="#">PS4</a></li>
                        <li><a href="#">XBox</a></li>
                        <li><a href="#">Wii</a></li>   
                    </ul>
                </div>
                <input type="text" class="form-control" aria-label="...">
            </div>
        </div><br>
        <div class="row">
            <div class="input-group">
                <div class="input-group-btn">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Type de l'article<span class="caret"></span></button>
                    <ul class="dropdown-menu">
                        <li><a href="#">Jeu Vidéo</a></li>
                        <li><a href="#">Matériel</a></li>
                        <li><a href="#">DLC</a></li>
                        <li><a href="#">Console</a></li> 
                    </ul>
                </div>
                <input type="text" class="form-control" >
            </div>
        </div><br>
        <div class="input-group input-group-lg">
            <span class="input-group-addon">Prix minimum</span>
            <input type="text" class="form-control" placeholder="Entrez le prix le plus bas de la fourchette de prix désirée">
        </div><br>
        <div class="input-group input-group-lg">
            <span class="input-group-addon">Prix Maximum</span>
            <input type="text" class="form-control" placeholder="Entrez le prix le plus haut de la fourchette de prix désirée">
        </div><br>
        <div class="btn btn-default btn-lg pull-right" role="Button">Rechercher</div>

        

    </div><br>
</div>
<footer>
    <?php
    include('../pages/footer.php');
    ?>
</footer>
</body>