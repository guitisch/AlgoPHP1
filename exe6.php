<?php

echo "Ecrire un algorithme permettant de calculer un montant de facture à régler à partir de la quantité<br> d’articles, son prix hors taxe et un taux de TVA (exprimé en décimal. Ex: 20 % -> 0.2)<br><br>";

// Prix unitaire de l’article: 9.99 €
// Quantité: 5
// Taux de TVA: 0.2
// Le montant de la facture à régler est de : 59.94 €

$prix = 9.99;
$quant = 5;
$TVA = 0.2;
$total = $quant * $prix * (1 + $TVA);

echo "Prix unitaire de l’article : $prix<br>Quantité : $quant<br>Taux de TVA : $TVA<br>Le montant de la facture à régler est de : $total";