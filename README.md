# Anti-Web-Copier

Ce script vous permettra de protéger votre site web contre les attaques d'aspirateurs de site web (comme le logiciel le plus connus qui est HTTrack).

Pour les fichiers en .PHP, inclure ceci " include('antiwebcopier.php'); " juste après la balise " <?php " dans les pages souhaitées. Préférablement, dans config.php de votre site web.

Pour les fichiers .HTML, mettre ceci " <?php include('antiwebcopier.php'); ?> " avant la balise " <!DOCTYPE html> dans les pages souhaitées de votre site web.

Mettre le fichier " antiwebcopier.php " et " antiwebcopier.txt " à la racine de votre site web. Exemple de dossier : http_public ou www.
