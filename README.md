# Protection Anti Plagiat <img src="https://camo.githubusercontent.com/fe2cb3af77c3290cd9437c142662cbd08bbbc027/687474703a2f2f696d6167652e6e6f656c736861636b2e636f6d2f66696368696572732f323031352f35312f313435303130333535302d736865696c642e706e67">

Ce script vous permettra de protéger votre site web contre les attaques d'aspirateurs de site web our éviter les plagiats (comme le logiciel le plus connus qui est <strong>HTTRACK</strong>).

Mettre le fichier "protectionantiplagiatr.php" à la racine de votre site web. Exemple de dossier : (public_html) ou (www), un autre fichier "protectionantiplagiat.cnx" va s'inclure automatiquement a la racine avec votre fichier "protectionantiplagiat.php" celui ci va imprimer tout les fraudeurs qui tente d'aspirer votre site web.

<strong>Attention !</strong>
Pour les fichiers en <img src="https://camo.githubusercontent.com/25cd284836114e790bc758cfe653dde1116bff5a/687474703a2f2f696d6167652e6e6f656c736861636b2e636f6d2f66696368696572732f323031352f35302f313435303033333534362d7068702e706e67">, inclure ceci " include('protectionantiplagiat.php'); " juste après la balise " <?php " dans les pages souhaitées. Préférablement, dans config.php de votre site web.

<strong>Attention !</strong>
Pour les fichiers en <img src="https://camo.githubusercontent.com/6579c91b9eb15b56a20e6b5d9f8b40493cdbde6d/687474703a2f2f696d6167652e6e6f656c736861636b2e636f6d2f66696368696572732f323031352f35302f313435303033333534362d68746d6c2e706e67">, mettre ceci " <?php include('protectionantiplagiat.php'); ?> " avant la balise " <!DOCTYPE html> dans les pages souhaitées de votre site web.
  
--------------------------------------------------------------------------------------------------------------------------------------

# Versions update

* protectionantiplagiat init v1.0 <img src="http://image.noelshack.com/fichiers/2015/50/1450015692-687474703a2f2f696d6167652e6e6f656c736861636b2e636f6d2f66696368696572732f323031352f35302f313434393932343932352d626574612d312e706e67.png">
* protectionantiplagiat v1.1 // Ajout de plusieur aspirateur dans $bannav = Array.
* protectionantiplagiat v1.2 // Ajout de l'extension .cnx + auto instalation.
* protectionantiplagiat v1.3 // Ajout des informations '.$navigateur.' '.get_ip().' que l'utilisateur verra dans les fichiers voler.
* protectionantiplagiat v1.4 // Ajout notification via email.
* protectionantiplagiat v1.5 // Amélioration de la fonction notification email.
* protectionantiplagiat v1.6 // Ajout des imformations '.$navigateur.'' . get_ip() dans la notification email.
* protectionantiplagiat v1.7 // <img src="http://image.noelshack.com/fichiers/2015/51/1450112356-loading.gif">

<a href="http://www.copyscape.com/"><img src="http://banners.copyscape.com/img/copyscape-banner-white-200x25.png" width="200" height="25" border="0" alt="Protected by Copyscape" title="Protected by Copyscape Plagiarism Checker - Do not copy content from this page." /></a>

--------------------------------------------------------------------------------------------------------------------------------------

# Screenshot d'exemple d'attaques d'aspirateur

<img src="https://camo.githubusercontent.com/10cd08f50ca91841b2de75120d4d68680895b381/687474703a2f2f696d6167652e6e6f656c736861636b2e636f6d2f66696368696572732f323031352f35312f313435303130353437352d73637265656e73686f742d322e706e67">
<img src="https://camo.githubusercontent.com/0113c700be56de262e0ab9b63e220660ba64fef1/687474703a2f2f696d6167652e6e6f656c736861636b2e636f6d2f66696368696572732f323031352f35312f313435303130353437352d73637265656e73686f742d312e706e67">
<img src="https://camo.githubusercontent.com/1272c4ea5f7fbe22938f35f4b29bd88c80e42665/687474703a2f2f696d6167652e6e6f656c736861636b2e636f6d2f66696368696572732f323031352f35312f313435303132333439372d73637265656e73686f742d312e706e67">
