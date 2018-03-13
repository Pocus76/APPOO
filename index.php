<?php
include "./classes/Voiture.php";

$voiture1 = new Voiture();

var_dump($voiture1);

$voiture1 -> couleur = "bleue";

var_dump($voiture1);

$voiture1 -> masse = 1000;
$voiture1 -> vitesse = 25;

if($ec = $voiture1 -> calculerEnergieCinetique())
{
    $ec = $ec . "Joules";
    Log::logWrite($ec);
}