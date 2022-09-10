<?php
require __DIR__ . '/FDataBase.php';
class FTelUsato extends FDataBase {
    public function __construct()
    {
        parent::__construct();
        $this->_tabella = 'Prodotto';
        $this->_valore ='(:condizioni,:data_acquisto,:imei,:condizioni_schermo,:condizioni_batteria,:condizioni_usura,:prezzoAcquisto)';
        $this->_classe = 'FTelUsato';
    }

    /** Metodo che lega gli attributi del telefono usato da inserire mediante il parametro INSERT
     * @param PDOStatement $pdostatement
     * @param Etelusato $prodotto
     * @return void
     */
    public static function bind(PDOStatement $pdostatement, Etelusato $prodotto)
    {
        $pdostatement->bindValue(':id',NULL, PDO::PARAM_INT);
        $pdostatement->bindValue(':condizioni',$prodotto->getcondizioni(), PDO::PARAM_STR);
        $pdostatement->bindValue(':data_acquisto',$prodotto->getdataaquisto(), PDO::PARAM_STR);
        $pdostatement->bindValue('prezzo_us',$prodotto->getPrezzo(), PDO::PARAM_STR);
        $pdostatement->bindValue(':imei',$prodotto->getImei(),PDO::PARAM_INT);
        $pdostatement->bindValue(':condizioni_schermo',$prodotto->getCondSchermo(), PDO::PARAM_INT);
        $pdostatement->bindValue(':condizioni_batteria',$prodotto->getCondBatteria(), PDO::PARAM_INT);
        $pdostatement->bindValue(':condizioni_usura',$prodotto->getCondUsura(), PDO::PARAM_INT);
        $pdostatement->bindValue(':prezzoAcquisto',$prodotto->getPrezzoAq(), PDO::PARAM_STR);

    }

    /** Metodo che crea un oggetto di tipo Etelusato
     * @param array $riga rappresenta la tupla
     * @return Etelusato $prodotto
     */
    public static function buildTelUsato(array $riga)
    {
        $prodotto = new Etelusato($riga['condizioniT'], $riga['data_acquistoT'],$riga['prezzo_usT'],$riga['imeiT'],$riga['condizioni_schermoT'],$riga['condizioni_batteriaT'],$riga['condizioni_usuraT'],$riga['prezzoAcquistoT']);
        $prodotto->setId($riga['id']);
        return $prodotto;
    }
    
    /** Metodo che carica un prodotto nel database
    * @param $id int del prodotto
    * @return Etelusato|string|null
    */
    public function loadById(int $id)
    {
        $riga = parent::loadById($id);
        if(($riga!=null) && (count($riga)>0)){
            $listaprodotti = $riga[0];
            $prod = $this->buildProdotto($listaprodotti);
            return $prod;
        }
        else return null;
    }
    
    /** Metodo che carica un gruppo di prodotti nel database data una lista di id
    * @param $multipleid array di id da inserire
    * @return array|null
    */
    public function loadMultipleById(array $multipleid)
    {
        $listaprodotti = parent::loadMultipleById($multipleid);
        if(($listaprodotti != null) && (count($listaprodotti)>0)){
            $arrayobj = array();
            foreach($listaprodotti as $prodotto){
                $prod=$this->buildProdotto($prodotto);
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
    public function ricercaPerMarca($nome){
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