<?php
/* 
 * Page ou le prestataires va pouvoir modifier sa description, sa photo...
 * @author Keren Hassan 
 */

require_once '../model/class.pdomiiting.php';
$pdo =  PdoMiiting::getPdoMiiting();
session_start();

//On va faire une requete pour avoir la liste des intitules de prestations proposes : 
$prestationIntitule=$pdo->getPrestationIntitule();


//Quand on modifie qq chose, mettre a jour la table prestataire
if (isset($_POST['modifier']))
{

$titic=$pdo->updateCaract($_SESSION['id'],$_POST['mail'],$_POST['libelle'],$_POST['tarifs'],$_POST['ville'],$_POST['adr'],$_POST['siret'],nl2br($_POST['description']),$_POST['presta'],$_POST['cont_nom'],$_POST['cont_email'],$_POST['cont_tel'],$_POST['contact']);

//TODO modif special fichier
}

//Requete qui permet d'avoir l'ensemble des trucs du prestataires en fonction de sin id
$prestaCaracteristique=$pdo->getPrestaCaract($_SESSION['id']);


//On va faire une requete pour avoir la liste des intitules de prestations proposes : 
$prestationIntitule=$pdo->getPrestationIntitule();

 // requetes pour avoir les questions frequentes
 $questions = $pdo->getQuestionsIntitule();

    //requete pour voir toutes les quetions repondus
$questionsReponses = $pdo->getQuestions($_SESSION['id']);

$res0=$pdo-> getReponsesByIdQuest(0, $_SESSION['id']);
$res1=$pdo-> getReponsesByIdQuest(1, $_SESSION['id']);
$res2=$pdo-> getReponsesByIdQuest(2, $_SESSION['id']);
$res3=$pdo-> getReponsesByIdQuest(3, $_SESSION['id']);


//verifier que l'ancien mot de passe est bien egale a l'ancian mot de passe qd il doit modifier le mot de passe
// include '../vues/v_vitrine.php';

include '../vues/v_vitrine_entreprise.php';

?>