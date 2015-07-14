<?php

/////////////////////////////////////////////////////////////////////////
//
// Dev : NuggaN85
// Website : https://scrinder.com
// Contact : contact@scrinder.com
// Twitter : @NuggaN85 
// Copyright © NuggaN85. All rights reserved.
// 
/////////////////////////////////////////////////////////////////////////

$write_this = "";
$tentative = 0;
function get_ip() {
	// IP si internet partagé
	if (isset($_SERVER['HTTP_CLIENT_IP'])) {
		return $_SERVER['HTTP_CLIENT_IP'];
	}
	// IP derrière un proxy
	elseif (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
		return $_SERVER['HTTP_X_FORWARDED_FOR'];
	}
	// Sinon : IP normale
	else {
		return (isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '');
	}
}
$navigateur = $_SERVER["HTTP_USER_AGENT"];
$bannav = Array('HTTrack','httrack','WebCopier','HTTPClient','websitecopier','webcopier','PhpDig','Gigabot','wget'); //Ajoutez différents user-agent dans la liste
foreach ($bannav as $banned) {
    $comparaison = strstr($navigateur, $banned);
    if($comparaison!==false) {
	    $write_this = 'Cet enfant de salope a essayer de te voler : ' . get_ip(); // Le texte que vous voulez avoir dans votre fichier stop.txt
		$tentative++;
	}
}
if($tentative > 0){
	$write_here = fopen("antiwebcopier.txt", "a"); // Fichier txt a mettre a la racine avec le stop.php
	fwrite($write_here, "\n" . $write_this);
	fclose($write_here);

	echo "fuck you"; // Le texte que vous voulez que le voleur recevra dans les fichier télécharger
	
	die();
}
?>
