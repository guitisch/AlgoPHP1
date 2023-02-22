<?php

Class Personne{
    public $_nom;
    public $_prenom;
    public $_dateN;
    public function __construct($nom, $prenom, $dateN){
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_dateN = $dateN;
        
    }
    public function getNom(){
        return $this->_nom;
    }
    public function getDateN(){
        return $this->_dateN;
    }
    public function getPrenom(){
        return $this->_prenom;
    }
    
}
$p1 = new Personne("DUPONT", "Michel", "1980-02-19") ;
$p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17") ;

date_default_timezone_set('Europe/Paris');

$today = date('Y-m-d');
$d1 = new DateTime($p1->getDateN());
$d2 = new DateTime($today);
$diff = $d2->diff($d1);

$age = $diff->y;
date_default_timezone_set('Europe/Paris');

$today = date('Y-m-d');
$d1 = new DateTime($p2->getDateN());
$d2 = new DateTime($today);
$diff = $d2->diff($d1);

$age2 = $diff->y;


echo $p1->getNom()." ".$p1->getPrenom()." a ".$age." ans";
echo"<br>";
echo $p2->getNom()." ".$p2->getPrenom()." a ".$age2." ans";