<?php

class dbf{
/**
 * @var $_connessione gestione della connessione con il database
 */
protected $_connessione;
protected $_tabella;
protected $_chiave;
protected $_classe;
protected $_contenutoquery;


public function __construct(){}

public function connessione(){
    try{
        $hostname='localhost';
        $database='pearshop';          
        $user='root';
        $password='';
        $this->db = new PDO ("mysql:host=$hostname;dbname=$database", $nome.$cognome, $password);
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch (PDOException $e){
        echo "Errore: " . $e->getMessage();
    }   
    return $this->db;
}

}

// $object = new dbf();
// $object->connect();
// var_dump($object);

?>