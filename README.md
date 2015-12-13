# Protection Anti Plagiat <img src="http://image.noelshack.com/fichiers/2015/50/1449871072-sheild-icon.png">

Ce script vous permettra de protéger votre site web contre les attaques d'aspirateurs de site web our éviter les plagiats (comme le logiciel le plus connus qui est HTTRACK).

Pour les fichiers en .PHP, inclure ceci " include('protectionantiplagiat.php'); " juste après la balise " <?php " dans les pages souhaitées. Préférablement, dans config.php de votre site web.

Pour les fichiers .HTML, mettre ceci " <?php include('protectionantiplagiat.php'); ?> " avant la balise " <!DOCTYPE html> dans les pages souhaitées de votre site web.

Mettre le fichier "protectionantiplagiatr.php" à la racine de votre site web. Exemple de dossier : (public_html) ou (www), un autre fichier "protectionantiplagiat.cnx" va s'inclure automatiquement a la racine avec votre fichier "protectionantiplagiat.php" celui ci va imprimer tout les fraudeurs qui tente d'aspirer votre site web.

-----------------------------------------------------------------------------------------------------------------------------------------

# Versions update

* protectionantiplagiat init v1.0 <img src="http://image.noelshack.com/fichiers/2015/50/1449924925-beta-1.png">
* protectionantiplagiat v1.1 // Ajout de plusieur aspirateur dans $bannav = Array.
* protectionantiplagiat v1.2 // Ajout de l'extension .cnx + auto instalation.
* protectionantiplagiat v1.3 // Ajout des informations '.$navigateur.' '.get_ip().' que l'utilisateur verra dans les fichiers voler.
* protectionantiplagiat v1.4 // Ajout notification via email.
* protectionantiplagiat v1.5 // Amélioration de la fonction notification email.
