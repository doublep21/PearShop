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
    	}catch (PDOException $e){
    		echo "Errore: " . $e->getMessage();
    		die();
    	}
    }

    /**
	 * Effettua lo store di un oggetto nel database
	 * @param $oggetto da inserire nel database
	 * @return $id dell' oggetto inserito nel database
	 */
    public function store($oggetto)
    {
    	$query = "INSERT INTO".$this->_tabella." VALUES ".$this->_valore.";";
    	try {

    		$this->_connessione->beginTransaction();
    		$pdostmt = $this->_connessione->prepare($query); 
    		$this->_classe::bind($pdostmt, $oggetto);
    	 	$pdostmt->execute();
    	 	$id = $this->_connessione->lastInsertId();
    	 	$this->_connessione->commit();
    	 	return $id;

    	 } catch (PDOException $e) {
    	 	$this->_connessione->rollBack();
    	 	echo "Attenzione: " . $e->getMessage();
    	 	return false;
    	 	
    	 } 
    }
} 
?>