<?php

$value = dataGet("action");

switch($value){

    case 'voirAccueil':
        include('./views/v_accueil.php');
    break;
}

 ?>