<?php

class EtelNuovo extends Eprodotti
{
    /** Costruttore della classe Telefono Nuovo
     * @param int $id del prodotto
     * @param string $marcaP associata al prodotto nuovo
     * @param string $descrizioneP del prodotto
     * @param int $quantitàP del prodotto in possesso del venditore
     * @param float $prezzoP del prodotto
     * @param Ecommenti $elenco_commentiP
     * @param Eimmagine $immagineI galleria di immagini del prodotto
     */
    public function __construct(int $id, string $marcaP, string $descrizioneP, int $quantitàP, float $prezzoP, Ecommenti $elenco_commentiP, Eimmagine $immagineI)
    {
        parent::__construct($id, $marcaP, $descrizioneP, $quantitàP, $prezzoP, $elenco_commentiP, $immagineI);
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return parent::getId();
    }

    /**
     * @param int $id
     * @return void
     */
    public function setId(int $id): void
    {
        parent::setId($id);
    }

    /**
     * @return string
     */
    public function getMarca(): string
    {
        return parent::getMarca();
    }

    /**
     * @param string $marca
     * @return void
     */
    public function setMarca(string $marca): void
    {
        parent::setMarca($marca);
    }

    /**
     * @return string
     */
    public function getDescrizione(): string
    {
        return parent::getDescrizione();
    }

    /**
     * @param string $descrizione
     * @return void
     */
    public function setDescrizione(string $descrizione): void
    {
        parent::setDescrizione($descrizione);
    }

    /**
     * @return int
     */
    public function getQuantità(): int
    {
        return parent::getQuantità();
    }

    /**
     * @param int $quantità
     * @return void
     */
    public function setQuantità(int $quantità): void
    {
        parent::setQuantità($quantità);
    }

    /**
     * @return float
     */
    public function getPrezzo(): float
    {
        return parent::getPrezzo();
    }

    /**
     * @param float $prezzo
     * @return void
     */
    public function setPrezzo(float $prezzo): void
    {
        parent::setPrezzo($prezzo);
    }

    /**
     * @return mixed
     */
    public function getImmagini()
    {
        return parent::getImmagini();
    }

    /**
     * @param string $immagini
     * @return void
     */
    public function setImmagini(string $immagini): void
    {
        parent::setImmagini($immagini);
    }

    /**
     * @return Ecommenti
     */
    public function getElencoCommenti(): Ecommenti
    {
        return parent::getElencoCommenti();
    }

    /**
     * @param Ecommenti $elenco_commenti
     * @return void
     */
    public function setElencoCommenti(Ecommenti $elenco_commenti): void
    {
        parent::setElencoCommenti($elenco_commenti);
    }

}