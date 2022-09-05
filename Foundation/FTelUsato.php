<?php

class FTelUsato extends FDataBase {
    public function __construct()
    {
        parent::__construct();
        $this->_tabella = 'Prodotto';
        $this->_valore ='(:condizioni,:data_acquisto,:prezzo_us,:imei,:condizioni_schermo,:condizioni_batteria,:condizioni_usura,:prezzoAcquisto)';
        $this->_classe = 'FTelUsato';
    }

    /** Metodo che lega gli attributi del telefono usato da inserire mediante il parametro INSERT
     * @param PDOStatement $pdostatement
     * @param Etelusato $prodotto
     * @return void
     */
    public static function bind(PDOStatement $pdostatement, Etelusato $prodotto)
    {
        //$pdostatement->bindValue(':id',NULL, PDO::PARAM_INT);
        $pdostatement->bindValue(':condizioni',$prodotto->getcondizioni(), PDO::PARAM_STR);
        $pdostatement->bindValue(':data_acquisto',$prodotto->getdataaquisto(), PDO::PARAM_STR);
        $pdostatement->bindValue('prezzo_us',$prodotto->get_prezzo_us(), PDO::PARAM_STR);
        $pdostatement->bindValue(':imei',$prodotto->get_imei(),PDO::PARAM_INT);
        $pdostatement->bindValue(':condizioni_schermo',$prodotto->get_cond_schermo(), PDO::PARAM_INT);
        $pdostatement->bindValue(':condizioni_batteria',$prodotto->get_cond_batteria(), PDO::PARAM_INT);
        $pdostatement->bindValue(':condizioni_usura',$prodotto->get_cond_usura(), PDO::PARAM_INT);
        $pdostatement->bindValue(':prezzoAcquisto',$prodotto->get_prezzo_aq(), PDO::PARAM_STR);

    }

    /** Metodo che crea un oggetto di tipo Etelusato
     * @param array $riga rappresenta la tupla
     * @return Etelusato $prodotto
     */
    public static function buildTelUsato(array $riga)
    {
        $prodotto = new Etelusato($riga['condizioniT'], $riga['data_acquistoT'],$riga['prezzo_usT'],$riga['imeiT'],$riga['condizioni_schermoT'],$riga['condizioni_batteriaT'],$riga['condizioni_usuraT'],$riga['prezzoAcquistoT']);
        //$prodotto->set_id($riga['id']);
        return $prodotto;
    }
    

    
    /** Metodo che carica un prodotto nel database
     * @param $id del prodotto
     * @return Etelusato|string|null
     */
    /*
    public function loadById($id)
    {
        $riga = parent::loadById($id);
        if(($riga!=null) && (count($riga)>0)){
            $listaprodotti = $riga[0];
            $prod = $this->buildProdotto($listaprodotti);
            return $prod;
        }
        else return null;
    }
    */

     /** Metodo che carica un gruppo di prodotti nel database data una lista di id
     * @param $multipleid
     * @return array|null
     */
    /*
    public function loadMultipleById($multipleid)
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
    */
}
?>