<?php
/* 
 * Page qui permet d'afficher l'ensemble des prestations voulus par l'utilisateur
 * puis de leur permettre de chercher les prestataires 
 * une fois que le prestataire est reserve alors son logo s'affiche dans sa prestation
 */

require_once '../model/class.pdomiiting.php';
$pdo =  PdoMiiting::getPdoMiiting();
// session_start();
require '../model/functions.php';
    // Recuperation de l'id de l'evenement qui à ete envoye en parametre
$id=$_SESSION['idevent'];

   //pour avoir la liste des prestations demandes
$prestalibelle=$pdo->getdemande($id[0]);

$prestaContrat=$pdo->getprestacontrats($id);

include '../vues/v_evnement-prestataire.php'; 
// include '../vues/v_prestationdetail.php'; 
