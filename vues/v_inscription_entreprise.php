<html>
    <head>
        <title>Miiting</title>
        <meta charset="UTF-8">
       <link href="fichier.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <script type="text/javascript" language="javascript" src="node_modules/jquery/dist/jquery.js"></script>
    </head>
    <body class="policeNewRoman">
<!-- on a deja un menu avec seulement le logo de cote -->
<nav class="navbar navbar-light bg-light navbar-expand-lg"> 
       <a href="index"><!-- Logo Image --><img alt="Logo_miiting" src="logo.png"  style="width: auto; height: 60px;" alt="" ></a>
       <!--service clientetel (numero de telephone )-->
       <p style="left: 84%; position: absolute; color: blue;">Service clientèle:  06.55.33.77.28 </p>  
</nav>
 
    <!--Petite image avec un beau texte dedans -->
<div> 
    <img src="images/img-bur.jpg" alt="bureau_img" style="height: 55%; margin-left: 27%;">

    <p style="position: absolute; bottom: 48%; left: 38%; font-size: 25px; ">Inscription gratuite sur Miiting </p>
    <p  style="position: absolute; bottom: 40%; left: 28%; font-size: 25px;">Remplissez ce formulaire et profitez rapidement des services..
    </p>
</div>
    <!-- on va faire des encadrers-->
