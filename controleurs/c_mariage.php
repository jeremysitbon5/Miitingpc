<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once '../model/class.pdomiiting.php';
$pdo =  PdoMiiting::getPdoMiiting();
$id=2;
//$prestataire=$pdo->getPrestaireMariage($id);
$prestataire=$pdo->get();
include '../vues/v_mariage.php';
