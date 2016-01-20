<?php
class ClientDB extends Client {
    private $_cnx;
    public function __construct($cnx) {
        $this->_cnx = $cnx;
    }

    public function createClient() {
        try {
            $query = "INSERT INTO client_magasin (nom, prenom, rue, numero, id_ville, mdp, tel, email, login, id_rang)"
                    . "VALUES('". $this->get_nom() . 
                                "', '" . $this->get_prenom() . 
                                "', '" . $this->get_rue() .
                                "', '" . $this->get_numero() .
                                "', '" . $this->get_ville() .
                                "', '" . md5(($this->get_mdp())) .
                                "', '" . $this->get_tel() .
                                "', '" . $this->get_email() .
                                "', '" . $this->get_login() . 
                                "', '" . $this->get_rang() . "')";
            $resultset = $this->_cnx->prepare($query);
            $resultset->execute();
        } catch (PDOException $e) {
            print "Echec de la requete " . $e->getMessage();
        }
       
    }
}
?>