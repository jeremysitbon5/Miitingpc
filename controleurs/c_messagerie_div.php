<?php
/*
 * cette page est appeler a chaque fois qu'on sur la page messagerie, elle permet d'actualiser tous ce qui est dans la page v_messagerie toutes les 2secones
 * surtout actualiser toules conversations,pour savoir si y' une nouvelle conversation, un nouveau message non lu
 * @author Keren Hassan
 */
require_once '../model/class.pdomiiting.php';
$pdo =  PdoMiiting::getPdoMiiting();
// session_start();


        //fais ca pour avoir toutes les conversations
    //faire une requete pour avoir l'ensemble des noms des prestataires contactes en fonction de l'evenement et de l'utilisateur
    $tabprestaconv=$pdo->getprestaconv($_SESSION['id'], $_SESSION['idevent']);
    
   $listconv=array();
    // faire une boucle sur chaque conversation et remplir un tableau qui a le nom du prestataire + le prenom + le nombre de message + l'id de la conv
      for($i=0;$i<count($tabprestaconv);$i++)
      {
          $tabcompt=$pdo->getComptMess($tabprestaconv[$i]['idconv'],$_SESSION['id']);
    
             
                $listconv[$i]["idconv"]= $tabprestaconv[$i]['idconv'];
               $listconv[$i]["libellepresta"] =  $tabprestaconv[$i]['libellepresta'];
                 $listconv[$i]["nbmess"] = count($tabcompt);
              
      }
      
    ?>
   
           <!--faire une boucle pour avoir toutes les familles dans le menu-->
      <?php 
           for($i=0;$i<count($listconv);$i++)
           {
               ?>
           <a id="conv" onclick="getIdConv('<?php echo $listconv[$i]['idconv'] ;?>');" ><?php echo  $listconv[$i]['libellepresta']." ".
           $listconv[$i]['nbmess']."messages non lu"; ?></a> 
           <?php
           }
           ?>
     
      <?php
  
