<?php
/**
 * Class Vue
 * Modèle de classe Vue. Dupliquer et modifier pour votre usage.
 * 
 * @author Jonathan Martel
 * @version 1.1
 * @update 2013-12-11
 * @update 2016-01-22 : Adaptation du code aux standards de codage du département de TIM
 * @license MIT
 * @license http://opensource.org/licenses/MIT
 * 
 */


class Vue {

/**
	 * Affiche le head html
	 * @access public
	 * @return void
	 */
	public function afficheHead() {
		 ?>
		<!DOCTYPE html>
		<html lang="fr">
		
		<head>
		    <title>L'art public à Montréal</title>
		    <meta charset="utf-8">
		    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		    <meta name="description" content="">
			<meta name="viewport" content="width=device-width">
			<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Pacifico&display=swap" rel="stylesheet">

			<link rel="stylesheet" href="../css/reset.css" type="text/css" media="screen">
			<link rel="stylesheet" href="../css/var.css" type="text/css" media="screen">
			<link rel="stylesheet" href="../css/header.css" type="text/css" media="screen">
			<link rel="stylesheet" href="../css/footer.css" type="text/css" media="screen">
			<link rel="stylesheet" href="../css/text.css" type="text/css" media="screen">
			<link rel="stylesheet" href="../css/component.css" type="text/css" media="screen">
			<link rel="stylesheet" href="../css/flex.css" type="text/css" media="screen">
		    <link rel="stylesheet" href="../css/main.css" type="text/css" media="screen">
		    <!--<script src="../../js/plugins.js"></script>-->
		    <script src="../js/main.js"></script>
		    <script src="../js/menu.js"></script>
		    <script src="../js/slider.js"></script>

		</head>
		<?php
	}

	/**
	 * Affiche entetes
	 * @access public
	 * @return void
	 */
	public function afficheEntete() {
		?>
	<body>
	        <header class="appbar">

	            <a class="logo" href="/art-public-mtl/api/"><img src="../img/icons/logoAP.png" alt="Logo Art public Montréal"></a>
				
				<nav class="menu">
					<a class="lien" href="#">
					<svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/>
					<path d="M21 19V5c0-1.1-.9-2-2-2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2zM8.5 13.5l2.5 3.01L14.5 12l4.5 6H5l3.5-4.5z"/></svg>
						<p>Oeuvres</p>
					</a>
					<a class="lien" href="#">
					<svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24"><path d="M12 3c-4.97 0-9 4.03-9 9s4.03 9 9 9c.83 0 1.5-.67 1.5-1.5 0-.39-.15-.74-.39-1.01-.23-.26-.38-.61-.38-.99 0-.83.67-1.5 1.5-1.5H16c2.76 0 5-2.24 5-5 0-4.42-4.03-8-9-8zm-5.5 9c-.83 0-1.5-.67-1.5-1.5S5.67 9 6.5 9 8 9.67 8 10.5 7.33 12 6.5 12zm3-4C8.67 8 8 7.33 8 6.5S8.67 5 9.5 5s1.5.67 1.5 1.5S10.33 8 9.5 8zm5 0c-.83 0-1.5-.67-1.5-1.5S13.67 5 14.5 5s1.5.67 1.5 1.5S15.33 8 14.5 8zm3 4c-.83 0-1.5-.67-1.5-1.5S16.67 9 17.5 9s1.5.67 1.5 1.5-.67 1.5-1.5 1.5z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
						<p>Artistes</p>
					</a>
					<a class="lien" href="#">
					<svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24">
					<path d="M21.71 11.29l-9-9c-.39-.39-1.02-.39-1.41 0l-9 9c-.39.39-.39 1.02 0 1.41l9 9c.39.39 1.02.39 1.41 0l9-9c.39-.38.39-1.01 0-1.41zM14 14.5V12h-4v3H8v-4c0-.55.45-1 1-1h5V7.5l3.5 3.5-3.5 3.5z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
						<p>Parcours</p>
					</a>
					<a class="lien" href="#">
					<svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/>
					<path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-6h2v6zm0-8h-2V7h2v2z"/></svg>
						<p>À propos</p>
					</a>
					<a class="lien" href="#">
					<svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24"><path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
						<p>Contact</p>
					</a>
					<a class="lien" href="#">
					<svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24"><path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/><path d="M0 0h24v24H0z" fill="none"/></svg>						
						<p>Compte</p>
					</a>
				</nav>	
				<div class="icons">
					
					<a class="search" href="#"><img src="../img/icons/search_40px.svg" alt="Icone de recherche"></a>
					<a class="langue hidden" href="#">EN</a>
					<a class="menuCubes" href="#"><img src="../img/icons/menu.svg" alt="Icone d'ouverture du menu"></a>
					<a class="fermerMenu hidden" href="#"><img src="../img/icons/close.svg" alt="Icone de fermeture du menu"></a>
					<a class="compte" href="#">
					<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"><path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/><path d="M0 0h24v24H0z" fill="none"/></svg>						
					</a>
				</div>
			</header>
			<main>
			
		<?php
		
	}


