<?php
class FPersistentManager{
	/** istanza della classe inizializzata a null */
	private static $instance = null;
    /** 
	 * Metodo che restituisce l'istanza di un oggetto, se non esiste be crea una
	 * @return istanza
	 */
    public static function getIstance(){
		if(static::$instance == null){
			static::$instance = new FPersistentManager();
		}
		return static::$instance;
	}

	/** 
	 * Metodo che permette di inserire un oggetto nel db 
	 * @param $oggetto oggetto da salvare
	 */
	public static function store($oggetto){
		$name_ogg = get_class($oggetto);
		switch ($name_ogg){
			case "Euser":
				$Futente = new Fusers();
				$id = $Futente->store($oggetto);
				break;
			case "Ecommenti":
				$Fcommento = new FCommenti();
				$id = $Fcommento->store($oggetto);
				break;
			case "Eprodotti":
				$Fprodotto = new FProdotto();
				$id = $Fprodotto->store($oggetto);
				break;
			case "Eaccessori":
				$Faccessori = new FAccessori();
				$id = $Faccessori->store($oggetto);
				break;
			case "Etelusato":
				$Ftelusato = new FTelUsato();
				$id = $Ftelusato->store($oggetto);
				break;

		}

	}
}