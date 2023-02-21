<?php


echo "Ecrire un algorithme qui renvoie la table de multiplication d’un nombre passé en paramètre sous la forme<br> <br>";


echo"avec for<br><br>";
$u = 0;
$nb = 8;
for ($u= 0; $u <= 20; $u++){
    $result = $nb * $u;
    echo $nb." x ".$u." = ".$result."<br>";
}
echo"<br><br><br>";
$i = 0;
echo "avec while<br><br>";
while($i <= 20) {
    $res = $nb * $i;
    echo $nb." x ".$i." = ".$res." <br>";
    $i++;
}