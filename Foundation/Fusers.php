<?php

class Fusers extends dbf{
    public function __construct() {
        $this->_tabella='Utenti';
        $this->_chiave='UtenteId';
        $this->_classe='Eusers';
        USingleton::getInstance('dbf');
    }
}

?>