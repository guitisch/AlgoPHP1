<?php

echo "Nous souhaitons savoir si une personne est imposable en fonction de son âge et de son sexe.<br>Si la personne est une femme dont l’âge est compris entre 18 et 35 ans ou si c’est un homme de plus de 20 ans,<br> alors celle-ci est imposable (sinon ce n’est pas le cas, «non imposable»)<br><br>";

$genre = "F";
$age = "30";

if (strtolower($genre) == "f" || strtolower($genre) == "femme") {
    if ($age > 35) {
        echo "Age : $age<br> sexe : $genre<br> est non imposable";
    }elseif($age < 18){
        echo "Age : $age<br> sexe : $genre<br> est non imposable";
    } else {
        echo "Age : $age<br> sexe : $genre<br> est imposable";
    }
} elseif (strtolower($genre) == "h" || strtolower($genre) == "homme") {
    if ($age >= 20) {
        echo "Age : $age<br> sexe : $genre<br> est imposable";
    } else {
        echo "Age : $age<br> sexe : $genre<br> est non imposable";
    }
} else {
    echo "verifiée que vous avez bien rentrer les informations";
}
