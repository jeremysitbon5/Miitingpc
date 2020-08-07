<?php

/* 
 * quand on clique sur une discussion , afficher la conversation correspondante
 * donc l'ensemble des messages
 * avec une entete qui a le mail du presataire + l'ensemble des donnes de l'evenement genre le nombre d'invite, la ville, la date
 * @author Keren Hassan 
 */

require_once '../model/class.pdomiiting.php';
$pdo =  PdoMiiting::getPdoMiiting();
// session_start();

// recuperer l'id de la conversation
$idconv = $_POST['idconv'];


//requete qui recuperer les messages en fonction de la date 
$tabmess=$pdo->getmess($idconv);

//Mettre dans les messages non lu qd l'utilisateur est le receveur, mettre lu=0
$pdo->UpdateMessageLu($idconv,$_SESSION['id']);
//requte pour avoir le titre de l'evenement et le nom du prestataire
$libelleEvent=$pdo->getInfoConv($_SESSION['idevent']);
//Recuperer le nom de l'utilisateur
$nomreceptio = $pdo->getNomReceptioniste($idconv,$_SESSION['id']);

include '../vues/v_conversation.php';
?>
