<?php

class Fusers extends FdataBase {

    /** costruttore della classe */
    public function __construct()
    {
        parent::__construct();
        $this->_tabella = 'Utente';
        $this->_valore ='(:id,:nome,:cognome,:email,:password :stato)';
        $this->_classe = 'Fuser';
    }

    /**
     * Metodo che lega gli attributi dell'utente da inserire mediante il parametro INSERT
     * @param $pdostatement
     * @param $utente utente i cui dati devono essere inseriti nel database
     */
    public static function bind($pdostatement, Eusers $utente)
    {
        $pdostatement->bindValue(':id',NULL, PDO::PARAM_INT);
        $pdostatement->bindValue(':nome',$utente->get_nome(), PDO::PARAM_STR); 
        $pdostatement->bindValue(':cognome',$utente->get_cognome(), PDO::PARAM_STR);
        $pdostatement->bindValue(':password',$utente->get_password(), PDO::PARAM_STR);
        $pdostatement->bindValue(':email',$utente->get_email(), PDO::PARAM_STR);
        $pdostatement->bindValue(':stato',$utente->get_stato(), PDO::PARAM_STR);
    }

}


?>