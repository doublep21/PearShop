<?php

class FImmagini extends FdataBase{
    public function __construct(){
        parent::__construct();
        $this->_tabella = 'Immagini';
        $this->_valore ='(:id_img,:nome,:type,:size)';
        $this->_classe = 'FImmagini';
    }

    /** Metodo che lega gli attributi dell'immagine da inserire mediante il parametro INSERT
    * @param PDOStatement $pdostatement
    * @param Eimmagine $img
    * @return void
    */
    public static function bind(PDOStatement $pdostatement, Eimmagine $img){
        $pdostatement->bindValue(':id_img',NULL, PDO::PARAM_INT);
        $pdostatement->bindValue(':nome',$img->getNomeIm(), PDO::PARAM_STR);
        $pdostatement->bindValue(':type',$img->getTyp(), PDO::PARAM_STR);
        $pdostatement->bindValue(':size',$img->getSize(), PDO::PARAM_INT);
        $pdostatement->bindValue(':img',$img->getImg(), PDO::PARAM_LOB);
    }

    /** Metodo che crea un oggetto di tipo Eimmagini
    * @param array $riga rappresenta la tupla
    * @return Eimmagini $img
    */
    public static function buildImg(array $riga){
        $img = new Eimmagine($riga['nome'],$riga['type'],$riga['size'],$riga['img']);
        $img->setIDimg($riga['id_img']);
        return $img;
    }

    /** Metodo che carica un immagine nel database
    * @param $id int dell'immagine
    * @return Eimmagine|string|null
    */
    public function loadById(int $id_immagine){
        $riga = parent::loadById($id_immagine);
        if(($riga!=null) && (count($riga)>0)){
            $listimg = $riga[0];
            $img = $this->buildImg($listimg);
            return $img;
        }
        else return null;
    }

    /** Metodo che carica un gruppo di immagini nel database data una lista di id
    * @param $multipleid
    * @return array|null
    */
    public function loadMultipleById($multipleid){
        $listaimg = parent::loadMultipleById($multipleid);
        if(($listaimg != null) && (count($listaimg)>0)){
            $arrayobj = array();
            foreach($listaimg as $img){
                $im=$this->buildImg($img);
                array_push($arrayobj, $im);
            }
            return $arrayobj;
        }
        else return null;
    }

    /**
    * Aggiornamento delle immagini nel dbms
    * @param $foto Eimmagine
    * @return bool
    */
    public function updateFoto(Eimmagine $foto){
        $idimm = $foto->getIDimg();
        $nome = $this->update($idimm, "Nome", $foto->getNomeIm());
        $type = $this->update($idimm, "Type", $foto->getTyp());
        $size = $this->update($idimm, "Size", $foto->getSize());
        $img = $this->update($idimm, "img", $foto->getImg());
        if ($nome && $type && $size && $img){
            return true;
        } else {
            return false;
        }
    }

    /**
	* Metodo che elimina un immagine dal database
	* @param $id_img int
	* @return boolean
	*/
	public function deleteFoto(int $id_img){
		$query = " DELETE FROM".$this->_tabella." WHERE id_immagine =".$id_img.";";
		try{
			$this->_connessione->beginTransaction();
			$pdostmt = $this->_connessione->prepare($query);
			$pdostmt->execute();
			$this->_connessione->commit();
			return true;
		}
		catch(PDOException $e){
			$this->_connessione->rollBack();
    	 	echo "Attenzione: " . $e->getMessage();
    	 	return false;
		}
	}
	
}

?>