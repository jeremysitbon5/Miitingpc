<?php

/* 
Retourne les details de l'article selon l'article selectionne grace a son id
 */

require_once '../model/class.pdomiiting.php';
$pdo =  PdoMiiting::getPdoMiiting();
$article=$pdo->getarticle($_GET['id']);

include '../vues/v_detailarticle.php';