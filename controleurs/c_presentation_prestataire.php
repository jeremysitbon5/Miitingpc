<?php

/**
 * page de presentation d'un prestataire
 */

require_once '../model/class.pdomiiting.php';
$pdo =  PdoMiiting::getPdoMiiting();
require '../model/functions.php';

// session_start();

$id = $_GET['idprestataire'];
//  $id = 1;
// requete qui permet d'avoir toutes les caracteristiques d'un prestataires specifiques
try {
    $prestataire = $pdo->getPrestaCaract($id);
} catch (Exception $e) {
    echo 'Exception reçue : ',  $e->getMessage(), "\n";
}
if (count($prestataire) == 0) {
    echo '<script type="text/javascript">window.alert("pas de prestataires pour ce type de prestation, veillez ressayer plus tard !");</script>';
    // include '../vues/v_prestataire.php'; 
} else {
    // faire une requete pour afficher des prestataires qui ne sont pas de la meme prestataoon que lui 
    $prestatations = $pdo->getPrestationIntitule();


    $idsuivant = $prestataire[0]["idprestation"] + 1;

    if ($prestataire[0]["idprestation"] == count($prestatations)) {
        $idsuivant = 1;
    }
    // on cherche les prestataires a afficher pour une autres prestations  
    $prestatairesSuivant = $pdo->getListePrestataire($idsuivant);

    while (count($prestatairesSuivant) == 0) {
        $idsuivant = $idsuivant + 1;

        if ($idsuivant == count($prestatations)) {
            $idsuivant = 1;
        }
        // on cherche les prestataires a afficher pour une autres prestations  
        $prestatairesSuivant = $pdo->getListePrestataire($idsuivant);
    }

    // qd il clique sur le bouton contacter verifier qu'il est coonceter pareille pour le devis
    //si oui alors lien vers la page de messagerie



    //requete pour avoir la liste des prestataires que l'utilisateur peut contacter 
    $prestataires = $pdo->getPrestataire();
    //sinn alors lien vers la page de connection

    //requete pour voir toutes les quetions repondus
    $questionsReponses = $pdo->getQuestions($id);

    include '../vues/v_presentation-prestataire.php';
}
