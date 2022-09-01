<?php

class FCodicepromozionale extends FDataBase{
    public function __construct()
    {
        parent::__construct();
        $this->_tabella = 'CodicePromozionale';
        $this->_valore ='(:idcod,:codice,:data_scadenza,:toggle,:utilizzi)';
        $this->_classe = 'FCodicepromozionale';
    }

    /**
     * Metodo che lega gli attributi del codice promozionale da inserire mediante il parametro INSERT
     * @param $pdostatement
     * @param $codpro Ecodicipromozionali che deve essere inserito nel database
     */
    public static function bind(PDOStatement $pdostatement, Ecodicipromozionali $codpro)
    {
        $pdostatement->bindValue(':idcod',NULL, PDO::PARAM_INT);
        $pdostatement->bindValue(':codice',$codpro->get_codice(), PDO::PARAM_STR);
        $pdostatement->bindValue(':data_scadenza',$codpro->get_data_scadenza(), PDO::PARAM_STR);
        $pdostatement->bindValue(':toggle',$codpro->get_toggle(), PDO::PARAM_BOOL);
        $pdostatement->bindValue(':utilizzi',$codpro->get_utilizzi(), PDO::PARAM_INT);
    }

    /** Metodo che consente di creare un oggetto da una riga della tabella codice promozionale
     * @param $riga lista del valore della tabella codice promozionale
     * @return Ecodicipromozonali $codpro
     */
    public function getCodprom($riga){
        $codpro = new Ecodicipromozionali ($riga['codice'], $riga['data_scadenza'], $riga['toggle'], $riga['utilizzi']);
        $codpro->setIdcod($riga['idcod']);
        return $codpro;
    }

    /** Metodo che carica un codice promozionale nel database
     * @param $idcod del codice promozionale
     * @return Ecodicipromozonali|string|null
     */
    public function loadById($idcod)
    {
        $riga = parent::loadById($idcod);
        $listacod = $riga[0];
        if(($riga!=null) && (count($riga)>0)){
            $cod = $this->getCodprom($listacod);
            return $cod;
        }
        else return null;
    }

    /** Metodo che carica un gruppo di commenti nel database data una lista di id
     * @param $multipleid
     * @return array|null
     */
    public function loadMultipleById($multipleid)
    {
        $listacod = parent::loadMultipleById($multipleid);
        $arrayobj = array();
        if(($listacod != null) && (count($listacod)>0)){
            foreach($listacod as $codpro){
                $cod=$this->getCodprom($codpro);
                array_push($arrayobj, $cod);
            }
            return $arrayobj;
        }
        else return null;
    }

    /**Metodo che restituisce i commenti relativi a un prodotto
     * @param $idprodotto prodotto desiderato
     * @return array|null di commenti
     */
    

    /** Metodo che restituisce i commenti relativi all'utente
     * @param $idutente utente cercato
     * @return array|null di commenti
     */
   

    /** Metodo che restituisce commenti con un determiato valore
     * @param $contenuto da cercare
     * @param $attributo su cui cercare $contenuto
     * @return array|null di commenti
     */
    

    /** Metodo che conta tutti i commenti
     * @return mixed|null
     */
    
}
?>