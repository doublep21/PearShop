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
				$Fprodotto = new FtelNuovo();
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
     * @return Eaccessori|Ecommenti|Eprodotti|EtelNuovo|Eusers|string|null
     */
    public function loadById($oggetto,int $id)
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
                $fprodotto = new FtelNuovo();
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
                $fp = new FtelNuovo();
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

    /** Metodo che effettua l'update di un oggetto
     * @param $oggetto mixed oggetto interessato
     * @param $id int id dell'oggetto
     * @param $attributo mixed da aggiornare
     * @param $valore mixed da impostare
     * @return bool risultato
     */
    public function update($oggetto, int $id, $attributo, $valore){
        switch ($oggetto){
            case "accessori":
                $facc = new FAccessori();
                $risultato = $facc->update($id,$attributo,$valore);
                break;
            case "telefonousato":
                $ftel = new FTelUsato();
                $risultato = $ftel->update($id,$attributo,$valore);
                break;
            case "commento":
                $fcom = new FCommenti();
                $risultato = $fcom->update($id,$attributo,$valore);
                break;
            case "Ricondizionato":
                $fric = new FRicondizionato();
                $risultato = $fric->update($id,$attributo,$valore);
                break;
            case "utente":
                $fus = new Fusers();
                $risultato = $fus->update($id,$attributo,$valore);
                break;
            case "Eimmagine":
                $Fimm = new FImmagini();
                $id = $Fimm->update($id,$attributo,$valore);
                break;
            default:
                $risultato = false;
        }
        return $risultato;
    }

    /** Metodo che effettua il delete di un oggetto nel database
     * @param $oggetto mixed oggetto interessato
     * @param $id int dell'oggetto
     * @return bool risultato
     */
    public function delete($oggetto,int $id){
        switch ($oggetto){
            case "accessori":
                $delete= new FAccessori();
                $risultato= $delete->delete($id);
                break;
            case "telefonousato":
                $delete= new FTelUsato();
                $risultato= $delete->delete($id);
                break;
            case "commento":
                $delete= new FCommenti();
                $risultato= $delete->delete($id);
                break;
            case "ricondizionato":
                $delete= new FRicondizionato();
                $risultato= $delete->delete($id);
                break;
            case "utente":
                $delete= new Fusers();
                $risultato= $delete->delete($id);
                break;
            default:
                $risultato = false;
        }
        return $risultato;
    }

    /** Metodo per verificare la presenza di un oggetto nel database
     * @param mixed $oggetto da cercare
     * @param int $id dell'oggetto
     * @return bool|null risultato
     */
    public function exist($oggetto, int $id)
    {
        switch ($oggetto){
            case "accessori":
                $object= new FAccessori();
                $risultato= $object->exist($id);
                break;
            case "telefonousato":
                $object= new FTelUsato();
                $risultato= $object->exist($id);
                break;
            case "commento":
                $object= new FCommenti();
                $risultato= $object->exist($id);
                break;
            case "utente":
                $object= new Fusers();
                $risultato= $object->exist($id);
                break;
            case "ricondizionato":
                $object= new FRicondizionato();
                $risultato= $object->exist($id);
                break;
            default:
                $risultato = null;
        }
        return $risultato;
    }

    /** Metodo che effettua la load di un commento dato l'id del prodotto
     * @param int $id prodotto
     * @return Ecommenti|string|null
     */
    public function loadCommByIdProdotto(int $id)
    {
        $commento = new FCommenti();
        $risultato = $commento->loadById($id);
        return $risultato;
    }

    /** Metodo che effettua la load di un commento dato l'id dell'utente
     * @param int $id dell'utente
     * @return mixed
     */
    public function loadCommByIdUtente(int $id)
    {
        $comm = new FCommenti();
        $risultato = $comm->loadByIdUtente($id);
        return $risultato;
    }

    /** Metodo che effettua il search di un oggetto nel database
     * @param mixed $oggetto oggetto interessato
     * @param mixed $valore da cercare
     * @param mixed $attributo su cui scrivere $valore
     * @return array|null oggetti recuperati
     */
    public function search($oggetto, $valore, $attributo){
        switch ($oggetto){
            case "accessori":
                $facc = new FAccessori();
                $risultato = $facc->search($valore,$attributo);
                break;
            case "commento":
                $fcom = new FCommenti();
                $risultato = $fcom->search($valore,$attributo);
                break;
            case "ricondzionato":
                $fr = new FRicondizionato();
                $risultato = $fr->search($valore,$attributo);
                break;
            case "utente":
                $fu = new Fusers();
                $risultato = $fu->search($valore,$attributo);
                break;
            case "telefonousato":
                $ftel = new FTelUsato();
                $risultato = $ftel->search($valore,$attributo);
                break;
            default:
                $risultato = null;
        }
        return $risultato;
    }

    /** Metodo che effettua la ricerca tramite filtri
     * @param $ricerca mixed array associativo
     * @return array|null di prodotti recuperati tramite ricerca
     */
    public function ricercaByMarca($ricerca)
    {
        $fr = new FRicondizionato();
        $risultato = $fr->ricercaPerMarca($ricerca);
        return $risultato;
    }

    /** Verifica se è presente un utente con un certo nome nel database
     * @param $username string nome dell'utente
     * @return bool|null
     */
    public function existUsername(string $username)
    {
        $fu = new Fusers();
        $esito = $fu->existName($username);
        return $esito;
    }

    /** Metodo che conta il numero di commenti
     * @return mixed|null
     */
    public function contacommenti(){
        $commento = new FCommenti();
        $r = $commento->contaCommenti();
        return $r;
    }

    /**Metodo per aggiornare la foto di un prodotto
     * @param $foto Eimmagine aggiornata
     * @return bool
     */
    public function updateFoto(Eimmagine $foto) {
        $fimm = new FImmagini();
        $esito= $fimm->updateFoto($foto);
        return $esito;
    }

}