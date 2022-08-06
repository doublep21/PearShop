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
     * @param $utente Eusers utente i cui dati devono essere inseriti nel database
     */
    public static function bind(PDOStatement $pdostatement, Eusers $utente)
    {
        $pdostatement->bindValue(':id',NULL, PDO::PARAM_INT);
        $pdostatement->bindValue(':nome',$utente->get_nome(), PDO::PARAM_STR); 
        $pdostatement->bindValue(':cognome',$utente->get_cognome(), PDO::PARAM_STR);
        $pdostatement->bindValue(':password',$utente->get_password(), PDO::PARAM_STR);
        $pdostatement->bindValue(':email',$utente->get_email(), PDO::PARAM_STR);
        $pdostatement->bindValue(':stato',$utente->get_stato(), PDO::PARAM_STR);
    }

    /**
     * Metodo per verificare la presenza di un utente dato il nome
     * @param $name string nome dell'utente
     * @return bool|null
     */
    public function existName($name){
        $query = " SELECT * FROM ".$this->_tabella." WHERE name= '".$name."';";
        try {
            $this->_connessione->beginTransaction();
            $pdostmt = $this->_connessione->prepare($query);
            $pdostmt->execute();
            $risultato = $pdostmt->fetchAll(PDO::FETCH_ASSOC);
            $this->_connessione->commit();
            if(($risultato != null) && (count($risultato)>0)){
                return true;
            }
            else return false;

        }
        catch (PDOException $e){
            $this->_connessione->rollBack();
            echo "Errore: ".$e->getMessage();
            return null;

        }
    }

    /**
     * Metodo per verificare la presenza di un utente
     * @param $name string nome dell'utente
     * @param $password string dell'utente
     * @return false|mixed|null $id dell'utente se presente,altrimenti false
     */
    public function existUser($name,$password){
        $query = " SELECT * FROM ".$this->_tabella." WHERE name= '".$name."';";
        try {
            $this->_connessione->beginTransaction();
            $pdostmt = $this->_connessione->prepare($query);
            $pdostmt->execute();
            $risultato = $pdostmt->fetchAll(PDO::FETCH_ASSOC);
            $this->_connessione->commit();
            if (($risultato != null) && (count($risultato)>0)){
                $riga = $risultato[0];
                $id = $riga['id'];
                return $id;
            }
            else return false;
        }
        catch (PDOException $e){
            $this->_connessione->rollBack();
            echo "Errore: ".$e->getMessage();
            return null;
        }
    }

    /**
     * Metodo che effettua la load dell'utente utilizzando l'id
     * @param $id int dell'utente
     * @return string|null utente
     */
    public function loadById($id)
    {
        $riferimento = parent::loadById($id);
        if (($riferimento != null) && (count($riferimento)>0)){
            $riga = $riferimento[0];
            $intera = $this->buildRow($riga);
            $user = $this->getOggetti($intera);
            return $user;
        }
        else return null;
    }
}


?>