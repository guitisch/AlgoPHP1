<?php
echo "A partir d’une fonction personnalisée et à partir d’un tableau de prénoms et de langue associée (tableau  contenant  clé  et  valeur),  dire  bonjour  aux  différentes  personnes  dans  leur  langue respective ( ➔«Salut»,  ➔«Hello»,  ➔«Hola»)<br><br>";

// tableau ➔Mickaël -> FRA, Virgile -> ESP, Marie-Claire -> ENG

$tableau1 = [
    "Mickaël" => "FRA",
    "Virgile" => "ESP",
    "Marie-Claire" => "ENG",
];
$tableau2 = [
    "Salut" => "français",
    "Hello" => "anglais",
     "Hola" => "espagnol",
];
ksort($tableau1);
foreach($tableau2 as $key => $value) {
    if($value == "français"){
        $n1 = $key;
    }elseif($value == "anglais"){
        $n2 = $key;
    }elseif($value == "espagnol"){
        $n3 = $key;
    } else{
        echo"rien";
    }
}
foreach($tableau1 as $key => $value) {
    if($value == "FRA"){
        echo "$key - $n1<br>";
    }elseif($value == "ESP"){
        echo "$key - $n3<br>";
    }elseif($value == "ENG"){
        echo "$key - $n2<br>";
    } else{
        echo"rien";
    }
}