	/**
	 * Affiche le pied de page
	 * @access public
	 * @return void
	 */
	public function affichePied() {
		?>
			</main>
			<footer>
				<div class="contenu">
					<section class="liens">
					<div class="icons">
					
						<a href="#"><svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="twitter" class="svg-inline--fa fa-twitter fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"></path></svg></a>
						<!-- <a href="#"><svg  aria-hidden="true" focusable="false" data-prefix="fab" data-icon="twitter-square" class="svg-inline--fa fa-twitter-square fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M400 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zm-48.9 158.8c.2 2.8.2 5.7.2 8.5 0 86.7-66 186.6-186.6 186.6-37.2 0-71.7-10.8-100.7-29.4 5.3.6 10.4.8 15.8.8 30.7 0 58.9-10.4 81.4-28-28.8-.6-53-19.5-61.3-45.5 10.1 1.5 19.2 1.5 29.6-1.2-30-6.1-52.5-32.5-52.5-64.4v-.8c8.7 4.9 18.9 7.9 29.6 8.3a65.447 65.447 0 0 1-29.2-54.6c0-12.2 3.2-23.4 8.9-33.1 32.3 39.8 80.8 65.8 135.2 68.6-9.3-44.5 24-80.6 64-80.6 18.9 0 35.9 7.9 47.9 20.7 14.8-2.8 29-8.3 41.6-15.8-4.9 15.2-15.2 28-28.8 36.1 13.2-1.4 26-5.1 37.8-10.2-8.9 13.1-20.1 24.7-32.9 34z"></path></svg></a> -->
						<a href="#"><svg  aria-hidden="true" focusable="false" data-prefix="fab" data-icon="instagram" class="svg-inline--fa fa-instagram fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path></svg></a>
						<!-- <a href="#"><svg  aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook-square" class="svg-inline--fa fa-facebook-square fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M400 32H48A48 48 0 0 0 0 80v352a48 48 0 0 0 48 48h137.25V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.27c-30.81 0-40.42 19.12-40.42 38.73V256h68.78l-11 71.69h-57.78V480H400a48 48 0 0 0 48-48V80a48 48 0 0 0-48-48z"></path></svg></a> -->
						<a href="#"><svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook-f" class="svg-inline--fa fa-facebook-f fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"></path></svg></a>
					</div>
					<nav class="navbar">
					<a class="lien" href="#">
							<p>Oeuvres</p>
						</a>
						<a class="lien" href="#">					
							<p>Artistes</p>
						</a>
						<a class="lien" href="#">
							<p>Parcours</p>
						</a>
						<a class="lien" href="#">
							<p>À propos</p>
						</a>
						<a class="lien" href="#">
							<p>Contact</p>
						</a>
						<a class="lien" href="#">
							<p>Compte</p>
						</a>
					</nav>
					</section>
					
					<p>
						Copyright 2019 - Art Public Montréal<br>
						Tous droits réservés
					</p>
				</div>
				
			</footer>
		
	</body>
</html>

		<?php
		
	}
	

	/**
	 * Affiche la page d'accueil
	 * @access public
	 * @return void
	 */
	public function afficheAccueil() {
		
		?>
		<section class="carte">
			<div class="text">
				<h1>Vivez Montréal</h1>
				<p>À travers sa grande collection d'art public</p>
			</div>
			<a class= "btn btnAccueil" href="/art-public-mtl/api/oeuvre">Voir la carte</a>
		</section>
		<section class="nvlOeuvres">
			<h2>Nouvelles oeuvres</h2>

			<!-- TEST SLIDER -->
			<!-- ref : https://www.w3schools.com/howto/howto_js_slideshow.asp -->

			<!-- A FAIRE AVEC javascript/php en ayant requete SQL: 
			- mettre liens vers les pages des oeuvres 
			- mettre nom de l'oeuvre
			- mettre la bonne image en fond -->

			<!-- Slideshow container -->
			<div class="slider">
				<div class="slide fade">
					<a href="">
						<div class="img"></div>
						<div class="nom">Nom de l'oeuvre</div>
					</a>
					
				</div>
				<div class="slide fade">
					<a href="">
						<div class="img"></div>
						<div class="nom">Nom de l'oeuvre</div>
					</a>
				</div>
				<div class="slide fade">
					<a href="">
						<div class="img"></div>
						<div class="nom">Nom de l'oeuvre</div>
					</a>
				</div>

				<!-- Next and previous : fleches-->
				<a class="fleches prev">&#10094;</a>
				<a class="fleches next">&#10095;</a>
			</div>
			<br>

			<!-- Cercles -->
			<div class="points">
				<span class="point" data-slide="1"></span>
				<span class="point" data-slide="2"></span>
				<span class="point" data-slide="3"></span>
			</div>



		</section>
		<?php
		
	}
	
