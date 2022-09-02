<?php

class FImmagini extends FdataBase{
    public function __construct()
    {
        parent::__construct();
        $this->_tabella = 'Immagini';
        $this->_valore ='(:id_img,:nome,:type,:size)';
        $this->_classe = 'FImmagini';
    }

    /** Metodo che lega gli attributi dell'immagine da inserire mediante il parametro INSERT
     * @param PDOStatement $pdostatement
     * @param Eimmagini $img
     * @return void
     */
    public static function bind(PDOStatement $pdostatement, Eimmagini $img)
    {
        $pdostatement->bindValue(':id_img',NULL, PDO::PARAM_INT);
        $pdostatement->bindValue(':nome',$img->get_nome(), PDO::PARAM_STR);
        $pdostatement->bindValue(':type',$img->get_type(), PDO::PARAM_STR);
        $pdostatement->bindValue(':size',$img->get_size(), PDO::PARAM_INT);
        $pdostatement->bindValue(':img',$img->get_img(), PDO::PARAM_LOB);
    
    }

    /** Metodo che crea un oggetto di tipo Eimmagini
     * @param array $riga rappresenta la tupla
     * @return Eimmagini $img
     */
    public static function buildImg(array $riga)
    {
        $img = new Eaccessori($riga['nome'],$riga['type'],$riga['size'],$riga['img']);
        $img->set_id_img($riga['id_img']);
        return $img;
    }

    /** Metodo che carica un immagine nel database
     * @param $id dell'immagine 
     * @return Eimmagini|string|null
     */
    public function loadById($id_immagine)
    {
        $riga = parent::loadById($id_immagine);
        if(($riga!=null) && (count($riga)>0)){
            $listimg = $riga[0];
            $img = $this->buildImg($listaimg);
            return $img;
        }
        else return null;
    }

     /** Metodo che carica un gruppo di immagini nel database data una lista di id
     * @param $multipleid
     * @return array|null
     */
    public function loadMultipleById($multipleid)
    {
        $listaimg = parent::loadMultipleById($multipleid);
        if(($listaimg != null) && (count($listaimg)>0)){
            $arrayobj = array();
            foreach($listaimg as $img){
                $im=$this->buildAccessorio($img);
                array_push($arrayobj, $im);
            }
            return $arrayobj;
        }
        else return null;
    }

     /**
     * Aggiornamento delle immagini nel dbms
     * @param $foto
     * @return bool
     */
    public function updateFoto($foto){
        $idimm = $imm->get_id_img();
        $nome=$this->update($idimm, "Nome", $foto->get_nome());
        $type = $this->update($idimm, "Type", $foto->get_type());
        $size = $this->update($idimm, "Size", $foto->get_size());
        $img = $this->update($idimm, "img", $foto->get_img());
        if($nome && $type && $size && $img){
            return true;
        } else {
            return false;
        }

         /**
	 * Metodo che elimina un immagine dal database
	 * @param $id_img string 
	 * @return boolean
	 */
	public function deleteCodice($id_img)
	{
		$query = " DELETE FROM".$this->_tabella." WHERE id_immagine =".$id_img.";";
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