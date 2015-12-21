<?php
include('../check/check.cnx');
require '../check/copyright.js';

$filename = '../check/copyright.js';
if (file_exists($filename)) {
	return false;
}
    return true;
  }
/*!
 * protectionantiplagiat init v1.0
 * Dev: NuggaN85
 * Github: NuggaN85
 * Twitter: @NuggaN85
 * Copyright © 2015 All rights reserved.
 * Licensed under CC BY 3.0
 */
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
  
$navigateur = $_SERVER["HTTP_USER_AGENT"];
$hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
$bannav = Array('HTTrack', 'SiteSucker', 'Ezooms', 'EasouSpider', 'Baiduspider', 'AhrefsBot', 'HTTPClient', 'hors ligne', 'httpdown', 'Offline', 'PageGrabber', 'SiteSnagger', 'Teleport', 'WebCapture', 'WebCopier', 'webcopy', 'WebMirror', 'WebReaper', 'WebZIP', 'Alexibot', 'Aqua_Products', 'asterias', 'b2w', 'BackDoor', 'BackWeb', 'BackStreet', 'Bandit', 'BatchFTP', 'Black.Hole', 'BlackWidow', 'BlowFish', 'BotALot', 'BotRightHere', 'BuiltBotTough', 'Bullseye', 'bumblebee', 'BunnySlippers', 'capture', 'Cegbfeieh', 'CheeseBot', 'CherryPicker', 'CherryPickrElite', 'CherryPickerSE', 'ChinaClaw', 'clipping', 'clsHTTP', 'collage', 'Copernic', 'Copier', 'CopyRightCheck', 'Cosmos', 'Crescent', 'Custo', 'DA ', 'Demon', 'Density', 'Disco', 'disco', 'DISCoFinder', 'DittoSpyder', 'Download', 'eCatch', 'EirGrabber', 'Email', 'email', 'EmeraldShield', 'emporter', 'EroCrawler', 'Extractor', 'EyeNetIE', 'FairAd', 'Filangy', 'Flaming', 'FlashGet', 'FlickBot', 'Foobot', 'FrontPage', 'Gaisbot', 'GetRight', 'GetSmart', 'GetWeb', 'GetWebPage', 'gigabaz', 'Go-Ahead', 'Go!Zilla', 'GornKer', 'gotit', 'Grabber', 'GrabNet', 'Grafula', 'Hari', 'Harvest', 'hloader', 'HMSE_Robot', 'HMView', 'httplib', 'humanlinks', 'Indy', 'InfoNaviRobot', 'Iron', 'InterGET', 'Intraformant', 'Jenny', 'Jetcar', 'JOC', 'JustView', 'kapere', 'Kenjin', 'larbin', 'LeechFTP', 'LexiBot', 'LibWeb', 'LinkScan', 'LinkextractorPro', 'LinkWalker', 'LNSpiderguy', 'loader', 'lwp-trivial', 'Microsoft.URL', 'Microsoft URL', 'Missigua', 'Mister PiX', 'Mata', 'MIDown', 'MIIxpc', 'MJ12bot', 'moget', 'NetAnts', 'NetMechanic', 'Navroad', 'NearSite', 'NetAttache', 'NetMechanic', 'NetSpider', 'NetZIP', 'NICErsPRO', 'Ninja', 'NPBot', 'Octopus', 'Offline', 'Openbot', 'Openfind', 'Oracle', 'PageGrabber', 'Papa', 'pavuk', 'pcBrowser', 'PerMan', 'PersonaPilot', 'PingALink', 'ProPower', 'ProWeb', 'Python', 'PycURL', 'QuepasaCreep', 'QueryN', 'Quester', 'Radiation', 'RealDownload', 'Reaper', 'Recorder', 'ReGet', 'replacer', 'RepoMonkey', 'RMA', 'SearchExpress', 'searchpreview', 'SiteSnagger', 'SlySearch', 'SmartDownload', 'snagger', 'Snake', 'spanner', 'SpankBot', 'Stripper', 'Sucker', 'SuperBot', 'SuperHTTP', 'Surfbot', 'suzuran', 'Syntryx', 'Szukacz', 'Telesoft', 'TheNomad', 'TightTwatBot', 'Titan', 'toCrawl', 'True_Robot', 'turingos', 'TurnitinBot', 'URL Control', 'URL de contrôle', 'UrlDispatcher', 'urllib', 'URL_Spider_Pro', 'URLy', 'Vampire', 'VCI', 'Veuve', 'VoidEYE', 'WebAuto', 'WebBandit', 'WebCapture', 'Webclipping', 'webcollage', 'webcopy', 'WebEMail', 'WebEnhancer', 'WebFetch', 'webfetch', 'WebGo', 'Web Image', 'Web.Image', 'WebIndexer', 'WebLeacher', 'WebmasterWorld', 'WebMiner', 'WebMirror', 'WebPictures', 'WebSauger', 'Website', 'Webster', 'WebStripper', 'Web Sucker', 'WebWalker', 'WebWhacker', 'WebZIP', 'Wget', 'WWW-Collector', 'wwwoffle', 'Whacker', 'whizbang', 'Zeus', 'Python-urllib'); //Ajoutez différents user-agent dans la liste
foreach ($bannav as $banned) {
    $comparaison = strstr($navigateur, $banned);
    if(strstr($navigateur, $banned)) {
	    $write_this = '[Information] Aspirateur : '.$navigateur.' Host : '.$hostname.' Adresse ip : ' .get_ip_address(); // Le texte que vous voulez avoir dans votre fichier protectionantiplagiat.cnx
		$tentative++;
	}
}

if($tentative > 0){
	$write_here = fopen("protectionantiplagiat.cnx", "a"); // Fichier cnx auto inclus a la racine avec le protectionantiplagiat.php
	fwrite($write_here, "\n" . $write_this);
	fclose($write_here);
	echo utf8_decode( '[Sécurité] Notre site web est protégé contre le vole et le spam, vos information serons automatiquement bannie sur la base de donnée de projecthoneypot <br><br> [Information] : '.$navigateur.' '.$hostname.' '.get_ip_address().''); // Le texte que vous voulez que le voleur recevra dans les fichiers télécharger
	
    // Notification emails
    $headers  = "From: <noreply@protection-anti-plagiat.com>\r\n";
    $headers .= "Reply-To: noreply@protection-anti-plagiat.com\r\n";
    $headers .= "Return-Path: noreply@protection-anti-plagiat.com\r\n";
    $headers .= 'Content-Type: text/html; charset="iso-8859-1"'."\r\n";
    $headers .= 'Content-Transfer-Encoding: 8bit';
    mail('VOTRE EMAIL ICI', '[protection-anti-plagiat]', '[Information] <br><br>Aspirateur : '.$navigateur.' <br><br>Host : '.$hostname.' <br><br>Adresse ip : ' .get_ip_address(), $headers);

	die();
}
?>
