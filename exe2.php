<?php


$exer = "Notre formation DL commence aujourd'hui";

$nbCaractere = strlen($exer);

echo "<h2>EXE 2</h2><br>";
echo "A partir de la phrase de l’exercice 1, écrire l’instruction permettant de compter le nombre de mots
contenus dans celle-ci.<br>";
$nbMots = str_word_count($exer);
echo "La phrase $exer contient $nbMots mots.<br><br>";