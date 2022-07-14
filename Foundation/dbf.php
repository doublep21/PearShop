<?php

class dbf{
    private $db;
    private $qury_result;
    // protected $tabella;
    // protected $chiave;
    // protected $classe;
    // protected $autoincremento=false;
    public function __construct() {

    }
    public function connect(){
        try{
            $hostname='localhost';
            $database='pearshop';          
            $user='root';
            $password='';
            $this->db = new PDO ("mysql:host=$hostname;dbname=$database", $user, $password);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch (PDOException $e){
            echo "Errore: " . $e->getMessage();
        }   
        return $this->db;
    }

    public static function getInstance ()
	{ //restituisce l'unica istanza (creandola se non esiste gia')
		if (self::$instance == null) {
			self::$instance = new dbf();
		}
		return self::$instance;
	}
}

// $object = new dbf();
// $object->connect();
// var_dump($object);

?>