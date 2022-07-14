<?php

class Fusers extends dbf{
    public function __construct() {
        $this->tabella='utente';
        $this->chiave='username';
        $this->classe='Eusers';
        USingleton::getInstance('dbf');
    }
}

?>