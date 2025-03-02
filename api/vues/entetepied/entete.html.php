<!DOCTYPE html>
<html lang="fr">

<head>
	<title>L'art public à Montréal</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Pacifico&display=swap" rel="stylesheet">

	
	<?php
		if ($page== ""){
			
			cssBase("");
			echo '<link rel="stylesheet" href="../css/home.css" type="text/css" media="screen">';
			echo '<link rel="stylesheet" href="../css/slider.css" type="text/css" media="screen">';
			echo '<script src="../js/slider.js"></script>';
			jsBase("");
		} 
		else if ($page== "artistes"){
			cssBase("artistes");
			echo '<link rel="stylesheet" href="../css/artistes.css" type="text/css" media="screen">';
			jsBase("artistes");
			echo '<script src="../js/liste.js"></script>';


		} 
		else if ($page== "artiste"){
			cssBase("artiste");
			echo '<link rel="stylesheet" href="../../css/artiste.css" type="text/css" media="screen">';
			echo '<link rel="stylesheet" href="../../css/slider.css" type="text/css" media="screen">';
			jsBase("artiste");
			echo '<script src="../../js/slider.js"></script>';
			echo '<script src="../../js/imgOeuvre.js"></script>';
			
		}  
		else if ($page== "oeuvres"){
			cssBase("oeuvres");
			echo '<link rel="stylesheet" href="../css/oeuvres.css" type="text/css" media="screen">';
			echo '<link rel="stylesheet" href="../css/liste.css" type="text/css" media="screen">';
			echo '<link rel="stylesheet" href="../css/sliderDate.css" type="text/css" media="screen">';
			jsBase("oeuvres");
			echo '<script src="../js/imgOeuvre.js"></script>';
			echo '<script src="../js/filtres.js"></script>';
			echo '<script src = "../js/choixAffichage.js"></script>';
			echo '<script src="../js/liste.js"></script>';
			echo '<script src="../js/sliderDate.js"></script>';
			
		} 
		else if ($page== "oeuvre"){
			cssBase("oeuvre");
			echo '<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">';
			echo '<link rel="stylesheet" href="../../css/oeuvres.css" type="text/css" media="screen">';
			echo '<script src="../../js/onglets.js"></script>';
			echo '<script src="../../js/imgOeuvre.js"></script>';
			echo '<script src="../../js/carteOeuvre.js"></script>';
			jsBase("oeuvre");
		} 
		else if ($page== "apropos"){
			cssBase("apropos");
			echo '<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">';
			echo '<script src="../js/onglets.js"></script>';
			echo '<script src="../js/accordeon.js"></script>';
			jsBase("apropos");
		} 
		else if ($page== "contact"){
			cssBase("contact");
			echo '<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">';
			echo '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">';
			echo '<script src="../js/onglets.js"></script>';
			jsBase("contact");
		} 
        else if ($page== "compte"){
			cssBase("compte");
			echo '<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">';
			echo '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">';
			echo '<link rel="stylesheet" href="../css/monCompte.css">';
			echo '<script src="../js/validationForm.js"></script>';
			jsBase("compte");
		} 
        else if ($page== "inscription"){
			cssBase("inscription");
			echo '<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">';
			echo '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">';
			// echo '<link rel="stylesheet" href="../css/inscription.css">';
			echo '<link rel="stylesheet" href="../../css/monCompte.css">';
			echo '<script src="../../js/validationFormIns.js"></script>';
			jsBase("inscription");
		} 
		
	
		function cssBase($page){
			$chemin = "";
			if($page == "artiste" || $page == "oeuvre" || $page == "inscription") {
				$chemin = "../";
			}
			?>
			<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
			<link rel="stylesheet" href="<?php echo $chemin;?>../css/reset.css" type="text/css" media="screen">
			<link rel="stylesheet" href="<?php echo $chemin;?>../css/var.css" type="text/css" media="screen">
			<link rel="stylesheet" href="<?php echo $chemin;?>../css/header.css" type="text/css" media="screen">
			<link rel="stylesheet" href="<?php echo $chemin;?>../css/footer.css" type="text/css" media="screen">
			<link rel="stylesheet" href="<?php echo $chemin;?>../css/text.css" type="text/css" media="screen">
			<link rel="stylesheet" href="<?php echo $chemin;?>../css/component.css" type="text/css" media="screen">
			<link rel="stylesheet" href="<?php echo $chemin;?>../css/flex.css" type="text/css" media="screen">
			<link rel="stylesheet" href="<?php echo $chemin;?>../css/main.css" type="text/css" media="screen">

			
			<?php
		}
		function jsBase($page){
			$chemin = "";
			if($page == "artiste" || $page == "oeuvre") {
				$chemin = "../";
			}
			?>
				<script src="<?php echo $chemin;?>../js/main.js"></script>
				<script src="<?php echo $chemin;?>../js/menu.js"></script>
			<?php
		}
	?>


	<!--<script src="../../js/plugins.js"></script>-->


