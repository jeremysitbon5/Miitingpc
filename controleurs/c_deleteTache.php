<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once '../model/class.pdomiiting.php';
$pdo =  PdoMiiting::getPdoMiiting();

 $id=$_GET['form'];
 
 $deleteTache=$pdo->deleteTache($id);
  header("Location:taches");
//  require '../vues/v_taches.php';