# Protection Anti Plagiat <img src="http://image.noelshack.com/fichiers/2015/50/1449871072-sheild-icon.png">

Ce script vous permettra de protéger votre site web contre les attaques d'aspirateurs de site web our éviter les plagiats (comme le logiciel le plus connus qui est HTTrack).

Pour les fichiers en .PHP, inclure ceci " include('protectionantiplagiat.php'); " juste après la balise " <?php " dans les pages souhaitées. Préférablement, dans config.php de votre site web.

Pour les fichiers .HTML, mettre ceci " <?php include('protectionantiplagiat.php'); ?> " avant la balise " <!DOCTYPE html> dans les pages souhaitées de votre site web.

Mettre le fichier "protectionantiplagiatr.php" à la racine de votre site web. Exemple de dossier : (public_html) ou (www), un autre fichier "protectionantiplagiat.cnx" va s'inclure automatiquement a la racine avec votre fichier "protectionantiplagiat.php" celui ci va imprimer tout les fraudeur qui tente d'aspirer votre site web.

Peut être utilisé à plusieurs reprises:

<?php include("protectionantiplagiat.php"); ?>//recommandation

Une fois seulement:

<?php include_once("protectionantiplagiat.php"); ?>

Y compris à partir de la racine:

<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "../../protectionantiplagiat.php";
   include_once($path);
?>