</head>
<body>
	<header class="appbar">

		<a class="logo" href="/art-public-mtl/api/"><img src="<?php if($page == "artiste" || $page == "oeuvre" || $page == "inscription"){echo "../";}?>../img/icons/logoAP.png" alt="Logo Art public Montréal"></a>
		
		<nav class="menu">
			
			<a class="lien" href="/art-public-mtl/api/oeuvre">
			<i class="material-icons">photo</i>
			<!-- <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/>
			<path d="M21 19V5c0-1.1-.9-2-2-2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2zM8.5 13.5l2.5 3.01L14.5 12l4.5 6H5l3.5-4.5z"/></svg> -->
				<p>Oeuvres</p>
			</a>
			<a class="lien" href="/art-public-mtl/api/artiste">
			<i class="material-icons">palette</i>
			<!-- <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 24 24"><path d="M12 3c-4.97 0-9 4.03-9 9s4.03 9 9 9c.83 0 1.5-.67 1.5-1.5 0-.39-.15-.74-.39-1.01-.23-.26-.38-.61-.38-.99 0-.83.67-1.5 1.5-1.5H16c2.76 0 5-2.24 5-5 0-4.42-4.03-8-9-8zm-5.5 9c-.83 0-1.5-.67-1.5-1.5S5.67 9 6.5 9 8 9.67 8 10.5 7.33 12 6.5 12zm3-4C8.67 8 8 7.33 8 6.5S8.67 5 9.5 5s1.5.67 1.5 1.5S10.33 8 9.5 8zm5 0c-.83 0-1.5-.67-1.5-1.5S13.67 5 14.5 5s1.5.67 1.5 1.5S15.33 8 14.5 8zm3 4c-.83 0-1.5-.67-1.5-1.5S16.67 9 17.5 9s1.5.67 1.5 1.5-.67 1.5-1.5 1.5z"/><path d="M0 0h24v24H0z" fill="none"/></svg> -->
				<p>Artistes</p>
			</a>
			<a class="lien" href="#">
			<i class="material-icons">directions</i>
			<!-- <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 24 24"> -->
			<!-- <path d="M21.71 11.29l-9-9c-.39-.39-1.02-.39-1.41 0l-9 9c-.39.39-.39 1.02 0 1.41l9 9c.39.39 1.02.39 1.41 0l9-9c.39-.38.39-1.01 0-1.41zM14 14.5V12h-4v3H8v-4c0-.55.45-1 1-1h5V7.5l3.5 3.5-3.5 3.5z"/><path d="M0 0h24v24H0z" fill="none"/></svg> -->
				<p>Parcours</p>
			</a>
			<a class="lien" href="/art-public-mtl/api/apropos">
			<i class="material-icons">info</i>
			<!-- <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/> -->
			<!-- <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-6h2v6zm0-8h-2V7h2v2z"/></svg> -->
				<p>À propos</p>
			</a>
			<a class="lien" href="/art-public-mtl/api/contact">
			<i class="material-icons">mail</i>
			<!-- <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 24 24"><path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/><path d="M0 0h24v24H0z" fill="none"/></svg> -->
				<p>Contact</p>
			</a>
			<a class="lien" href="/art-public-mtl/api/compte">
			<i class="material-icons">person</i>
			<!-- <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 24 24"><path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/><path d="M0 0h24v24H0z" fill="none"/></svg>						 -->
				<p>Compte</p>
			</a>
		</nav>	
		<div class="icons">
			
			<a class="search" href="#">
				<i class="material-icons">search</i>
				<!-- <img src="<?php //if($page == "artiste" || $page == "oeuvre" || $page == "inscription"){echo "../";}?>../img/icons/search_40px.svg" alt="Icone de recherche"> -->
			</a>
			<a class="langue hidden" href="#">EN</a>
			<a class="menuCubes" href="#">
				<img src="<?php if($page == "artiste" || $page == "oeuvre" || $page == "inscription"){echo "../";}?>../img/icons/menu.svg" alt="Icone d'ouverture du menu">
				</a>
			<a class="fermerMenu hidden" href="#">
				<!-- <img src="<?php //if($page == "artiste" || $page == "oeuvre" || $page == "inscription"){echo "../";}?>../img/icons/close.svg" alt="Icone de fermeture du menu"> -->
				<i class="material-icons">close</i></a>
			<a class="compte" href="/art-public-mtl/api/compte">
			<i class="material-icons">person</i>
			<!-- <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"><path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/><path d="M0 0h24v24H0z" fill="none"/></svg>						 -->
			</a>
		</div>
	</header>
	<main>
