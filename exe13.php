<?php

echo "Calculer la moyenne générale d'un élève dont les notes sont renseignées dans un tableau (pas de coefficient). Elle devra être affichée avec 2 décimales.<br>";

$notes = [10, 12, 8, 19, 3, 16, 11, 13, 9];
$nbNotes = count($notes);
$sommeNotes = array_sum($notes);
$moyenne = round($sommeNotes / $nbNotes, 2);
echo "Les notes obtenues par l’élève sont :";
$i = 0;
foreach($notes as $key){
    echo $key." ";
}

echo "<br>Sa moyenne générale est donc de : $moyenne";
