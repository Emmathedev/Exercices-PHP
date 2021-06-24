<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>PHP Partie 8</title>
    <style>
    .consigne {
            font-style: italic;
            color: #1a7431;
            }
    </style>
</head>
<body>
    <h1>Partie 8 PHP</h1>
    <div class="container">
        <h2>Exercice 1</h2>
        <p class="consigne">Consigne: Afficher la date du jour au format année/mois/jour</p>
        <?php
        $today = date("y/m/d");  
        echo "Aujourd'hui, nous sommes le " . $today;
        ?>
    </div>
    <br>
    <div class="container">
        <h2>Exercice 2</h2>
        <p class="consigne">Consigne: Afficher la date du jour au format année-mois-jour</p>
        <?php
        $today = date("y-m-d");  
        echo "Aujourd'hui, nous sommes le " . $today;
        ?>
    </div>
    <br>
    <div class="container">
        <h2>Exercice 3</h2>
        <p class="consigne">Consigne: Afficher la date du jour avec le jour de la semaine en lettres, en chiffres, 
            le mois en lettres et l'année. Ex : Wednesday 23 June 2021</p>
        <?php
        $today =  date("l j F Y" ) ;  
        echo "Today : " . $today;
        ?>
    </div>
    <br>
    <div class="container">
        <h2>Exercice 4</h2>
        <p class="consigne">Afficher la date du jour avec le jour de la semaine en lettres, en chiffres,
             le mois en lettres et l'année en français. Ex : Mercredi 23 Juin 2021</p>
        <?php
     echo "date du jour en français : NE fonctionne " ;
     // selon le serveur c'est fr ou fr_FR ou fr_FR.ISO8859-1 qui est correct.
     setlocale(LC_TIME, 'fr', 'fr_FR', 'fr_FR.ISO8859-1');
     echo strftime("%A %d %B %Y."); //Affichera par exemple "date du jour en français : samedi 24 juin 2006."
        ?>
    </div>
    <br>
    <div class="container">
        <h2>Exercice 5</h2>
        <p class="consigne">Afficher le timestamp courant et afficher le timestamp du 1er février 2021.</p>
        <?php
        $stt1 = strtotime('2021/02/01');
        echo 'Timestamp depuis le 1er février 2021(GMT+1) : ' .$stt1. '<br>';
        ?>
    </div>
    <br>
    <div class="container">
        <h2>Exercice 6</h2>
        <p class="consigne">Afficher le nombre de jours du mois de février 2021.</p>
        <?php
        $number = cal_days_in_month(CAL_GREGORIAN, 2, 2021); // 31
        echo "Il y a {$number} jours en février 2021";
        ?>
    </div>
</body>
</html>
