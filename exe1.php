<h1>Exercice 1</h1>
Soit la phrase « Notre formation DL commence aujourd'hui ».
Ecrire un algorithme permettant de compter le nombre de caractères contenus dans cette phrase
(espaces inclus).
<br>


<?php
$exer = "Notre formation DL commence aujourd'hui";

$nbCaractere = strlen($exer);
echo "La phrase $exer contient $nbCaractere caracteres.<br><br>";
