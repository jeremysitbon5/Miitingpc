<?php

require_once '../model/class.pdomiiting.php';
$pdo =  PdoMiiting::getPdoMiiting();
// session_start();

 if (!isset($_SESSION['nom'])) // si il est pas connecter
{
        echo '<script type="text/javascript">window.alert("Pour accéder à votre evenement, veuillez vous connecter..");</script>'; 
        include '../vues/v_connexion.php';
}
else
{

// ce qu'il faudra faire quand y'a plusieurs evenements c'est d'afficher les differentes evenements, donc rajouter un onglet at menu "mes events" et 
// l'utilisateur choisira l'evenement qu'il voudra gerer et la 
// en fonction de ce qu'il va selectionner je choisirais l'id de l'event
// mais pour l'instatnt on fais comme ci que y'a qu'un event

 //$id=$pdo->getIdEvent($_SESSION['id']);

// $img=$pdo->getimg($id[0]); // permet d'avoir l'image de l'evenement et sa date et le titre
              

          if(!isset($_SESSION['idevent']))
          {
            // une include speciale pour le non evenement 
            include '../vues/v_noEvent.php';
          }
          else
          {
                  $img=$pdo->getimg($_SESSION['idevent']);

                  // faut refaire le compte a rebours
                  setlocale (LC_TIME, 'fr_FR.utf8','fra'); 
                  $datetime1=  new DateTime(date("j-m-Y"));
                  $datetime2 = new DateTime($img[0]['date']);

                  $difference = $datetime1->diff($datetime2);
                                                      
                  // recuperer la date de l'evenement
                // $annee=  substr($img[0]['date'], 0, 4);
                // $mois= substr($img[0]['date'], 5, 2);
                // $jour= substr($img[0]['date'], 8, 2);

                // // fais le decompte de l'evenement
                // $event = mktime(8, 0, 0, $mois, $jour, $annee);

                //   // si il c'est trompe de date on rajoute un an   pour ne pas que ca soit en arriere ou alors on laisse comme ca ??? avec les moins pour garder en historique
                // if ($event < time())
                // $event = mktime(8, 0, 0, 12, 25, ++$annee);

                // $tps_restant = $event - time(); 


                // $i_restantes = $tps_restant / 60;
                // $H_restantes = $i_restantes / 60;
                // $d_restants = $H_restantes / 24;


                // $s_restantes = floor($tps_restant % 60); // Secondes restantes
                // $i_restantes = floor($i_restantes % 60); // Minutes restantes
                // $H_restantes = floor($H_restantes % 24); // Heures restantes
                // $d_restants = floor($d_restants); // Jours restants


                //pour avoir la liste des prestations demandes
                //  $prestalibelle=$pdo->getdemande($id[0]);
                $prestalibelle=$pdo->getdemande($_SESSION['idevent']);

              // on cherche aussi les prestataire avec qui il a des contrats
              $prestataireslibelle=$pdo->getprestacontrats($_SESSION['idevent']);
                // avoir quelque taches
                // ON RECUPERER TOUTES LES FAMILLES
                $tblFamille=$pdo->getAllFamille();
                //on recupere toutes les taches
                $tblTaches=$pdo->getAllTaches($_SESSION['idevent']);
       
                $nbTache=$pdo->getNbTaches($_SESSION['idevent']);
                
                $nbTacheFaite=$pdo->getNbTachesFaites($_SESSION['idevent']);
               
                
           //     pour le carousel des prestataires
                $carspreta=$pdo->getPrestataire();


                // include '../vues/v_eventmenu.php';
                // include '../vues/v_event.php'; 
                include '../vues/evenementtest.php'; 
          }
              
    }

