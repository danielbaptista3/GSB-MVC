<?php

$job = $_SESSION['job'];
include("vues/v_sommaire.php");
$idVisiteur = $_SESSION['idVisiteur'];

switch ($_REQUEST['action']) {
    case 'validFrais': {
    $visiteur = $pdo->getVisiteur() ;
    $dernierMois = getSixDerMois();
    break;

    }
    
}

include("vues/v_validFrais.php");

