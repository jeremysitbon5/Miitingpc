<?php
include '../vues/v_entete.php';
?>
<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="styles/css_elie/reset.css">
	<link rel="stylesheet" type="text/css" href="styles/css_elie/evenementtest.css">
	<link href="fichier.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="styles/css_elie/new-event_popup.css">
	<!-- <link href="fichier.css" rel="stylesheet" type="text/css"/> -->
	<link href="styles/style.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script type="text/javascript" language="javascript" src="node_modules/jquery/dist/jquery.js"></script>

<body>
	<div class="background" style="background-image: url('images_miiting/images_boutique_marie/backgroundd.png');">
	</div>
	<div class="test2">
		<h1 class="title1">Mariage David</h1>
	</div>
	<hr>
	<div class="sous-menu">
		<ul>
			<a href="event-2">
			<li>Mon évênement</li>
			</a>
			<a href="mesevents">
				<li>Mes évênements</li>
			</a>
			<a href="mamessagerie">
				<li>Messagerie</li>
			</a>
			<a href="https://www.miiting.fr/login">
			<li>Plan de table</li>
		    </a>
			<a href="prestaevent">
				<li>Prestataires</li>
			</a>
			<li>Tâches</li>
		</ul>
		<hr>
	</div>

	<div class="container">
		<div class="bloc1">
			<h2>Informations:</h2>
			<h3><span>Date:</span><?php echo " " . utf8_encode(strftime("%A %d %B %G", strtotime($img[0]['date']))); ?></h3>
			<h3><span>Lieu:</span><?php echo " " . ucwords($img[0]['ville']); ?></h3>
		</div>

		<div class="bloc2">
			<h2>Participants:</h2>
			<h3><?php echo $img[0]['nbinvite']; ?></h3>
		</div>
		<div class="bloc3">
			<h2>A lieu dans:</h2>
			<div class="timer">
				<div class="months">
					<p>mois</p>
					<h5><?php echo $difference->m; ?></h5>
				</div>
				<div class="days">
					<p>jours</p>
					<h5><?php echo $difference->d; ?></h5>

				</div>
			</div>
		</div>
	</div>
	<hr class="transition">
	<center>
	<div class="container2">
		<h2>Mes prestataires</h2>


		<div class="line1">
			<?php
			$nb = count($prestataireslibelle);
			if ($nb >= 3) {

				if ($nb = 3) {
					for ($i = 0; $i < 3; $i++) {
			?>
						<img id="traiteur" src="images/mariagee.jpeg">
						<div class="text<?php echo $i; ?>"><?php echo $prestataireslibelle[$i]['libelle']; ?>
						</div>
					<?php
					}
				} else {

					for ($i = 0; $i < 4; $i++) {
					?>
						<img id="traiteur" src="images/mariagee.jpeg">
						<div class="text<?php echo $i; ?>"><?php echo $prestataireslibelle[$i]['libelle']; ?>
						</div>
					<?php
					}
				}
			}
			if (count($prestalibelle) > 4) {

				for ($i = 0; $i < 4; $i++) {
					?>
					<img id="traiteur" src="<?php echo $prestalibelle[$i]['logo'] ?>">
					<div class="text<?php echo $i; ?>"><?php //echo $prestalibelle[$i]['prestalibelle'] ; 
														?>
					</div>
				<?php
				}
				?>

			<?php
			} else {
			?>
				<img id="traiteur" src="images_miiting/prestataires_logo/traiteur.png">
				<div class="text0"><?php //echo $prestataireslibelle[1]['libelle'] ; 
									?>
				</div>
				<img src="images_miiting/prestataires_logo/photographe.png">
				<div class="text1">
				</div>
				<img src="images_miiting/prestataires_logo/salle.png">
				<div class="text2">
				</div>
				<img src="images_miiting/prestataires_logo/wedding_planner.png">
				<div class="text6">
				</div>
		</div>
		<div class="line2">
			<img src="images_miiting/prestataires_logo/bijoux.png">
			<div class="text3">
			</div>
			<img src="images_miiting/prestataires_logo/maquillage.png">
			<div class="text4">
			</div>
			<img src="images_miiting/images_boutique_marie/voirplus.png">
			<div class="text5">Voir plus
			</div>
		</div>
	<?php
			}


	?>
	</center>
	<!-- <img id="traiteur" src="images/mariagee.jpeg">
			<div class="text"><?php //echo $prestataireslibelle[1]['libelle'] ; 
								?>
			</div>	
				<img src="images_miiting/images_boutique_marie/photographe.png">
			<div class="text2">Photographe
			</div>
				<img src="images_miiting/images_boutique_marie/salle.png">
				<div class="text3">Salle
				</div>
				<img src="images_miiting/images_boutique_marie/weddingplanner.png">
				<div class="text7">Wedding planner
				</div>
		</div>
		<div class="line2">
			<img src="images_miiting/images_boutique_marie/dj.png">
			<div class="text4">DJ		
			</div>
			<img src="images_miiting/images_boutique_marie/vetement.png">
			<div class="text5">Vetements		
			</div>
			<img src="images_miiting/images_boutique_marie/voirplus.png">
			<div class="text6">Voir plus		
			</div>
		</div> -->
	</div>

	<div class="container3">
		<h2>To do list</h2>
		<div class="content">
			<div class="left">
				<input type="text" placeholder="Créer une nouvelle tâche" name="">
				<img id="plus" src="images_miiting/images_boutique_marie/plus.png">

				<a href="index">
					<?php
					for ($i = 0; $i < 6; $i++) {
					?>
						<div class="task">
							<div class="left2">

								<?php
								if ($tblTaches[$i]['fait'] == 0) {
								?> <a href="edittaches-<?php echo $tblTaches[$i]['id']; ?>">
										<img src="images_miiting/images_boutique_marie/notdone.png"><?php
																								} else {
																									?><a href="edittaches-<?php echo $tblTaches[$i]['id']; ?>">
											<img src="images_miiting/images_boutique_marie/done.png"><?php
																									}
																										?>
							</div>
							<div class="right2">
								<h3><?php echo $tblTaches[$i]['libelle']; ?>
								</h3>
								<p><span>Avancement:</span> <?php echo $tblTaches[$i]['avancement']; ?></p>
								<p><span>Description:</span> <?php echo $tblTaches[$i]['description'];  ?></p>
								<p><span>Echeance:</span> <?php echo utf8_encode(strftime("%A %d %B %G", strtotime($tblTaches[$i]['echeance']))); ?></p>
							</div>
						</div>
				</a>
			<?php
					}
			?>

			</div>
			<div class="right">
				<h3>Mon avancée</h3>
				<img id="illu" src="images_miiting/images_boutique_marie/illustration.png">
				<h4><?php echo $nbTacheFaite[0]['count(*)']; ?><span>/<?php echo  $nbTache[0]['count(*)']; ?></span></h4>

				<div class="pubs">
					<img src="images_miiting/images_boutique_marie/pub2.png">
					<img src="images_miiting/images_boutique_marie/pub1.png">
				</div>
			</div>
		</div>
	</div>