<form action="inscription_entreprise" method="POST">
            <!--Code access -->
    <h3 style="margin-left: 27%;margin-top: 5%; margin-bottom: 1%;">Code d'accès: </h3>
    <div style=" background-color: #F5F5F5; height: 236px; margin-left: 27%; width: 700px; padding: 2%;" class="wrapper-tactac" >
            <!--Mail  ( mail de l'entreprise alors que l'autre est le mail de la personne a contacter ) -->
            <div class="wrapper-inscip">
                <div class="col-md-12 form-group">
                    <input name="mail" id="mail" type="text" placeholder="Entrer le mail de l'entreprise" class="form-control">
                </div>
                <!--Mot de passe --> 
                <div class="col-md-12 form-group">
                    <input name="mdp" id="mdp" type="text" placeholder="Entrer le mot de passe" class="form-control">
                </div>
            </div>
            <p></p>
            <p style=" background-color: #F0FFFF; padding: 3%;" >Votre identifiant et votre mot de passe pour accéder à votre menu personnel. L'identifiant doit 
                contenir au moins 5 caractères et le mot de passe au moins 6 (sensible aux minuscules et majuscules).</p>
    </div>

    <!-- sujet de l'entreprise : -->
    <h3 style="margin-left: 27%;margin-top: 5%; margin-bottom: 1%;">Votre entreprise: </h3>
    <div style=" background-color: #F5F5F5; height: 836px; margin-left: 27%; width: 700px; padding: 2%;">
    <!-- petit texte tac tac -->
    <p style=" background-color: #F0FFFF; padding: 3%;" >Donner les informations de votre entreprise nous permet de vus proposer les meilleurs clients... .</p>
                <!-- Libelle -->
                <div class="col-md-12 form-group">
                    <input name="libelle" id="libelle" type="text" placeholder="Entrer le nom de l'entreprise" class="form-control">
                </div>
                <!-- Ville -->
                <div class="col-md-12 form-group">
                    <input name="ville" id="ville" type="text" placeholder="Entrer la ville" class="form-control">
                </div>
                <!-- adresse -->
                <div class="col-md-12 form-group">
                    <input name="adr" id="adr" type="text" placeholder="Entrer l'adresse'" class="form-control">
                </div>
                <!-- SIRET -->
                <div class="col-md-12 form-group">
                    <input name="siret" id="siret" type="text" placeholder="Entrer SIRET" class="form-control">
                </div>  
                <!-- mage -->         
                <label for="fichier" style="margin: 1%;">Votre entreprise en image: </label>
                <input name="coco" style="margin: 2%;" type="file" class="form-control-file" id="coco">
                <!--Description -->
                    <p>Description:</p>
                    <textarea style="width: 59%;" name="description" id="description" rows="4"></textarea>

    <BR><BR>


            <P>Votre domaine: </p>
                <!--intitule de la prestation 
            ici il s'agit d'une liste de tous les types de prestataions, genre traiteur, photographe... en liste checkbox 
        enleve le php et mets une vrzi liste avc ds valeurs pr que tu puisse sbosser dessus -->
                <?php
                for($i=0;$i<4;$i++)
                {
                ?>
                <div class="form-check form-check-inline">

                    <input name="presta" class="form-check-input" type="radio" id="inlineCheckbox1" value="<?php echo $prestationIntitule[$i]['id'] ; ?>">
                    <label class="form-check-label" for="inlineCheckbox1"><?php echo $prestationIntitule[$i]['libelle'] ; ?></label>

                </div>
                <?php
                }

                for($i=5;$i<9;$i++)
                {
                ?>
                <div class="form-check form-check-inline">

                    <input name="presta" class="form-check-input" type="radio" id="inlineCheckbox1" value="<?php echo $prestationIntitule[$i]['id'] ; ?>">
                    <label class="form-check-label" for="inlineCheckbox1"><?php echo $prestationIntitule[$i]['libelle'] ; ?></label>

                </div>
                <?php
                }

                for($i=10;$i<14;$i++)
                {
                ?>
                <div class="form-check form-check-inline">

                    <input name="presta" class="form-check-input" type="radio" id="inlineCheckbox1" value="<?php echo $prestationIntitule[$i]['id'] ; ?>">
                    <label class="form-check-label" for="inlineCheckbox1"><?php echo $prestationIntitule[$i]['libelle'] ; ?></label>

                </div>
                <?php
                }
                ?>
                <!-- jusqu'a la la liste de toutes les prestataions -->
        </div>
                <!-- Coordonnées personnelles: -->
        <h3 style="margin-left: 27%;margin-top: 5%; margin-bottom: 1%;">Coordonnées personnelles: </h3>
        <div style=" background-color: #F5F5F5; height: 436px; margin-left: 27%; width: 700px; padding: 2%;">
        <!-- petit texte tac tac -->
    <p style=" background-color: #F0FFFF; padding: 3%;" >Donner les informations sur vous nous permet de vus proposer les meilleurs clients... .</p>
        <!--Nom/prenom -->
        <div class="col-md-12 form-group">
            <input name="cont_nom" id="cont_nom" type="text" placeholder="Personne à contacter" class="form-control">
        </div>
            <!--Mail -->
        <div class="col-md-12 form-group">
            <input name="cont_email" id="cont_email" type="text" placeholder="Mail" class="form-control">
        </div>
        <!--telephone-->
        <div class="col-md-12 form-group">
            <input name="cont_tel" id="cont_tel" type="text" placeholder="Téléphone" class="form-control">
        </div>
        <!--Contact (site de l'entreprise) -->
        <div class="col-md-12 form-group">
            <input name="contact" id="contact" type="text" placeholder="Entrer votre reference " class="form-control">
        </div>
    </div>

    <h3 style="margin-left: 27%;margin-top: 5%; margin-bottom: 1%;">Questions Fréquentes: </h3>
    <div style=" background-color: #F5F5F5; height: 436px; margin-left: 27%; width: 700px; padding: 2%;">
            <!-- petit texte tac tac -->
        <p style=" background-color: #F0FFFF; padding: 3%;" >Certaines questons qui reviennent tous le temps et seront afficher sur 
        votre page, ce qui permet un gain de temps... .</p>
            <!--1er question -->
            <div class="col-md-12 form-group">
                <input name="" id="" type="text" placeholder="Nombre de personnes maximal..." class="form-control">
        </div>
        <div class="col-md-12 form-group">
                <input name="" id="" type="text" placeholder="Nombre de personnes maximal..." class="form-control">
        </div>
        <div class="col-md-12 form-group">
                <input name="" id="" type="text" placeholder="Nombre de personnes maximal..." class="form-control">
        </div>
        <div class="col-md-12 form-group">
                <input name="" id="" type="text" placeholder="Nombre de personnes maximal..." class="form-control">
        </div>
    </div>
    <br>
    <button type="submit" style="margin-left: 35%; " name="enregistrer" id="enregistrer" class="btn btn-light">Enregistrer</button>
</form>
<!--Enfin on va mettre notre footer habituelle-->
</body>
  <?php
//    ici enelve le php et mets ton footer si tu veux 
  include '../vues/v_footer.html';
  ?>
</html>