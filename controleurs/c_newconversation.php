<?php

/* 
 * Quand on ecrit un nouveau message pour la premiere fois
 * creation d'une nouvelle 
 */
require_once '../model/class.pdomiiting.php';
$pdo =  PdoMiiting::getPdoMiiting();
// session_start();

echo "nex";
if(isset($_POST['nouvelleconnexion']))
{

    $idpresta=$_POST['idpresta'];
    // TODO AJOUTER UN OBJET 
    $pdo->newConv($_SESSION['id'],$idpresta,$_SESSION['idevent'],$_POST['objet']);

    
     // on recupere l'idcov
     $idconv=$pdo->getidconv($_SESSION['id'],$idpresta,$_SESSION['idevent'],$_POST['objet']);


      //requete qui insere le message a la base de donne
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

       //mail($to, $subject, $message, $headers);
    
       header('Location: mamessagerie');


}