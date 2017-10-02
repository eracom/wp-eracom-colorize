<?php
/*
Plugin Name: Eracom Colorize
Plugin URI: https://github.com/eracom-gr351
Description: Colorisation en fonction de la date.
Version: 0.1
Author: Manuel Schmalstieg
Author URI: https://github.com/ms-studio
*/


function eracom_colorize() {

	// Obtenir la date courante
	
	$mois = date('n'); // numéro du mois de 1 à 12
	$semaine = date('W'); // numéro de semaine (format ISO)
	
	// 1) Changement de couleur selon les saisons:
	
	if ( ( $mois > 3 ) || ( $mois == 12 ) ) { // hiver
	
		$bg = 'rgb(220, 220, 220)';
		
	} else if ( $mois > 6 ) { // printemps
	
		$bg = 'rgb(220, 220, 176)';
	
	} else if ( $mois > 9 ) { // été
	
		$bg = 'rgb(220, 220, 176)';
	
	} else if ( $mois > 12 ) { // automne
	
		$bg = 'rgb(220, 220, 176)';
	
	} else if ( $mois > 8 ) { // printemps
	
		$bg = 'rgb(220, 220, 176)';
	
	}
	
	// 2) Couleurs pour semaines spéciales:
	
	if ( $semaine == 43 ) { // semaine halloween
	
		$bg = 'rgb(220, 176, 176)';
	
	}
	
	// Appliquer la couleur:
  echo '<style>
  
	body #page-container .et_slide_in_menu_container  {
		background-color: '.$bg.';
	}
  	
</style>
';
}

add_action('wp_head','eracom_colorize', 25);

