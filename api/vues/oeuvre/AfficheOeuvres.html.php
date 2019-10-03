<article class="filtres">
				<section class="mesOeuvres">
					<h2>Mes oeuvres</h2>
					<div>
						<i class="material-icons">check_circle_outline</i>
						<p>Déja visitées</p>
					</div>
					<div>
						<i class="material-icons">star_border</i>
						<p>À visiter</p>
					</div>
					<div>
						<i class="material-icons">favorite_border</i>
						<p>Favorites</p>
					</div>
				</section>
				<section class="type">
					<!-- Faire L'affichage des types d'oeuvre dynamiquement -->
					<?php
						var_dump($aTypes);
						foreach ($aTypes as $cle => $type) {
							//echo $type[];
						}
							?>
							
								




					<h2>Type d'oeuvre</h2>
					<section>
						<div>
							<i class="material-icons">check_box_outline_blank</i>
							<p>Sculpture</p>
						</div>
						<div>
							<i class="material-icons">check_box_outline_blank</i>
							<p>Installation</p>
						</div>
						<div>
							<i class="material-icons">check_box_outline_blank</i>
							<p>Vitrail</p>
						</div>
						<div>
							<i class="material-icons">check_box_outline_blank</i>
							<p>Peinture</p>
						</div>
						<div>
							<i class="material-icons">check_box_outline_blank</i>
							<p>Mozaïque</p>
						</div>
						<div>
							<i class="material-icons">check_box_outline_blank</i>
							<p>Photographie</p>
						</div>
						<div>
							<i class="material-icons">check_box_outline_blank</i>
							<p>Techniques mixtes</p>
						</div>
						<div>
							<i class="material-icons">check_box_outline_blank</i>
							<p>Céramique</p>
						</div>
						<div>
							<i class="material-icons">check_box_outline_blank</i>
							<p>Techniques mixtes</p>
						</div>
						<div>
							<i class="material-icons">check_box_outline_blank</i>
							<p>Techniques mixtes</p>
						</div>
						<div>
							<i class="material-icons">check_box_outline_blank</i>
							<p>Techniques mixtes</p>
						</div>
						<div>
							<i class="material-icons">check_box_outline_blank</i>
							<p>Techniques mixtes</p>
						</div>
						<div>
							<i class="material-icons">check_box_outline_blank</i>
							<p>Techniques mixtes</p>
						</div>
						<div>
							<i class="material-icons">check_box_outline_blank</i>
							<p>Techniques mixtes</p>
						</div>
					</section>


				</section>
				<section class="date">
					<h2>Dates</h2>
				</section>
				<section class="arrond">
					<h2>Arrondissement</h2>
				</section>
			</article>
		<section class="recherche">
			<svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24"><path d="M3 13h2v-2H3v2zm0 4h2v-2H3v2zm0-8h2V7H3v2zm4 4h14v-2H7v2zm0 4h14v-2H7v2zM7 7v2h14V7H7z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
			<div class="vueChoisie">
				<a href="" class="flecheLien">❮</a>
				<svg class = "focus" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24"><path d="M20.5 3l-.16.03L15 5.1 9 3 3.36 4.9c-.21.07-.36.25-.36.48V20.5c0 .28.22.5.5.5l.16-.03L9 18.9l6 2.1 5.64-1.9c.21-.07.36-.25.36-.48V3.5c0-.28-.22-.5-.5-.5zM15 19l-6-2.11V5l6 2.11V19z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
				<a href="" class="flecheLien">❯</a>
			</div>
			<svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M21 19V5c0-1.1-.9-2-2-2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2zM8.5 13.5l2.5 3.01L14.5 12l4.5 6H5l3.5-4.5z"/></svg>
		</section>
		 <section class="contenu listeOeuvres">
			<!-- <section class="rechercher"></section> -->
            <section class="oeuvres flex wrap">
						<?php
    
						foreach ($aData as $cle => $oeuvre) {
							extract($oeuvre);
							?>
							<section class="oeuvre conteneur_oeuvre_courante">
			                    <header class="image dummy image_oeuvre_courante">
									<h2 class="titre-oeuvre"><?php echo $Titre?></h2>
									<a class="ouvrir-oeuvre" href="oeuvre/<?php echo $id_oeuvre ?>" data-link="/artPublic/api/oeuvre/<?php echo $id_oeuvre ?>/" data-id="<?php echo $id_oeuvre ?>"><img src="/art-public-mtl/img/placeholder_640_480.jpg" /></a>
			                    </header>
			                    <section class="texte_pied_image">
			                        <!-- <p class="description">
			                            <?php echo $Description ?> 
									</p> -->
									<?php 
									foreach($Artistes as $artiste){
										extract($artiste);
										?>
										<p class="auteur_liste_oeuvre"><a href="artiste/<?php echo $id_artiste ?>">
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
			                        <p class="date_creation"><?php echo $dateCreation?></p>
			                    </section>
			                    <!-- <footer class="barre-action">
			
								<!<button class="ouvrir-oeuvre" data-link="/artPublic/api/oeuvre/<?php echo $id_oeuvre ?>/" data-id="<?php echo $id_oeuvre ?>">En savoir plus...</button>
			                    </footer> -->
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
			<article class="filtre">
				<i class="material-icons">filter_list</i>
			</article>
			
			