<?php

include("vues/v_sommaire.php");
$action = $_REQUEST['action'];
$idVisiteur = $_SESSION['idVisiteur'];
$lesFichesValides = $pdo->getFicheFraisValide();
switch ($action) {
    case 'suiviFrais': {
            include("vues/v_suiviFicheFrais.php");
            break;
        }
    case 'afficheSuivi': {
            $leMois = substr($_POST['lstVisiteur'], 0, 6);
            $idVisiteur = substr($_POST['lstVisiteur'], 7, strlen($_POST['lstVisiteur'] - 6));
            $lesMois = $pdo->getLesMoisDisponibles($idVisiteur);
            $moisASelectionner = $leMois;
            include("vues/v_suiviFicheFrais.php");
            $lesFraisHorsForfait = $pdo->getLesFraisHorsForfait($idVisiteur, $leMois);
            $lesFraisForfait = $pdo->getLesFraisForfait($idVisiteur, $leMois);
            $lesInfosFicheFrais = $pdo->getLesInfosFicheFrais($idVisiteur, $leMois);
            $numAnnee = substr($leMois, 0, 4);
            $numMois = substr($leMois, 4, 2);
            $libEtat = $lesInfosFicheFrais['libEtat'];
            $montantValide = $pdo->montantPourValidation($idVisiteur, $leMois);
            $nbJustificatifs = count($lesFraisHorsForfait);
            $dateModif = $lesInfosFicheFrais['dateModif'];
            $dateModif = dateAnglaisVersFrancais($dateModif);

            include("vues/v_validationFiche.php");
            break;
        }

    case 'rembourser': {
            $leMois = $_POST["mois"];
            $idVisiteur = $_POST["id"];
            $pdo->majEtatFicheFrais($idVisiteur, $leMois, "RB");
            include("vues/v_suiviFicheFrais.php");
            break;
        }
}
?>