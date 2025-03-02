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


//test condition pour empecher d'accéder aux autres vues si login non set

//var_dump($_SESSION['login']);
//		if(!isset($_SESSION['login']))
//        {          
//           // si l'admin n'est pas connecté, rediriger vers l'accueil (login)
//             require("entetepied/enteteAdmin.html.php");
//            require("admin/Connexion.html.php");
//            require("entetepied/piedAdmin.html.php");
//        }


class AdminVue {

/**
	 * Affiche le head html
	 * @access public
	 * @return void
	 */
	public function afficheEntete($page) {
		
        require("entetepied/enteteAdmin.html.php");
		
	}
    
	public function afficheEnteteConnexion() {
        require("entetepied/enteteAdminConnexion.html.php");
		
	}

	/**
	 * Affiche entetes
	 * @access public
	 * @return void
	 */


	/**
	 * Affiche le pied de page
	 * @access public
	 * @return void
	 */
	public function affichePied() {
 
		require("entetepied/piedAdmin.html.php");
	}
	

	
	/**
	 * Affiche la liste des oeuvres
	 * @access public
	 * @return void
	 */
	public function afficheOeuvres($aData = Array()) {
		
require("admin/AfficheOeuvres.html.php");
		
	}
    /**
	 * Affiche une oeuvre
	 * @access public
	 * @return void
	 */
	public function afficheOeuvre($aData) {
		
		require("admin/AfficheOeuvre.html.php");
		
	}
    
    
    /**
	 * Affiche la liste des artiste
	 * @access public
	 * @return void
	 */
    public function afficheArtistes($aData = Array()) {
		
        require("admin/AfficheArtistes.html.php");
		
	}
    
        /**
	 * Affiche la liste des artiste
	 * @access public
	 * @return void
	 */
    public function afficheUser($aData = Array()) {
		
        require("admin/AfficheUser.html.php");
		
	}
    
    
    
        /**
	 * Affiche la page de connexion admin
	 * @access public
	 * @return void
	 */
	public function afficheConnexion() {
		
        require("admin/Connexion.html.php");
		
	}
    
    
    public function afficheFormulaireModification($data, $data2, $data3, $data4) {
	   require("admin/FormulaireModification.html.php");
		
	}
    
    public function afficheFormulaireAjout($data2, $data3, $data4) {
	   require("admin/FormulaireAjout.html.php");
		
	}
    
    
    public function afficheFormulaireAjoutArtiste() {
	   require("admin/FormulaireAjoutArtiste.html.php");
		
	}
    
    public function afficheFormulaireModificationArtiste($data) {
	   require("admin/FormulaireModificationArtiste.html.php");
		
	}
    
	public function afficheDeconnexion() {
		
        require("admin/Deconnexion.html.php");
		
	}
	
	public function afficheMenuAdmin() { //location temporaire
		
		require("admin/MenuAdmin.html.php");
		
	}

}
?>