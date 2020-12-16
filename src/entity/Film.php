<?php
namespace App\Entity;

class Film{
    private $id;
    private $titre;
    private $description;
    private $duree;
    private $dateSortie;
    private $commentaire = [];
    private $genre;

    /**
     * Film constructor.
     * @param $id
     * @param $titre
     * @param $description
     * @param $duree
     * @param $dateSortie
     * @param $genre
     */
    public function __construct($id, $titre, $description, $duree, $dateSortie, $genre)
    {
        $this->id = $id;
        $this->titre = $titre;
        $this->description = $description;
        $this->duree = $duree;
        $this->dateSortie = $dateSortie;
        $this->genre = $genre;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    public function ajouterCommentaire(Commentaire $com) : string{
        $this->commentaire[] = $com;
        return "Commentaire ajouté";
    }


    public function estLeMemeFilmQue(Film $film) : bool
    {
        return $this === $film;
    }
}