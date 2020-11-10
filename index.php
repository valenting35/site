<?php 

include_once("./models/functions.php");

$request = dataGet('page');

switch($request){
    case 'accueil':
        include("./controllers/c_accueil.php");
    break;
}

?>