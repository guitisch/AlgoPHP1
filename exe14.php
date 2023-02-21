<?php
 date_default_timezone_set('Europe/Paris');

 $today = date('Y-m-d');
 $d1 = new DateTime('2000-10-28');
 $d2 = new DateTime($today);
 $diff = $d2->diff($d1);
 
 $age = $diff->y;
 $age2 = $diff->m;
 $age3 = $diff->d;
 
 echo "Age de la personne: $age ans, $age2 mois, $age3 jours";