<?php
class Client {
    protected $_id_client =0;
    protected $_nom = "";
    protected $_prenom = "";
    protected $_rue = "";
    protected $_numero="";
    protected $_tel="";
    protected $_mdp = "";
    protected $_email = "";
    protected $_login = "";
    protected $_cp="";
    protected $_ville=1;
    protected $_rang=1;
    
    public function newclient($_nom, $_prenom, $_rue, $_mdp, $_email, $_login, $_numero, $_tel, $_cp, $_ville, $_rang) {
        $this->_nom = $_nom;
        $this->_prenom = $_prenom;
        $this->_rue = $_rue;
        $this->_numero = $_numero;
        $this->_tel = $_tel;
        $this->_mdp = $_mdp;
        $this->_email = $_email;
        $this->_login = $_login;
        $this->_cp = $_cp;
        $this->_ville = $_ville;
        $this->_rang = $_rang;
        
    }
    function get_rang() {
        return $this->_rang;
    }

    function set_rang($_rang) {
        $this->_rang = $_rang;
    }

        public function toString() {
        return 'Clients['
                . '  $_id_client= <b>' . $this->get_id_client() . '</b>'
                . ', $_nom= <b>' . $this->get_nom() . '</b>'
                . ', $_prenom= <b>' . $this->get_prenom() . '</b>'
                . ', $_rue= <b>' . $this->get_rue() . '</b>'
                . ', $_numero= <b>' . $this->get_numero() . '</b>'
                . ', $_cp= <b>' . $this->get_cp() . '</b>'
                . ', $_ville= <b>' . $this->get_ville() . '</b>'
                . ', $_mdp= <b>' . $this->get_mdp() . '</b>'
                . ', $_email= <b>' . $this->get_email() . '</b>'
                . ', $_login=<b>' . $this->get_login() . '</b>'
                . ', $_tel= <b>' . $this->get_tel() . '</b>'
                . ', $_rang= <b>' . $this->get_rang() . '</b>'
  
                . ']';
    }
    function get_rue() {
        return $this->_rue;
    }

    function get_numero() {
        return $this->_numero;
    }

    function get_tel() {
        return $this->_tel;
    }

    function get_cp() {
        return $this->_cp;
    }

    function get_ville() {
        return $this->_ville;
    }

    function set_rue($_rue) {
        $this->_rue = $_rue;
    }

    function set_numero($_numero) {
        $this->_numero = $_numero;
    }

    function set_tel($_tel) {
        $this->_tel = $_tel;
    }

    function set_cp($_cp) {
        $this->_cp = $_cp;
    }

    function set_ville($_ville) {
        $this->_ville = $_ville;
    }



    public function get_id_client() {
        return $this->_id_client;
    }
    
    public function set_id_client($_id_client) {
        $this->_id_client = $_id_client;
    }

    public function get_mdp() {
        return $this->_mdp;
    }
    public function set_mdp($_mdp) {
        $this->_mdp = $_mdp;
    }

    public function get_email() {
        return $this->_email;
    }
    
    public function set_email($_email) {
        $this->_email = $_email;
    }

    public function get_nom() {
        return $this->_nom;
    }
    public function set_nom($_nom) {
        $this->_nom = $_nom;
    }

    public function get_prenom() {
        return $this->_prenom;
    }
    public function set_prenom($_prenom) {
        $this->_prenom = $_prenom;
    }
    

    public function get_login() {
        return $this->_login;
    }
    
    public function set_login($_login){
        $this->_login = $_login;
    }
}
?>

