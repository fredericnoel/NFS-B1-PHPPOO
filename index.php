<?php

require_once './classes/Vehicule.php';
require_once './classes/Voiture.php';
require_once './classes/Coupe.php';

$toto = new Coupe("Peugeot", "504", "vert", [2000, 1000, 1000], 1200);
var_dump($toto);

$voiture1 = new Voiture("Lada", "Niva", "blanc", [2000, 1500, 800], 900);
$voiture2 = new Voiture("Nissan", "Cube", "violet", [2500, 1800, 1200], 1200);

echo $voiture1->getMarque();


$voiture1->vitesse = 25;
$voiture2->vitesse = 30;

//echo $voiture1->calculerEnergieCinetique() . "<br />";
//$voiture1->vitesse = 20;
//echo $voiture1->calculerEnergieCinetique();