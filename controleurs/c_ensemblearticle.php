<?php

/* 
 * Nous donne l'ensemble des articles qui sont disponibles selons le theme selectionnes par l'utilisateur
 * on recupere le theme grace a l'url
 * chaque url est themes-id donc grace a ca on peut recuperer le parametre
 */

require_once '../model/class.pdomiiting.php';
$pdo =  PdoMiiting::getPdoMiiting();
//appelle de la requete qui me permet de selectionner tous les articles du theme selectionner ( selon l'id)
$article=$pdo->getarticleideesthemes($_GET['id']);
$titre=$pdo->gettitre($_GET['id']);
include '../vues/v_ensemblearticle.php';