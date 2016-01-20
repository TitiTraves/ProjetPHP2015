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
            <div class="col-lg-3 col-md-3 col-sm-4"></div>
            <div class="input-group col-lg-6 col-md-6 col-sm-4">
                <span class="input-group-addon">                    
                    <input type="checkbox"> Cherchez-vous quelque chose en particulier ?</input>
                </span>
                <input type="text" class="form-control">
            </div>
            <div class="col-lg-3 col-md-3 col-sm-4"></div>
        </div><br/>
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-4"></div>
            <div class="input-group col-lg-6 col-md-6 col-sm-4">
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
                <div class="col-lg-3 col-md-3 col-sm-4"></div>
            </div>
        </div><br>
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-4"></div>
            <div class="input-group col-lg-6 col-md-6 col-sm-4">
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
                <div class="col-lg-3 col-md-3 col-sm-4"></div>
            </div>
        </div><br>
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-4"></div>
        <div class="input-group input-group-lg col-lg-6 col-md-6 col-sm-4">
            
            <span class="input-group-addon">Prix minimum</span>
            <input type="text" class="form-control" placeholder="Entrez le prix minimum">
            <div class="col-lg-3 col-md-3 col-sm-4"></div>
        </div>
        </div><br>
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-4"></div>
        <div class="input-group input-group-lg col-lg-6 col-md-6 col-sm-4">
            
            <span class="input-group-addon">Prix Maximum</span>
            <input type="text" class="form-control" placeholder="Entrez le prix maximum">
            <div class="col-lg-3 col-md-3 col-sm-4"></div>
        </div>
        </div><br>
        <div class="col-lg-7 col-md-7 col-sm-6"></div>
        <div class="btn btn-default btn-lg col-lg-2 col-md-2 col-sm-2" role="Button">Rechercher</div>
        

        

    </div><br>
</div>
<footer>
    <?php
    include('../pages/footer.php');
    ?>
</footer>
</body>