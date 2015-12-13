# Protection Anti Plagiat <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACkAAAAuCAYAAAC1ZTBOAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAIGNIUk0AAHolAACAgwAA+f8AAIDpAAB1MAAA6mAAADqYAAAXb5JfxUYAAAPCSURBVHjazNlPiBtlGMfxb7uttag0u7TqlGCj0WwF19CUgF6WHjy0GJAKWlpaEEuqYsF4EWo8CQFBaw6iB0Vxj6EXjaASBS2l7GMP3dZul+zaul3yTPCgSK1WD+6+HnYmycbZ/Jlmkwk8kElI3g/55Z1532egh48qjE/BiUnYQBAfCsNVODMFZhKOBBG4WeHDKhgH+avAniABNym8q2AakEZgQWA8CMC7FT5RMB5II6ACTw8S+ITCWRe4CtII3BR4U2BbP3GPKXyscL0R2ALp1nmBlwVG/Aw6qlBSeFFht8K9CiMKWxSGFbYrjCu8rnDaC9ch0ggsOf/VTwUOCowKbBUIObVN4AGBlMD7Am8LbEdhj8eAvyjMKVQUFldD+UB61XWBnwSuCvzd9N53ArtQONApYo2QrWpSYC8KxwKMPC9wAIVXAoy8JPAcCq8FGDkj8AIK2QAjZwWOo/BqgJHTAs+jcDzAyIsCR1A4HGDkDwIpFPYFGPm9wOMoPNopwi7EjV1KLlcxYexsxKg1VEdaQ8YuJc1CIb5isOm0ZSrFRO2zC4W4KWcj5pw11A75hcB9KOxQuNkRspQ0di5qNBUymraWobloHZm2apALqVBtsJlMuPbahVTIzGTCplJMmLlctB3yI4Fhd014qVOkZsL142zE2MVE/TgfMz/nY6ZSTJhyNvI/ZCOgnI2YSjHRCrgocELgThTuUDjlC5mL1pFO1OW0ZWZz0RWReyHnctF2yBsC+wU2orDOWYZ1F3cmvAx00Qe3GruUND+O3WYuOs/dyJvjLmcjxi4lzUwm3AppC9zfuKbcq7DUEdKtQnzlr5qPGXtirDa77VKyFrmLdGt+YsxMp622p5/mhe9Ohflu466VE3VzuZF7xd1BnfTakp7yjXTiraYtczkVMlMNkbqzuUvkvwL7vLYRGb9IOx8zdiG+4mR+zp1I2YgfZFVgsxfyEYVrvpDOBGq+4lzJx8xCIe4H+c5qG7J1CoUAXBaXBHa32jk+o/DngJFfe0bdgFyvcGaAyEWBJzvZhz81QORXAqFOkOsVvhkA8g+B/d10NeIKf/UZOSGwsdv2yxt9RM4L7PTTIxrpNnafyEWBw7fSQRtVuLLGyLd60epLKfy2RsiCwO296kkeVfinx8hvBe7pdfP0WLu9UBfI0wI71qrLe0jh91tEfilg9aNXPusDuSTwgcBd/eqbP6jweRfIqsBLg7j7sMHpbV5rg/xMYNeg7+U8rHBS4UYTUgQOCWwK0p2xh6rw3hScnYRnBbb06rv/GwDGgn+13zjnWwAAAABJRU5ErkJggg==">

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
