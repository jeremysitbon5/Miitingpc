<?php
require_once '../model/class.pdomiiting.php';
$pdo =  PdoMiiting::getPdoMiiting();

 $id=$_GET['form'];
 
 //requete pour avoir l'ensemble des caracteristique de l'id
 $tblParamTache=$pdo->getParamTache($id);

//en fonction de l'avancement la case sera coche
 if (isset($_POST['inputEditTache']))
 {
     
 if ($_POST['inputAvancement'] == 100 OR isset($_POST['inputFait']))
    {
      $fait = 1;
      $_POST['inputAvancement'] = 100;
    }
    else
    {
      $fait = 0;
    }
  
 //mise a jour de la tache dans la base de donnees
$updateTache=$pdo->updateTache($id,addslashes($_POST['inputNom']),$_POST['inputDate'],addslashes($_POST['inputDescription']),$_POST['inputAvancement'],$fait);    
//on rappelle cette fonction pour que les modifications soient bien en compte
$tblParamTache=$pdo->getParamTache($id); 
 }    
  require '../vues/v_editTache.php';
//  if (isset($_POST['inputEditTache']))
//  {
//    $nFamille = $_POST['inputFamille'];
//    $nNom = addslashes($_POST['inputNom']);
//    $nEcheance = $_POST['inputDate'];
//    $nDescription = addslashes($_POST['inputDescription']);
//    $nAvancement = $_POST['inputAvancement'];
//
//    //pour gerer le fait ou pas
//    if ($nAvancement == 100 OR isset($_POST['inputFait']))
//    {
//      $nFait = 1;
//      $nAvancement = 100;
//    }
//    else
//    {
//      $nFait = 0;
//    }
//
//    $updateTache = RequeteSQL::updateTache($cnx, $idTache, $nNom, $nEcheance, $nDescription, $nAvancement, $nFait, $nFamille);
//
//    header("Location: c_app.php?idF=$nFamille");
//  }
//
//  $laTache = RequeteSQL::getTache($cnx, $idTache);
//  //on instancie l'objet tache
//  $t1 = new Tache($laTache['libTache'],$laTache['echeance'],$laTache['description'],$laTache['avancement'],$laTache['fait'],$laTache['fk_idFamille'],$laTache['idTache']);
//
//  $laFamille = RequeteSQL::getFamilleDeLaTache($cnx, $idTache);
//  $tblFamille = RequeteSQL::getAllFamille($cnx);
//


?>
