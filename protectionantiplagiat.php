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

function get_ip_address() {
    $ip_keys = array('HTTP_CLIENT_IP', 'HTTP_X_FORWARDED_FOR', 'HTTP_X_FORWARDED', 'HTTP_X_CLUSTER_CLIENT_IP', 'HTTP_FORWARDED_FOR', 'HTTP_FORWARDED', 'REMOTE_ADDR');
    foreach ($ip_keys as $key) {
        if (array_key_exists($key, $_SERVER) === true) {
            foreach (explode(',', $_SERVER[$key]) as $ip) {
                $ip = trim($ip);              
                if (validate_ip($ip)) {
                    return $ip;
                }
            }
        }
    }
    return isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : false;
}

function validate_ip($ip)
{
    if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4 | FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE) === false) {
        return false;
    }
    return true;
  }
}

foreach ($bannav as $banned) {
	if(!(strstr($navigateur, $banned))){
		$write_this = '[Information] Aspirateur : '.$navigateur.' Adresse ip : ' .get_ip_address(); // Le texte que vous voulez avoir dans votre fichier protectionantiplagiat.cnx
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
	echo utf8_decode( '[Sécurité] Notre site web est protégé contre le vole et le spam, vos information serons automatiquement bannies sur la base de donnée de projecthoneypot <br /><br /> [Information] : '.$navigateur.' '.get_ip_address().''); // Le texte que vous voulez que le voleur recevra dans les fichiers télécharger
	
    // Notification emails \\
    $headers  = "From: <noreply@protection-anti-plagiat.com>\r\n";
    $headers .= "Reply-To: noreply@protection-anti-plagiat.com\r\n";
    $headers .= "Return-Path: noreply@protection-anti-plagiat.com\r\n";
    $headers .= 'Content-type: text/html; charset=UTF-8'."\r\n";
    // Retirer les 2 // avant mail ci dessous pour commencer a recevoir des notifications \\
    //mail('VOTRE EMAIL', '[Protection-Anti-Plagiat]', '[Information] Aspirateur : '.$navigateur.' Adresse ip : ' .get_ip_address(), $headers);
	
	die();
}
?>
