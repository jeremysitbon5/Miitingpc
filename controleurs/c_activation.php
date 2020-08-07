<?php

/**
 * Page qui permet de recuperer le mail d'activation d'inscription 
 * donc on recuperer les donnes de l'id, on verfiie que c'est les bon id, puis on active le compte
 */
require_once '../model/class.pdomiiting.php';
$pdo =  PdoMiiting::getPdoMiiting();
include '../model/fct.inc';


// Récupération des variables nécessaires à l'activation
$mail = $_GET['email'];
$id = $_GET['id'];

//faire une requete pour verifier que l'id est bien le même avec le mail
$verifactivation = $pdo->verifActivation($mail, $id);

if (empty($verifactivation)) //la il est vide
{
    //verifions que l'utilisateur n'a pas deja activé son compte
    if ($verifactivation[0]['actif'] == 1) {
        echo '<script type="text/javascript">window.alert("Le compte à déjà été activé");</script>';
    } else //si non on modifie la base de donnee ( actif en 1) puis on renvoit dans la page d'accueil avec l'utilisateur 
    {
        echo '<script type="text/javascript">window.alert("Vous pouvez des a present vous connecter");</script>';
        $updateUtilisateur = $pdo->updateUtilisateur($id);
?>
        <!--<a href="http://miitine.cluster028.hosting.ovh.net/Miiting/">Allez sur le site</a> -->
<?php

    }
} else //ts est ok on peut finaliser son inscription
{
    echo '<script type="text/javascript">window.alert("Erreur, veuillez vous réinscrire");</script>';
}

?>