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
        $pdostatement->bindValue(':codice',$codpro->getcodice(), PDO::PARAM_STR);
        $pdostatement->bindValue(':data_scadenza',$codpro->getdatascadenza(), PDO::PARAM_STR);
        $pdostatement->bindValue(':toggle',$codpro->gettoggle(), PDO::PARAM_BOOL);
        $pdostatement->bindValue(':utilizzi',$codpro->getutilizzi(), PDO::PARAM_INT);
    }

    /** Metodo che consente di creare un oggetto da una riga della tabella codice promozionale
     * @param $riga array lista del valore della tabella codice promozionale
     * @return Ecodicipromozionali $codpro
     */
    public function getCodprom($riga){
        $codpro = new Ecodicipromozionali ($riga['codice'], $riga['data_scadenza'], $riga['toggle'], $riga['utilizzi']);
        $codpro->setIdcod($riga['idcod']);
        return $codpro;
    }

    /** Metodo che carica un codice promozionale nel database
     * @param $idcod int del codice promozionale
     * @return Ecodicipromozionali|string|null
     */
    public function loadById(int $idcod)
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
     * @param $multipleid array
     * @return array|null
     */
    public function loadMultipleById( $multipleid)
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

    /**
     * Metodo per verificare la presenza di un codice 
     * @param $codice string 
     * @return bool|null
     */
    public function existCodice(string $codice)
    {
        $query = " SELECT * FROM ".$this->_tabella." WHERE Codice= '".$codice."';";
        try {
            $this->_connessione->beginTransaction();
            $pdostmt = $this->_connessione->prepare($query);
            $pdostmt->execute();
            $risultato = $pdostmt->fetchAll(PDO::FETCH_ASSOC);
            $this->_connessione->commit();
            if(($risultato != null) && (count($risultato)>0)){
                return true;
            }
            else return false;

        }
        catch (PDOException $e){
            $this->_connessione->rollBack();
            echo "Errore: ".$e->getMessage();
            return null;

        }
    }

    /**
	 * Metodo che elimina un codice dal database
	 * @param $codice string 
	 * @return boolean
	 */
	public function deleteCodice(string $codice)
	{
		$query = " DELETE FROM".$this->_tabella." WHERE Codice =".$codice.";";
		try
		{
			$this->_connessione->beginTransaction();
			$pdostmt = $this->_connessione->prepare($query);
			$pdostmt->execute();
			$this->_connessione->commit();
			return true;
		}
		catch(PDOException $e)
		{
			$this->_connessione->rollBack();
    	 	echo "Attenzione: " . $e->getMessage();
    	 	return false;
		}
	}
    
}
?>