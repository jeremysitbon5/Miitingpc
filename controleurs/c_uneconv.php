<?php

/* 
 * une fois qu'il a selectionne sur une conversation on va afficher la conversation 
 * @author Keren Hassan
 */
require_once '../model/class.pdomiiting.php';
$pdo =  PdoMiiting::getPdoMiiting();


    //faire une requete pour avoir l'ensemble des noms des prestataires contactes en fonction de l'evenement et de l'utilisateur
    $tabprestaconv=$pdo->getprestaconv($_SESSION['id'], $_SESSION['idevent']);
    
    
//recuperer l'id de la conversation puis chercher tous les messages d cette conversation et les afficher du plus recent au plus ancien 

    
    
  include '../vues/v_uneconv.php'; 