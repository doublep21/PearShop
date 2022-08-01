<?php

class Fusers extends dbf {

    /** costruttore della classe */
    public function __construct()
    {
        parent::__construct();
        $this->_tabella = 'Utente';
        $this->_valore ='(:id,:nome,:cognome,:email,:password)';
        $this->_classe = 'Fuser';
    }
    public function store($utente){

    }
}

?>