<?php

/* 
 * page pour que des que l'utilisateur clique sur nous contacter d'un prestataire
 */
require_once '../model/class.pdomiiting.php';
$pdo =  PdoMiiting::getPdoMiiting();
session_start();

//id le conversation 
$idconv=$_POST['idconv'];
$idmessage=$_POST['idmessage'];

$prestataire=$pdo->getPrestaCaract($_SESSION['id']);

//requete qui calcule le nombre de messages recus
$nbrMessagesRecus=$pdo->getNbrMessagesRecusPresta($_SESSION['id']); 


//echo $nbrMessagesRecus[0]['count(*)'];

//requete qui permet d'avoir le nombre de messages envoyes
$nbrMessagesEnvoyes=$pdo->getNbrMessagesEnvoyesPresta($_SESSION['id']);

 
// requete pour avoir le message a partir de son id
// $message = $pdo->getMessage($idmessage);
$message = $pdo->getMessageEntreprise($idmessage);

if(isset($_POST['nouvelleconnexion']))
{

    $idpresta=$_POST['idpresta'];
    // TODO AJOUTER UN OBJET 
    $pdo->newConv($_SESSION['id'],$idpresta,$_SESSION['idevent'],$_POST['objet']);

    
     // on recupere l'idcov
     $idconv=$pdo->getidconv($_SESSION['id'],$idpresta,$_SESSION['idevent'],$_POST['objet']);
     
    //   requete qui insere le message a la base de donne
      try{
        $pdo->newMessage($_POST['message'],$idconv[0]['idconv'],$_SESSION['id'],$idpresta);
        } catch(Exception $e) {
            echo $e->getMessage();
        }

       //recuperer le mail du prestataire
       $mailpresta=$pdo->getMailPresta($idpresta);

       // envoie du mail
       $to      = $mailpresta[0]['mail'];
       $subject = 'Demande de prestation ';
       $message = 'Bonjour, vous venez de recevoir une demande de prestataion, allez sur miiting pour plus de detail';
       $headers = array(
           'From' => 'nepasrepondre@gmail.com',
           'Reply-To' => 'miiting@gmail.com',
           'X-Mailer' => 'PHP/' . phpversion()
       );

}

include '../vues/v_messagerie_send_mess_entreprise.php'; 