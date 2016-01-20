<?php
    $dsn="pgsql:host=lamp-edu.condorcet.be;dbname=thibault_real_projetweb;port=5432";
    $user="thibault.real";
    $password="facile";

    try {
            $cnx= new PDO($dsn,$user,$password);
            
            
    }
    catch(PDOException $e)  {
		
            print "Echec";
            
    }


?>


