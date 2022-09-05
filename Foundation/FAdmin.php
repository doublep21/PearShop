<?php

class FAdmin extends FDataBase
{
    /** costruttore della classe */
    public function __construct()
    {
        parent::__construct();
        $this->_tabella = 'Admin';
        $this->_valore = '(:id,:nome,:cognome,:email,:password, :privilegi)';
        $this->_classe = 'FAdmin';
    }

    /**
     * Metodo che lega gli attributi dell'amministratore da inserire mediante il parametro INSERT
     * @param $pdostatement
     * @param $amministratore EAdmin utente i cui dati devono essere inseriti nel database
     */
    public static function bind(PDOStatement $pdostatement, EAdmin $amministratore)
    {
        $pdostatement->bindValue(':id', NULL, PDO::PARAM_INT);
        $pdostatement->bindValue(':nome', $amministratore->get_nome(), PDO::PARAM_STR);
        $pdostatement->bindValue(':cognome', $amministratore->get_cognome(), PDO::PARAM_STR);
        $pdostatement->bindValue(':password', $amministratore->get_password(), PDO::PARAM_STR);
        $pdostatement->bindValue(':email', $amministratore->get_email(), PDO::PARAM_STR);
        $pdostatement->bindValue(':stato', $amministratore->getprivilegi(), PDO::PARAM_STR);
    }

    /**
     * Metodo che crea un oggetto di tipo EAdmin
     * @param $riga che si riferisce alla tupla
     * @return EAdmin
     */
    public function getUtente($riga)
    {
        $ogg = new EAdmin($riga['nome'], $riga['cognome'], $riga['email'], $riga['password']);
        $ogg->set_id_utente($riga['id']);
        $ogg->setPrivilegi($riga['privilegi']);
        $ogg->setStato($riga['stato']);
        return $ogg;
    }

    /**
     * Metodo per verificare la presenza di un amministratore dato il nome
     * @param $name string nome dell'amministratore
     * @return bool|null
     */
    public function existNameAdmin(string $name)
    {
        $query = " SELECT * FROM " . $this->_tabella . " WHERE name= '" . $name . "';";
        try {
            $this->_connessione->beginTransaction();
            $pdostmt = $this->_connessione->prepare($query);
            $pdostmt->execute();
            $risultato = $pdostmt->fetchAll(PDO::FETCH_ASSOC);
            $this->_connessione->commit();
            if (($risultato != null) && (count($risultato) > 0)) {
                return true;
            } else return false;

        } catch (PDOException $e) {
            $this->_connessione->rollBack();
            echo "Errore: " . $e->getMessage();
            return null;

        }
    }

    /**
     * Metodo che effettua la load dell'amministratore utilizzando l'id
     * @param $id int dell'amministratore
     * @return string|null utente
     */
    public function loadById(int $id)
    {
        $riferimento = parent::loadById($id);
        if (($riferimento != null) && (count($riferimento) > 0)) {
            $riga = $riferimento[0];
            $admin = $this->getUtente($riga);
            return $admin;
        } else return null;
    }

}