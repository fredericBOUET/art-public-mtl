<?php
/**
 * Controlleur de la ressource APropos
 * 
 * 
 * @author Jonathan Martel
 * @version 1.0
 * @update 2016-11-25
 * @license Creative Commons BY-NC 3.0 (Licence Creative Commons Attribution - Pas d’utilisation commerciale 3.0 non transposé)
 * @license http://creativecommons.org/licenses/by-nc/3.0/deed.fr
 */
 
 /*
 * 
 *
 */

 
 
class AProposControlleur extends Controlleur 
{
	
	// GET : 
	// 		/apropos/ - À propos
	
	
	public function getAction(Requete $requete)
	{
		$oVue = new Vue();
        $oVue->afficheEntete("apropos");	
        $oVue->afficheAPropos();
        $oVue->affichePied();
	}
	
}
?>