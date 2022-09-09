<?php

class FCarello extends FDataBase{
    public function __construct(){
        parent::__construct();
        $this->_tabella = 'Carrello';
        $this->_valore ='(:quantitaCarrello)';
        $this->_classe = 'FCarrello';
    }

    /**
    * Metodo che lega gli attributi del carrello da inserire mediante il parametro INSERT
    * @param $pdostatement
    * @param $carrello Ecarrello che deve essere inserito nel database
    */
    public static function bind(PDOStatement $pdostatement, Ecarrello $carrello){
        $pdostatement->bindValue(':id',NULL, PDO::PARAM_INT);
        $pdostatement->bindValue(':quantitaCarrello',$carrello->getQuantita(), PDO::PARAM_INT);
    }

    /** Metodo che consente di creare un oggetto da una riga della tabella carrello
    * @param $riga lista del valore della tabella carrello
    * @return Ecarrello $carrello
    */
    public function getCarrello($riga){
        $carrello = new Ecarrello ($riga['quantitaCarrello']);
        $carrello->setIdCarrello($riga['id']);
        return $carrello;
    }
    
    /** Metodo che carica un carrello nel database
    * @param $id int del carrello
    * @return Ecarrello|string|null
    */
    public function loadById(int $id){
        $riga = parent::loadById($id);
        $carrello = $riga[0];
        if(($riga!=null) && (count($riga)>0)){
            $car = $this->getCarrello($carrello);
            return $car;
        }
        else return null;
    }

    /**
    * Aggiornamento del carrello nel dbms
    * @param $car Ecarrello
    * @return bool
    */
    public function updateCarrello(Ecarrello $car){
        $idimm = $car->getIDcarrello();
        $quantita = $this->update($idimm, "Quantita", $car->getQuantita());
        if ($quantita){
            return true;
        } else {
            return false;
        }
    }
    
   
    
}
?>