	/**
	 * Affiche la liste des oeuvres
	 * @access public
	 * @return void
	 */
	public function afficheOeuvres($aData = Array()) {
		
		?>
		 <section class="contenu listeOeuvres">
         	<section class="recherche"></section>
            <section class="oeuvres flex wrap">
						<?php
        
//        echo '<pre>';
//print_r($aData);
//echo '</pre>';
						foreach ($aData as $cle => $oeuvre) {
							extract($oeuvre);
							?>
							<section class="oeuvre carte">
			                    <header class="image dummy">
			                        <h2 class="titre"><?php echo $Titre?></h2> 
			                    </header>
			                    <section class="texte">
			                        <p class="description">
			                            <?php echo $Description ?> 
									</p>
									<?php 
									foreach($Artistes as $artiste){
										extract($artiste);
										?>
										<p class="auteur">Par : <a href="artiste/<?php echo $id_artiste ?>">
                           <?php 
                            if(isset($Nom) && $Nom!=""){
                                echo $Nom .", ". $Prenom;
                     
                            }
                            else
                            {
                                echo $NomCollectif;
                        
                            }
                                
                                
                                        ?></a></p>
									<?php
									}

									?>
			                        <p class="arrondissement"><?php echo $Arrondissement?></p>
			                    </section>
			                    <footer class="barre-action">
								<a class="ouvrir-oeuvre" href="oeuvre/<?php echo $id ?>" data-link="/artPublic/api/oeuvre/<?php echo $id ?>/" data-id="<?php echo $id ?>">En savoir plus...</a>	
								<!--<button class="ouvrir-oeuvre" data-link="/artPublic/api/oeuvre/<?php echo $id_oeuvre ?>/" data-id="<?php echo $id_oeuvre ?>">En savoir plus...</button>-->
			                    </footer>
			                </section>
							
							
							
							
							
							<?php
							/*
							 <section class="oeuvre">
								<h2 class="titre"><a href="/artPublic/api/oeuvre/<?php echo $oeuvre['id'] ?>"><?php echo $oeuvre['Titre']?></a></h2>	
							</section>
							 */
						}
						?>
					</section>
				
			</section>
			
		<?php
		
	}



	
	/**
	 * Affiche la liste des artistes
	 * @access public
	 * @return void
	 */
	public function afficheArtistes($aData = Array()) {
		
		?>
		 <section class="contenu listeArtiste">
            <section class="oeuvres flex wrap">
						<?php
						foreach ($aData as $cle => $artiste) {
							extract($artiste);
							?>
							<section class="artiste carte">
			                    <header class="">
			                        <h2 class="nom"><?php 
                              if(isset($Nom) && $Nom!=""){
                                echo $Nom .", ". $Prenom;
                            }
                            else
                            {
                                echo $NomCollectif;
                            }
                                
                                
                                        ?>
                                        </h2> 
			                    </header>
			                    <footer class="barre-action">
								<a class="ouvrir-oeuvre" href="artiste/<?php echo $id_artiste ?>" >En savoir plus...</a>	
								
			                    </footer>
			                </section>
							<?php
						}
						?>
					</section>
				
			</section>
			
		<?php
						
	}


/**
	 * Affiche le détails d'un artiste
	 * @access public
	 * @return void
	 */
	public function afficheArtiste($aData = Array()) {
		extract($aData);
		?>
		 <section class="contenu uneOeuvre flex flex-col">
		 	
            <section class="artiste flex wrap">
                <header class="">
                    <h2 class="nom"><?php echo $Nom .", ". $Prenom?></h2>
                </header>
            </section>

        </section>
			
		<?php
		
	}


}
?>