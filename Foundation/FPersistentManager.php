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
	 * @param $oggetto mixed oggetto da salvare
	 * @return boolean, id dell'oggetto che viene prelevato
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
			case "Ericondizionato":
				$Fricondizionato = new FRicondizionato();
				$id = $Fricondizionato->store($oggetto);
				break;
			default:
			     $id = false;
		}
		return $id;
       
	}

    /** Metodo che effettua la load dato l'id e il nome dell'oggetto da prendere
     * @param $oggetto mixed nome dell'oggetto
     * @param $id int dell'oggetto da recuperare
     * @return Eaccessori|Ecommenti|Eprodotti|Eprodotto|Eusers|string|null
     */
    public function loadById ($oggetto,int $id)
    {
        switch ($oggetto) {
            case "utente":
                $futente = new Fusers();
                $risultato = $futente->loadById($id);
                break;
            case "commento":
                $fcommento = new FCommenti();
                $risultato = $fcommento->loadById($id);
                break;
            case "prodotto":
                $fprodotto = new FProdotto();
                $risultato = $fprodotto->loadById($id);
                break;
            case "accessori":
                $fac = new FAccessori();
                $risultato = $fac->loadById($id);
                break;
            case "ricondizionato":
                $fr = new FRicondizionato();
                $risultato = $fr->loadById($id);
                break;
            case "telefonousato":
                $ftelUsato = new FTelUsato();
                $risultato = $ftelUsato->loadById($id);
                break;
            default:
                $risultato = null;
        }
        return $risultato;
    }

    /** Metodo che effettua una load dato un gruppo di id e gli oggetti da prendere
     * @param $oggetto mixed oggetto
     * @param $id array di id
     * @return array|null di oggetti
     */
    public function loadMultipleById($oggetto,int $id){
        switch ($oggetto){
            case "commento":
                $fcom = new FCommenti();
                $risultato = $fcom->loadMultipleById($id);
                break;
            case "prodotto":
                $fp = new FProdotto();
                $risultato = $fp->loadMultipleById($id);
                break;
            case "accessorio":
                $fac = new FAccessori();
                $risultato = $fac->loadMultipleById($id);
                break;
            case "utente":
                $fus = new Fusers();
                $risultato = $fus->loadMultipleById($id);
                break;
            case "telefonousato":
                $ft = new FTelUsato();
                $risultato = $ft->loadMultipleById($id);
                break;
            case "ricondizionato":
                $fri = new FRicondizionato();
                $risultato = $fri->loadMultipleById($id);
                break;
            default:
                $risultato = null;
        }
        return $risultato;

    }

}