<?php
class FDataBase 
{
	/** oggetto PDO per la connessione al DBMS*/
	protected $_connessione;

	/** contenuto della tabella, attributi*/
    protected $_valore;

    /** nome della tabella */ 
    protected $_tabella;

    /** nome della classe*/
    protected $_classe;

    /** costruttore */
    public function __construct()
    {
    	try{
    		$this->_connessione = new PDO ("mysql:dbname=".$GLOBALS['database'].";host= 127.0.0.1", $GLOBALS['username'], $GLOBALS['password']);
    	}
		catch (PDOException $e)
		{
    		echo "Errore: " . $e->getMessage();
    		die();
    	}
    }

    /**
     * Effettua lo store di un oggetto nel database
     * @param $oggetto da inserire nel database
     * @return false|string $id dell' oggetto inserito nel database
     */
    public function store($oggetto)
    {
    	$query = "INSERT INTO".$this->_tabella." VALUES ".$this->_valore.";";
    	try 
		{
    		$this->_connessione->beginTransaction();
    		$pdostmt = $this->_connessione->prepare($query); 
    		$this->_classe::bind($pdostmt, $oggetto);
    	 	$pdostmt->execute();
    	 	$id = $this->_connessione->lastInsertId();
    	 	$this->_connessione->commit();
    	 	return $id;

    	 } 
		 catch (PDOException $e) 
		 {
    	 	$this->_connessione->rollBack();
    	 	echo "Attenzione: " . $e->getMessage();
    	 	return false;
    	 	
    	 } 
    }

	/**
	 * Metodo che aggiorna il valore di un attributo nel database passato come paramentro
	 * @param $id dell'oggetto
	 * @param $newValue string nuovo valore dell'attributo
	 * @param $attributo string valore da cambiare
	 * @return boolean
	 */
	public function update($id, $newValue, $attributo)
	{
		$query = " UPDATE ". $this->_tabella ." SET ".$attributo." = '".$newValue."' WHERE id = ".$id.";";
		try 
		{
			$this->_connessione->beginTransaction();
			$pdostmt = $this->_connessione->prepare($query); 
			$pdostmt->execute();
			$this->_connessione->commit();
			return true;

		} 
		catch (PDOException $e) 
		{
			$this->_connessione->rollBack();
    	 	echo "Attenzione: " . $e->getMessage();
    	 	return false;
		}
	}

    /**
	 * Metodo che verifica la presenza di una tupla nel database
	 * @param int $id della tupla interessata
	 * @return boolean
	 */
	public function exist($id)
	{
		$query = " SELECT * FROM ".$this->_tabella." WHERE id =".$id.";";
		try 
		{
			$this->_connessione->beginTransaction();
			$pdostmt = $this->_connessione->prepare($query);
			$pdostmt->execute();
			$risultato = $pdostmt->fetchAll(PDO::FETCH_ASSOC);
			if(count($risultato)>0) return true;
			else return false;
			$this->_connessione->commit();

		} 
		catch (PDOException $e) 
		{
			$this->_connessione->rollBack();
    	 	echo "Attenzione: " . $e->getMessage();
    	 	return null;
		}
	}
    
	/**
	 * Metodo che elimina una npla dal database
	 * @param $id int della tupla
	 * @return boolean
	 */
	public function delete($id)
	{
		$query = " DELETE FROM".$this->_tabella." WHERE id =".$id.";";
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
    
	/**
	 * Metodo che permette il load di un oggetto nel database grazie al suo id
	 * @param $id int dell'oggetto
	 * @return string tupla recuperata
	 */
	public function loadById($id)
	{
		$query = " SELECT * FROM ".$this->_tabella." WHERE id =".$id.";";
		try 
		{
			$this->_connessione->beginTransaction();
			$pdostmt = $this->_connessione->prepare($query);
			$pdostmt->execute();
			$risultato = $pdostmt->fetchAll(PDO::FETCH_ASSOC);
			$this->_connessione->commit();
			return $risultato;
		} 
		catch (PDOException $e) 
		{
			$this->_connessione->rollBack();
    	 	echo "Attenzione: " . $e->getMessage();
    	 	return null;
		}
	}

	/**
	 * Metodo per la load di più oggetti nel database utilizzando l'id
	 * @param $multipleid array di id associati agli oggetti da recuparare
	 * @return array di tuple recuparate
	 */
	public function loadMultipleById($multipleid)
	{
		$i = implode(",", $multipleid);
		$i = "(".$i.")";
		$query = " SELECT * FROM ".$this->_tabella." WHERE id =".$i.";";
		try 
		{
			$this->_connessione->beginTransaction();
			$pdostmt = $this->_connessione->prepare($query);
			$pdostmt->execute();
			$risultato = $pdostmt->fetchAll(PDO::FETCH_ASSOC);
			$this->_connessione->commit();
			return $risultato;
		} 
		catch (PDOException $e) 
		{
			$this->_connessione->rollBack();
    	 	echo "Attenzione: " . $e->getMessage();
    	 	return null;
		}
	}

	/**
	 * Metodo per la ricerca di oggetti nel database
	 * @param mixed $contenuto da cercare
	 * @param mixed $attributo su cui ricercare $contenuto
	 * @return array tuple ricercate
	 */
	public function search($contenuto, $attributo)
	{
		$query = " SELECT * FROM ".$this->_tabella." WHERE ".$attributo." LIKE '%".$contenuto."%';";
		try {
			$this->_connessione->beginTransaction();
			$pdostmt = $this->_connessione->prepare($query);
			$pdostmt->execute();
			$risultato = $pdostmt->fetchAll(PDO::FETCH_ASSOC);
			$this->_connessione->commit();
			return $risultato;
		} 
		catch (PDOException $e) 
		{
			$this->_connessione->rollBack();
    	 	echo "Attenzione: " . $e->getMessage();
    	 	return null;
		}
	}
} 
?>