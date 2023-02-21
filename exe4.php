<?php

echo "Ecrire un algorithme permettant de savoir si une phrase est palindrome.<br>";

$phrase = "Engage le jeu que je le gagne";
$compresse = str_replace(" ","",$phrase);
$reversphrase = strtolower(strrev($compresse));

if (strtolower($compresse) == $reversphrase) {
    echo "« ".$phrase." »"." est un palindrome";
}else{
    echo "«".$phrase."»"." n'est pas un palindrome";
}