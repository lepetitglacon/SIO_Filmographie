<?php
namespace App\Entity;
class Filmographie{
    private $id;
    private $libelle;
    private $films = [];

    /**
     * Filmographie constructor.
     * @param $id
     * @param $libelle
     */
    public function __construct($id, $libelle)
    {
        $this->id = $id;
        $this->libelle = $libelle;
    }

    public function ajouterFilm(Film $nouveauFilm) : string {
        if (in_array($nouveauFilm,$this->films)){
            return 'Le film existe déjà';
        }
        $this->films[] = $nouveauFilm;
        return 'Le film est ajouté';
    }

}