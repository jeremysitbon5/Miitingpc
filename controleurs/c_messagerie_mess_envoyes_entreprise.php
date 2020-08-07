<?php
/**
 * page qui va se charger quand on va cliquer sur messages envoyes
 */

require_once '../model/class.pdomiiting.php';
$pdo =  PdoMiiting::getPdoMiiting();
$prestataire=$pdo->getPrestaCaract($_SESSION['id']);

// requete qui calcule le nombre de messages recus
 $nbrMessagesRecus=$pdo->getNbrMessagesRecusPresta($_SESSION['id']); 


//requete qui permet d'avoir le nombre de messages envoyes
 $nbrMessagesEnvoyes=$pdo->getNbrMessagesEnvoyesPresta($_SESSION['id']);

 
setlocale(LC_TIME, "fr_FR", "French");
//requete qui va chercher les messages qu'il a envoyer 
$message=$pdo->getMessageEnvoyesPresta($_SESSION['id']);


include '../vues/v_messagerie_entreprise.php'; 