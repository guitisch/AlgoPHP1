<?php

echo "A partir d’un montant à payer et d’une somme versée pour régler un achat, écrire l’algorithme qui affiche à un utilisateur un rendu de monnaie en nombre de billets de 10 € et 5 €, de pièces de 2 € et 1€.<br><br>";
// Montant à payer : 152 €
// Montant versé : 200 €
// Reste à payer : 48 €

$montantDu = 133;
$montantDonne = 200;
$reste = 0 ; 
$nb10 = 0 ;
$nb5 = 0 ;
$nb2 = 0 ;
$nb1 = 0 ; 

$reste =  $montantDonne - $montantDu; 

// var_dump($reste);

// tant que reste est superieur à 10 , je rends des billets de 10 
// a chaque fois que je rends un billet , d'incrémente mon nb de billet de 10 
// quand je ne peux plus rendre de billet de 10 

// Si je peux rendre un billet de 5, j'incrment mon nb dde billet de 5 
// si reste est superieur à 2 
// tant que je peux une piece de 2 , d'incrémente mon nb de piece 2 

// le reste restant est autoatiquement la valeur de nombres de pieces de 1 à rendre

while ($reste > 1) {
    if($reste >= 10){
        $reste -= 10;
        $nb10++;
    }elseif($reste >= 5){
        $reste -= 5;
        $nb5++;
    }elseif($reste >= 2){
        $reste -= 2;
        $nb2++;
    }
}
echo "Rendue de monnaie :<br>$nb10 billets de 10 € - $nb5 billet de 5 € - $nb2 pièce de 2 € - $reste pièce de 1 €";