</body>

</html>


<!--mmodal avec le creer evenement -->


<!-- The Modal -->
<div id="myModal" class="modal">

	<!-- Modal content -->
	<div class="modal-content">
		<span class="close">&times;</span>

		<title>Editer son évênement</title>
		</head>

		<body>
			<div class="containerpop">
				<img id="cross" src="images_miiting/images_acces_entreprise/cross.png">
				<h1>Editer l'évênement</h1>
				<hr>
				<div class="backgroundpop">
					<img id="photo">
				</div>
				<div class="content1pop">
					Titre de l'évênement:<input type="text" id="nomevent" name="nomevent">
				</div>
				<h2>Informations</h2>
				<div class="content2pop">
					Date: <input type="Date" name="date" id="date">
					Lieu: <input type="text" name="ville" id="ville">
					Heure: <input type="hours" name="">
				</div>
				<h2>Prestataires</h2>
				<div class="content3pop">
					<div class="line1pop">
						<img src="images_miiting/images_acces_entreprise/banquet.png">
						<h3>Traiteur</h3>
						<input type="checkbox" id="traiteur" name="traiteur">
						<img src="images_miiting/images_acces_entreprise/dress.png">
						<h3>Robe</h3>
						<input type="checkbox" id="robe" name="robe">
						<img src="images_miiting/images_acces_entreprise/car.png">
						<h3>Location voiture</h3>
						<input type="checkbox" name="voit" id="voit">
						<img src="images_miiting/images_acces_entreprise/photo2.pn">
						<h3>Photographe</h3>
						<input type="checkbox" name="photographe" id="photographe">
					</div>

					<div class="line2pop">
						<img src="images_miiting/images_acces_entreprise/decoration.png">
						<h3>Décoration</h3>
						<input type="checkbox" name="decorateur" id="decorateur">
						<img src="images_miiting/images_acces_entreprise/gift.png">
						<h3>cadeaux</h3>
						<input type="checkbox" name="cadeaux" id="cadeaux">
						<img src="images_miiting/images_acces_entreprise/music.png">
						<h3>DJ</h3>
						<input type="checkbox" name="dj" id="dj">
						<img src="images_miiting/images_acces_entreprise/card.png">
						<h3>Faire-part</h3>
						<input type="checkbox" name="faire_part" id="faire_part">
					</div>
					<div class="line3pop">
						<img src="images_miiting/images_acces_entreprise/animation.png">
						<h3>Animation</h3>
						<input type="checkbox" name="animation" id="animation">
						<img src="images_miiting/images_acces_entreprise/reception.png">
						<h3>Reception</h3>
						<input type="checkbox" name="reception" id="reception">
						<img src="images_miiting/images_acces_entreprise/planner.png">
						<h3>Wedding Planner</h3>
						<input type="checkbox" name="wedding_planner" id="wedding_planner">
					</div>
					<!-- <a href="#">Enregistrer</a> -->
					<button type="submit" style="margin-top: 3%;" name="enregistrer" id="enregistrer" class="btn btn-light">Enregistrer</button>
				</div>
			</div>
	</div>
</div>
</div>
<script type="text/javascript" src='js/add_conversation.js'></script>
<?php
  include '../vues/footerelie.php';
// include '../vues/v_footer.html';
?>