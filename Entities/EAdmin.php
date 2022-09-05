<?php

class EAdmin extends Eusers
{
    /** si intendono i privilegi di amministratore */
    private $privilegi;

    /**
     * @param $privilegi
     */
    public function __construct(int $id_utenteC,string $nomeC,string $cognomeC,string $emailC,string $passwordC,string $statoC ,Ecarrello $carrello, Ecommenti $commenti,$privilegi, )
    {
        parent::__construct($id_utenteC,$nomeC,$cognomeC,$emailC,$passwordC, $statoC , $carrello, $commenti);
        $this->privilegi = $privilegi;
    }

    /**
     * @return mixed
     */
    public function getPrivilegi()
    {
        return $this->privilegi;
    }

    /**
     * @param mixed $privilegi
     */
    public function setPrivilegi($privilegi): void
    {
        $this->privilegi = $privilegi;
    }



}