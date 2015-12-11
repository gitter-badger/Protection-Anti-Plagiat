<?php

/*!
 * antiwebcopier v1.0
 * Dev: NuggaN85
 * Twitter: @NuggaN85
 * Copyright 2015 © NuggaN85. All rights reserved.
 * Licensed under CC BY 3.0
 * http://creativecommons.org/licenses/by/3.0/
 * https://www.tchatland.fr
 */

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
$bannav = Array('HTTrack', 'HTTPClient', 'hors ligne', 'httpdown', 'Offline', 'PageGrabber', 'SiteSnagger', 'Teleport', 'WebCapture', 'WebCopier', 'webcopy', 'WebMirror', 'WebReaper', 'WebZIP', 'Alexibot', 'Aqua_Products', 'asterias', 'b2w', 'BackDoor', 'BackWeb', 'BackStreet', 'Bandit', 'BatchFTP', 'Black.Hole', 'BlackWidow', 'BlowFish', 'BotALot', 'BotRightHere', 'BuiltBotTough', 'Bullseye', 'bumblebee', 'BunnySlippers', 'capture', 'Cegbfeieh', 'CheeseBot', 'CherryPicker', 'CherryPickrElite', 'CherryPickerSE', 'ChinaClaw', 'clipping', 'clsHTTP', 'collage', 'Copernic', 'Copier', 'CopyRightCheck', 'Cosmos', 'Crescent', 'Custo', 'DA ', 'Demon', 'Density', 'Disco', 'disco', 'DISCoFinder', 'DittoSpyder', 'Download', 'eCatch', 'EirGrabber', 'Email', 'email', 'EmeraldShield', 'emporter', 'EroCrawler', 'Extractor', 'EyeNetIE', 'FairAd', 'Filangy', 'Flaming', 'FlashGet', 'FlickBot', 'Foobot', 'FrontPage', 'Gaisbot', 'GetRight', 'GetSmart', 'GetWeb', 'GetWebPage', 'gigabaz', 'Go-Ahead', 'Go!Zilla', 'GornKer', 'gotit', 'Grabber', 'GrabNet', 'Grafula', 'Hari', 'Harvest', 'hloader', 'HMSE_Robot', 'HMView', 'httplib', 'humanlinks', 'Indy', 'InfoNaviRobot', 'Iron', 'InterGET', 'Intraformant', 'Jenny', 'Jetcar', 'JOC', 'JustView', 'kapere', 'Kenjin', 'larbin', 'LeechFTP', 'LexiBot', 'LibWeb', 'LinkScan', 'LinkextractorPro', 'LinkWalker', 'LNSpiderguy', 'loader', 'lwp-trivial', 'Microsoft.URL', 'Microsoft URL', 'Missigua', 'Mister PiX', 'Mata', 'MIDown', 'MIIxpc', 'MJ12bot', 'moget', 'NetAnts', 'NetMechanic', 'Navroad', 'NearSite', 'NetAttache', 'NetMechanic', 'NetSpider', 'NetZIP', 'NICErsPRO', 'Ninja', 'NPBot', 'Octopus', 'Offline', 'Openbot', 'Openfind', 'Oracle', 'PageGrabber', 'Papa', 'pavuk', 'pcBrowser', 'PerMan', 'PersonaPilot', 'PingALink', 'ProPower', 'ProWeb', 'Python', 'PycURL', 'QuepasaCreep', 'QueryN', 'Quester', 'Radiation', 'RealDownload', 'Reaper', 'Recorder', 'ReGet', 'replacer', 'RepoMonkey', 'RMA', 'SearchExpress', 'searchpreview', 'SiteSnagger', 'SlySearch', 'SmartDownload', 'snagger', 'Snake', 'spanner', 'SpankBot', 'Stripper', 'Sucker', 'SuperBot', 'SuperHTTP', 'Surfbot', 'suzuran', 'Syntryx', 'Szukacz', 'Telesoft', 'TheNomad', 'TightTwatBot', 'Titan', 'toCrawl', 'True_Robot', 'turingos', 'TurnitinBot', 'URL Control', 'URL de contrôle', 'UrlDispatcher', 'urllib', 'URL_Spider_Pro', 'URLy', 'Vampire', 'VCI', 'Veuve', 'VoidEYE', 'WebAuto', 'WebBandit', 'WebCapture', 'Webclipping', 'webcollage', 'webcopy', 'WebEMail', 'WebEnhancer', 'WebFetch', 'webfetch', 'WebGo', 'Web Image', 'Web.Image', 'WebIndexer', 'WebLeacher', 'WebmasterWorld', 'WebMiner', 'WebMirror', 'WebPictures', 'WebSauger', 'Website', 'Webster', 'WebStripper', 'Web Sucker', 'WebWalker', 'WebWhacker', 'WebZIP', 'Wget', 'WWW-Collector', 'wwwoffle', 'Whacker', 'whizbang', 'Zeus'); //Ajoutez différents user-agent dans la liste
foreach ($bannav as $banned) {
    $comparaison = strstr($navigateur, $banned);
    if($comparaison!==false) {
	    $write_this = 'information : '.$navigateur.'' . get_ip(); // Le texte que vous voulez avoir dans votre fichier antiwebcopier.txt
		$tentative++;
	}
}
if($tentative > 0){
	$write_here = fopen("antiwebcopier.cnx", "a"); // Fichier cnx auto inclus a la racine avec le antiwebcopier.php
	fwrite($write_here, "\n" . $write_this);
	fclose($write_here);

	echo utf8_decode( '[Sécurité] Notre site web est protégé contre le vole et le spam, vos information sera automatiquement banni sur la base de donnée de projecthoneypot '.$navigateur.''); // Le texte que vous voulez que le voleur recevra dans les fichiers télécharger
	
	die();
}
?>
