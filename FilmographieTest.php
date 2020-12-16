<?php

require_once 'vendor/autoload.php';

use App\Entity\Film;
use App\Entity\Filmographie;
use App\Entity\Genre;
use Faker\Factory;

$faker = Factory::create("fr_FR");

$genre1 = new Genre(1,"action");
$genre2 = new Genre(2,"horreur");

$filmogrpahie1 = new Filmographie(1,"1ère filmographie");

$film1 = new Film(1,"titre","description",180,"03/01/2001",$genre1);
$film2 = new Film(2,"titre","description",180,"03/01/2001",$genre2);

echo $filmogrpahie1->ajouterFilm($film1)."\n";
echo $filmogrpahie1->ajouterFilm($film1)."\n";
echo $filmogrpahie1->ajouterFilm($film2);