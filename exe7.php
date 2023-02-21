<?php

echo "Ecrire un algorithme permettant de renvoyer la catégorie d’un enfant en fonction de son âge<br><br>";



$age = 11;


if(gettype($age) == "integer" || gettype($age) == "double")
{
    switch (true) {      
        case $age >= 12: echo "L’enfant qui a $age ans appartient à la catégorie « Cadet »<br>"; break;
        case $age >= 10: echo "L’enfant qui a $age ans appartient à la catégorie « Minime »<br>"; break;
        case $age >= 8: echo "L’enfant qui a $age ans appartient à la catégorie « Pupille »<br>"; break;
        case $age >= 6: echo "L’enfant qui a $age ans appartient à la catégorie « Poussin »<br>"; break;
        default: echo "hors catégorie<br>";
    }
}else{
echo "veuillez saisir un age numérique !<br>";
}

