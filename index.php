
<?php

session_start();//permet l'usage des var. persistantes
//include('/lib/php/dbConnect.php');
include('pages/header.php');


    //si on arrive sur le site -> afficher page d'accueil
		if(!isset($_SESSION['page'])) {
			$_SESSION['page']="accueil.php";
		}
		
		if(isset($_GET['page'])) {
			$_SESSION['page']=$_GET['page'];
		}
		
		if(file_exists("./pages/".$_SESSION['page'])) {
			include('./pages/'.$_SESSION['page']);
		}
		else {
			print "OUPS! la page n'existe pas !";
		}
	?>
  <footer>
  <?php
		
			include('pages/footer.php');
		
	?>
  </footer>
*/
