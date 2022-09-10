<?php
require __DIR__ . '/FDataBase.php';
class FOrdine extends FDataBase{
    public function __construct(){
        parent::__construct();
        $this->_tabella = 'Ordine';
        $this->_valore ='(:id_ordine,:prezzo_tot,:ind_spedizione,:data_ora,:codice_promozionale,:carrello)';
        $this->_classe = 'FOrdine';
    }

    /**
    * Metodo che lega gli attributi del ordine da inserire mediante il parametro INSERT
    * @param $pdostatement
    * @param $ordine Eordine che deve essere inserito nel database
    */
    public static function bind(PDOStatement $pdostatement, Eordine $ordine){
        $pdostatement->bindValue(':id',NULL, PDO::PARAM_INT);
        $pdostatement->bindValue(':prezzo_tot',$ordine->getPrezzoT(), PDO::PARAM_INT);
        $pdostatement->bindValue(':ind_spedizione',$ordine->getIndS(), PDO::PARAM_STR);
        $pdostatement->bindValue(':data_ora',$ordine->getDataOra(), PDO::PARAM_STR);
        $pdostatement->bindValue(':codice_promozionale',$ordine->getCodiceprom(), PDO::PARAM_STR);
        $pdostatement->bindValue(':carrello',$ordine->getCarrello(), PDO::PARAM_STR);
    }

    /** Metodo che consente di creare un oggetto da una riga della tabella ordine
    * @param $riga lista del valore della tabella ordine
    * @return Eordine $ordine
    */
    public function getObject($riga){
        $ordine = new Eordine ($riga['testo'], $riga['rating'], $riga['immagine'], $riga['id_utente']);
        $ordine->setIDordine($riga['id']);
        return $ordine;
    }

    /** Metodo che carica un ordine nel database
    * @param $id int del ordine
    * @return Eordine|string|null
    */
    public function loadById(int $id){
        $riga = parent::loadById($id);
        $listaordine = $riga[0];
        if(($riga!=null) && (count($riga)>0)){
            $ordine = $this->getObject($listaordine);
            return $ordine;
        }
        else return null;
    }
  
}
?>