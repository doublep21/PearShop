<?php

class FCarello extends FDataBase{
    public function __construct()
    {
        parent::__construct();
        $this->_tabella = 'Carello';
        $this->_valore ='(:quantitaCarello)';
        $this->_classe = 'FCarello';
    }

    /**
     * Metodo che lega gli attributi del carello da inserire mediante il parametro INSERT
     * @param $pdostatement
     * @param $carello Ecarello che deve essere inserito nel database
     */
    public static function bind(PDOStatement $pdostatement, Ecarello $carello)
    {
        //$pdostatement->bindValue(':id',NULL, PDO::PARAM_INT);
        $pdostatement->bindValue(':quantitaCarello',$carello->get_quantitaCarello(), PDO::PARAM_INT);

    }

    /** Metodo che consente di creare un oggetto da una riga della tabella carello
     * @param $riga lista del valore della tabella carello
     * @return Ecarello $carello
     */
    /*public function getCarello($riga){
        $carello = new Ecarello ($riga['quantitaCarello']);
        $carello->setId($riga['id']);
        return $carello;
    }
    */

    /** Metodo che carica un carello nel database
     * @param $id del carello
     * @return Ecarello|string|null
     */
    /*public function loadById($id)
    {
        $riga = parent::loadById($id);
        $listacommenti = $riga[0];
        if(($riga!=null) && (count($riga)>0)){
            $comm = $this->getCarello($listacommenti);
            return $comm;
        }
        else return null;
    }
    */
    /** Metodo che carica un gruppo di carello nel database data una lista di id
     * @param $multipleid
     * @return array|null
     */
    /*public function loadMultipleById($multipleid)
    {
        $listacomm = parent::loadMultipleById($multipleid);
        $arrayobj = array();
        if(($listacomm != null) && (count($listacomm)>0)){
            foreach($listacomm as $commento){
                $comm=$this->getCarello($commento);
                array_push($arrayobj, $comm);
            }
            return $arrayobj;
        }
        else return null;
    }
    */
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