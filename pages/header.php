

<meta charset="utf-8"



  <body >
<script>
    $(document).ready(function() {
        $('a[href="' + this.location.pathname + '"]').parent().addClass('active');
    });
</script>
    <div class="container">

        <div class="jumbotron" >


            <nav class="navbar navbar-default">
                <div class="container-fluid">


                    <div class="navbar-header">


                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">


                            <span class="sr-only"></span>


                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>


                        <a class="pull-left" href="#"><img src="img/manette.png"></a>
                    </div>


                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li><a href="../index.php">Accueil<span class="sr-only">(current)</span></a></li>
                            <li class="dropdown">
                                <a href="#2" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Nouveautés <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="http://127.0.0.1:6080/ProjetPHP2015-master/pages/nouveauPC.php">PC</a></li>
                                    <li><a href="http://127.0.0.1:6080/ProjetPHP2015-master/pages/nouveauConsole.php">Consoles</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="http://127.0.0.1:6080/ProjetPHP2015-master/pages/nouveauMateriel.php">Matériel</a></li>
                                </ul>
                            </li>
                            <li><a href="http://127.0.0.1:6080/ProjetPHP2015-master/pages/recherche.php">Recherche</a></li>
                            <li><a href="#7">A propos</a></li>
                            <li><a href="#8">Créer un compte</a></li>
                            <li><a href="#9">S'identifier</a></li>



                        </ul>

                        <form class="navbar-form navbar-right" role="search">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Rechercher">
                            </div>
                            <button type="submit" class="btn btn-default">OK</button>
                        </form>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <br>
</body>


