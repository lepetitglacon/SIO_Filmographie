<?php
namespace App\Entity;
class Genre{
    private $id;
    private $libelle;

    /**
     * Genre constructor.
     * @param $id
     * @param $libelle
     */
    public function __construct($id, $libelle)
    {
        $this->id = $id;
        $this->libelle = $libelle;
    }


}