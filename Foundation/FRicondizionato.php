<?php

class FRicondizionato extends FDataBase {
    public function __construct()
    {
        parent::__construct();
        $this->_tabella = 'TelefonoUsato';
        $this->_valore ='(:data_ricondizionato,:condizioni,:prezzo)';
        $this->_classe = 'FRicondizionato';
    }

    /** Metodo che lega gli attributi del telefono ricondizionato da inserire mediante il parametro INSERT
     * @param PDOStatement $pdostatement
     * @param Ericondizionato $prodotto
     * @return void
     */
    public static function bind(PDOStatement $pdostatement, Ericondizionato $prodotto)
    {
        //$pdostatement->bindValue(':id',NULL, PDO::PARAM_INT);
        $pdostatement->bindValue(':data_ricondizionato',$prodotto-> getDataRicondizionamento(), PDO::PARAM_STR);
        $pdostatement->bindValue(':condizioni',$prodotto->getCondizioniRi(), PDO::PARAM_STR);
        $pdostatement->bindValue(':prezzo',$prodotto->getPrezzo(), PDO::PARAM_INT);

    }

    /** Metodo che crea un oggetto di tipo Ericondizionato
     * @param array $riga rappresenta la tupla
     * @return Ericondizionato $prodotto
     */
    public static function buildRicondizionato(array $riga)
    {
        $prodotto = new Ericondizionato($riga['data_ricondizionatoR'], $riga['condizioniR'],$riga['prezzoR']);
        $prodotto->setId($riga['id']);
        $prodotto->setElencoCommenti($riga['elenco_commenti']);
        $prodotto->setImmagini($riga['immagini']);
        return $prodotto;
    }

    /** Metodo che carica un prodotto nel database
     * @param $id int del prodotto
     * @return Ericondizionato
     */
    public function loadById($id)
    {
        $riga = parent::loadById($id);
        if(($riga!=null) && (count($riga)>0)){
            $listaprodotti = $riga[0];
            $prod = $this->buildRicondizionato($listaprodotti);
            return $prod;
        }
        else return null;
    }

    /** Metodo che carica un gruppo di prodotti nel database data una lista di id
     * @param $multipleid
     * @return array|null
     */
    public function loadMultipleById($multipleid)
    {
        $listaprodotti = parent::loadMultipleById($multipleid);
        if(($listaprodotti != null) && (count($listaprodotti)>0)){
            $arrayobj = array();
            foreach($listaprodotti as $prodotto){
                $prod=$this->buildRicondizionato($prodotto);
                array_push($arrayobj, $prod);
            }
            return $arrayobj;
        }
        else return null;
    }

    /**
     * Metodo che permette di effettuare una ricerca di prodotti per marca
     * @param $nome array di id prodotti
     * @return array di EtelNuovo
     */
    public function ricercaPerNome($nome){
        if(count($nome)!=0){
            $query = "SELECT marca FROM prodotto WHERE marca=".$nome ;
            for ($i=1; $i<count($nome); $i++){
                $query = "SELECT id_prodotto FROM prodotto  WHERE marca=".$nome[$i];
            }
        }else{
            $query = "SELECT * FROM prodotto";
        }
        $query = $query.";";

        try {
            $this->_connessione->beginTransaction();
            $pdostmt = $this->_connessione->prepare($query);
            $pdostmt->execute();
            $risultato = $pdostmt->fetchAll(PDO::FETCH_ASSOC);
            $this->_connessione->commit();
        }
        catch (PDOException $e)
        {
            $this->_connessione->rollBack();
            echo "Attenzione, errore: " . $e->getMessage();
        }
        $arrynome = array();
        foreach ($rows as  $value) {
            array_push($arrynome, $value['id_prodotto']);
        }
        $arrryprod = $this->loadMultipleById($arrynome);
        return $arrryprod;
    }
}
?>

?>