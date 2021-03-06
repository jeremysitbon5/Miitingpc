<?php
	/**
	 * controller qui recupere ce qui est demandr dans la barre de recherche 
	 * et qui envois vers la bonne page selon le prestataire demander
	 */
	
	require_once '../model/class.pdomiiting.php';
    $pdo =  PdoMiiting::getPdoMiiting();



    //La récupération des variables se fait d'une façon classique (via $_GET ou $_POST, suivant la méthode d'envoi)
	 $prestation=$pdo->getPrestationIntitule();
	 $prestataire=$pdo->getPrestataire();

	 $data= array_merge($prestation, $prestataire);

	
    //$data = unserialize(file_get_contents('../towns.txt')); // Récupération de la liste complète des villes
	$dataLen = count($data);
	
	sort($data); // On trie les villes dans l'ordre alphabétique
	

//faire une requete avec tous les noms de prestataires 
	$results = array(); // Le tableau où seront stockés les résultats de la recherche
	
	// La boucle ci-dessous parcourt tout le tableau $data, jusqu'à un maximum de 10 résultats
	
	for ($i = 0 ; $i < $dataLen && count($results) < 10 ; $i++) {
	    if (stripos($data[$i]['libelle'], $_GET['s']) === 0) { // Si la valeur commence par les mêmes caractères que la recherche
	
	        array_push($results, $data[$i]['libelle']); // On ajoute alors le résultat à la liste à retourner
	
	    }
	}
	echo implode('|', $results); // Et on affiche les résultats séparés par une barre verticale |
    
    ?>
     