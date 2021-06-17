<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Partie 5</title>
</head>
<body>
    <h2>Exercice 1</h2>
    <!-- Créer un lien avec les paramètres "nom" et "prénom" dirigeant sur la page courante et affichez ces paramètres. -->
    <a href="index.php?nom=Duflot&amp;prenom=Emma">test</a>
    <?php
    echo ' Nom : '. $_GET['nom'] .' '. 'Prénom : '. $_GET['prenom'];
    ?>

    <h2>Exercice 2</h2>
    <!-- Créer un lien avec les paramètres "nom", "prénom" et "âge" dirigeant sur une autre page et affichez ces paramètres. -->
<a href="bonjour.php?nom=Duflot&amp;prenom=Emma&amp;age=30">exo 2 avec l'âge</a>

<h2>Exercice 3</h2>
<!-- Créer un lien avec les paramètres "nom", "prénom" et "âge" dirigeant sur une autre page.
 Si l'âge est supérieur à 18 et inférieur à 130 affichez ces paramètres. 
 L'âge ne peut être qu'un entier. -->
 <a href="age.php?nom=Duflot&amp;prenom=Emma&amp;age=30">exo 3 avec l'âge</a>

 <h2>Exercice 4</h2>
 <!-- Créer un lien avec les paramètres "langage", "serveur" dirigeant sur une autre page. 
 Vérifier si le paramètre serveur existe, si oui afficher le, sinon afficher un message d'erreur.-->
 <a href="langage.php?langage=php&amp;serveur=ovh">exo 4 avec le langage</a>

<h2>Exercice 5</h2>

<!-- Créer un lien avec les paramètres "langage", "serveur" dirigeant sur une autre page. 
Vérifiez si les paramètres existent, si oui affichez les sinon affichez un message d'erreur. -->
<a href="exo5.php?langage=php&amp;serveur=ovh">exo 5 avec le langage</a>

<h2>Exercice 6</h2>
<!-- Créez un lien avec les paramètres "langage", "serveur" dirigeant sur une autre page. 
Vérifiez si les paramètres existent, si oui affichez les sinon affichez un message d'erreur.
Vous devez empêchez l'inclusion de balises html dans les paramètres. -->
<a href="exo6.php?langage=php&amp;serveur=ovh">exo 6</a>
</body>
</html>