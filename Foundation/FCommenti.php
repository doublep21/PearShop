<?php
require __DIR__ . '/FDataBase.php';
class FCommenti extends FDataBase{
    public function __construct(){
        parent::__construct();
        $this->_tabella = 'Commenti';
        $this->_valore ='(:id_commento,:id_img,:Text,:Rating)';
        $this->_classe = 'FCommenti';
    }

    /**
    * Metodo che lega gli attributi del commento da inserire mediante il parametro INSERT
    * @param $pdostatement
    * @param $commento Ecommenti che deve essere inserito nel database
    */
    public static function bind(PDOStatement $pdostatement, Ecommenti $commento){
        $pdostatement->bindValue(':id_commento',NULL, PDO::PARAM_INT);
        $pdostatement->bindValue(':id_img',$commento->getImmagini(), PDO::PARAM_STR);
        $pdostatement->bindValue(':Text',$commento->getTesto(), PDO::PARAM_STR);
        $pdostatement->bindValue(':Rating',$commento->getRating(), PDO::PARAM_INT);
    }

    /** Metodo che consente di creare un oggetto da una riga della tabella commento
    * @param $riga array lista del valore della tabella commento
    * @return ECommenti $commento
    */
    public function getObject($riga){
        $commento = new Ecommenti ($riga['testo'], $riga['rating'], $riga['id_img'], $riga['id_utente']);
        $commento->setId($riga['id_commento']);
        $commento->setImg($riga['id_img']);
        return $commento;
    }

    /** Metodo che carica un commento nel database
    * @param $id int del commento
    * @return Ecommenti|string|null
    */
    public function loadById(int $id){
        $riga = parent::loadById($id);
        $listacommenti = $riga[0];
        if(($riga!=null) && (count($riga)>0)){
            $comm = $this->getObject($listacommenti);
            return $comm;
        }
        else return null;
    }

    /** Metodo che carica un gruppo di commenti nel database data una lista di id
    * @param $multipleid array
    * @return array|null
    */
    public function loadMultipleById(array $multipleid){
        $listacomm = parent::loadMultipleById($multipleid);
        $arrayobj = array();
        if(($listacomm != null) && (count($listacomm)>0)){
            foreach($listacomm as $commento){
                $comm=$this->getObject($commento);
                array_push($arrayobj, $comm);
            }
            return $arrayobj;
        }
        else return null;
    }

    /**Metodo che restituisce i commenti relativi a un prodotto
    * @param $idprodotto int  prodotto desiderato
    * @return array|null di commenti
    */
    public function loadProdotto(int $idprodotto){
        $query = "SELECT * FROM ".$this->_tabella." WHERE id_prodotto=".$idprodotto.";";
        try {
            $this->_connessione->beginTransaction();
            $pdostmt = $this->_connessione->prepare($query);
            $pdostmt->execute();
            $rows = $pdostmt->fetchAll(PDO::FETCH_ASSOC);
            $this->_connessione->commit();
            $arraycomm = array();
            foreach ($rows as $riga){
                $comm=$this->getObject($riga);
                array_push($arraycomm,$comm);
            }
            return $arraycomm;
        }
        catch (PDOException $e){
            $this->_connessione->rollBack();
            echo "Attenzione, errore: " . $e->getMessage();
            return null;
        }
    }

    /** Metodo che restituisce i commenti relativi all'utente
    * @param $idutente int utente cercato
    * @return array|null di commenti
    */
    public function loadByIdUtente(int $idutente){
        $query = "SELECT * FROM ".$this->_tabella." WHERE id_utente=".$idutente.";";
        try {
            $this->_connessione->beginTransaction();
            $pdostmt = $this->_connessione->prepare($query);
            $pdostmt->execute();
            $rows = $pdostmt->fetchAll(PDO::FETCH_ASSOC);
            $this->_connessione->commit();
            $arraycomm = array();
            foreach ($rows as $riga){
                $comm=$this->getObject($riga);
                array_push($arraycomm,$comm);
            }
            return $arraycomm;
        }
        catch (PDOException $e){
            $this->_connessione->rollBack();
            echo "Attenzione, errore: " . $e->getMessage();
            return null;
        }
    }

    /** Metodo che restituisce commenti con un determiato valore
    * @param $contenuto da cercare
    * @param $attributo su cui cercare $contenuto
    * @return array|null di commenti
    */
    public function search($contenuto, $attributo){
        $array = parent::search($contenuto, $attributo);
        $arrayobj = array();
        if(($array != null) && (count($array)>0)){
            foreach($array as $i){
                $comm = $this->getObject($i);
                array_push($arrayobj, $comm);
            }
            return $arrayobj;
        }
        else return null;
    }

    /** Metodo che conta tutti i commenti
    * @return mixed|null
    */
    public function contaCommenti(){
        $query ="SELECT COUNT(id) AS n FROM ".$this->_tabella.";";
        try{
            $this->_connessione->beginTransaction();
            $pdostmt = $this->_connessione->prepare($query);
            $pdostmt->execute();
            $row = $pdostmt->fetchAll(PDO::FETCH_ASSOC);
            $this->_connessione->commit();
            return $row[0]['n'];
        }
        catch (PDOException $e){
            $this->_connessione->rollBack();
            echo "Attenzione, errore: " . $e->getMessage();
            return null;
        }
    }
    
}
?>