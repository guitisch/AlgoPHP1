<?php

echo "Initialiser  un  tableau  de  x  marques  de  voitures.  Ecrire  un  algorithme permettant  de  parcourir  ce tableau et d’en afficher le contenu (une marque de voiture par ligne). Il est également demandé d’afficher le nombre de marques de voitures présentes dans le tableau.<br><br>";

$marques = ["Mercedes", "BMW", "Peugeot", "Renault"];
$nbMarques = count($marques);

echo "il y a $nbMarques marques de voitures dans le tableau:<br>";
for ($i= 0; $i <$nbMarques; $i++){
    echo $marques[$i]. "<br>";
}