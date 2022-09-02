<?php

class FOrdine extends FDataBase{
    public function __construct()
    {
        parent::__construct();
        $this->_tabella = 'Ordine';
        $this->_valore ='(:prezzo_tot,:ind_spedizione,:data_ora,:codice_promozionale,:carello)';
        $this->_classe = 'FOrdine';
    }

    /**
     * Metodo che lega gli attributi del ordine da inserire mediante il parametro INSERT
     * @param $pdostatement
     * @param $ordine Eordine che deve essere inserito nel database
     */
    public static function bind(PDOStatement $pdostatement, Eordine $ordine)
    {
        //$pdostatement->bindValue(':id',NULL, PDO::PARAM_INT);
        $pdostatement->bindValue(':rating',$ordine->get_rating(), PDO::PARAM_INT);
        $pdostatement->bindValue(':testo',$ordine->get_testo(), PDO::PARAM_STR);
        $pdostatement->bindValue(':immagine',$ordine->get_immagini(), PDO::PARAM_STR);
    }

    /** Metodo che consente di creare un oggetto da una riga della tabella ordine
     * @param $riga lista del valore della tabella ordine
     * @return Eordine $ordine
     */
    public function getObject($riga){
        $ordine = new Eordine ($riga['testo'], $riga['rating'], $riga['immagine'], $riga['id_utente']);
        $ordine->setId($riga['id']);
        return $ordine;
    }

    /** Metodo che carica un ordine nel database
     * @param $id del ordine
     * @return Eordine|string|null
     */
    public function loadById($id)
    {
        $riga = parent::loadById($id);
        $listacommenti = $riga[0];
        if(($riga!=null) && (count($riga)>0)){
            $comm = $this->getObject($listacommenti);
            return $comm;
        }
        else return null;
    }

    /** Metodo che carica un gruppo di commenti nel database data una lista di id
     * @param $multipleid
     * @return array|null
     */
    public function loadMultipleById($multipleid)
    {
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
  
}
?>