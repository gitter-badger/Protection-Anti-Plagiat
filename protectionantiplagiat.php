<?php
/*!
 * protectionantiplagiat init v1.0
 * Dev: NuggaN85
 * Github: NuggaN85
 * Twitter: @NuggaN85
 * Copyright © 2015 All rights reserved.
 * Licensed under CC BY 3.0
 */
$json = file_get_contents("bannav.json");
$navigateur = $_SERVER["HTTP_USER_AGENT"];
$bannav = json_decode($json, true);
$tentative = 0;

function get_ip() {
	// IP internet partagé
	if (isset($_SERVER['HTTP_CLIENT_IP'])) {
		return $_SERVER['HTTP_CLIENT_IP'];
	}
	// IP derrière un proxy
	elseif (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
		return $_SERVER['HTTP_X_FORWARDED_FOR'];
	}
	// test 1
	elseif (isset($_SERVER['HTTP_X_FORWARDED'])) {
		return $_SERVER['HTTP_X_FORWARDED'];
	}
	// test 2
	elseif (isset($_SERVER['HTTP_FORWARDED_FOR'])) {
		return $_SERVER['HTTP_FORWARDED_FOR'];
	}
	// test 3
	elseif (isset($_SERVER['HTTP_FORWARDED'])) {
		return $_SERVER['HTTP_FORWARDED'];
	}
	// IP normale
	else {
		return (isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '');
	}
}

foreach ($bannav as $banned) {
	if(!(strstr($navigateur, $banned))){
		$write_this = '[Information] Aspirateur : '.$navigateur.' Adresse ip : ' .get_ip(); // Le texte que vous voulez avoir dans votre fichier protectionantiplagiat.cnx
		$tentative++;
	}
	else if(strstr($navigateur, $banned)){
		$tentative = 0;
		break;
	}
}

if($tentative > 0){

}

if($tentative > count($bannav)-1){
	$write_here = fopen("protectionantiplagiat.cnx", "a"); // Fichier cnx auto inclus a la racine avec le protectionantiplagiat.php
	fwrite($write_here, "\n" . $write_this);
	fclose($write_here);
	echo utf8_decode( '[Sécurité] Notre site web est protégé contre le vole et le spam, vos information serons automatiquement bannies sur la base de donnée de projecthoneypot <br /><br /> [Information] : '.$navigateur.' '.get_ip().''); // Le texte que vous voulez que le voleur recevra dans les fichiers télécharger
	
    //Notification emails
    $headers  = "From: <noreply@protection-anti-plagiat.com>\r\n";
    $headers .= "Reply-To: noreply@protection-anti-plagiat.com\r\n";
    $headers .= "Return-Path: noreply@protection-anti-plagiat.com\r\n";
    $headers .= 'Content-type: text/html; charset=UTF-8'."\r\n";
    mail('VOTRE EMAIL', '[Protection-Anti-Plagiat]', '[Information] Aspirateur : '.$navigateur.' Adresse ip : ' .get_ip(), $headers);
	
	die();
}
?>
