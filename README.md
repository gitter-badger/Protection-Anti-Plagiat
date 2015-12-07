# Anti-Web-Copier

Ce script vous permettra de protéger votre site web contre les attaques d'aspirateurs de site web (comme le logiciel le plus connus qui est HTTrack).

Pour les fichiers en .PHP, inclure ceci " include('antiwebcopier.php'); " juste après la balise " <?php " dans les pages souhaitées. Préférablement, dans config.php de votre site web.

Pour les fichiers .HTML, mettre ceci " <?php include('antiwebcopier.php'); ?> " avant la balise " <!DOCTYPE html> dans les pages souhaitées de votre site web.

Mettre le fichier "antiwebcopier.php" à la racine de votre site web. Exemple de dossier : (public_html) ou (www), un autre fichier "antiwebcopier.txt" va s'inclure automatiquement a la racine avec votre fichier "antiwebcopier.php" celui ci va imprimer tout les fraudeur qui tente d'aspirer votre site web.

Peut être utilisé à plusieurs reprises:

<?php include("antiwebcopier.php"); ?>//recommandation

Une fois seulement:

<?php include_once("antiwebcopier.php"); ?>

Y compris à partir de la racine:

<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "../../antiwebcopier.php";
   include_once($path);
?>
