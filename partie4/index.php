<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice PHP : Partie 4</title>
</head>
<body>
    <h1>Les tableaux en PHP</h1>
    <h2>Exercice 1 </h2>
    <!-- Créer un tableau contenant les 12 mois de l'année, affichez "Mars". -->
    <?php
        $tab = array('Janvier','Fevrier','Mars','Avril','Mai','Juin','Juillet','Août', 'Septembre','Octobre','Novembre','Décembre');
        echo $tab[2];
    ?>
<!-- avec fonction -->
<?php
        $month = array('Janvier','Fevrier','Mars','Avril','Mai','Juin','Juillet','Août', 'Septembre','Octobre','Novembre','Décembre');
        function displayMarch(){
            global $month;
            echo $month[2];
            return;
        }
        displayMarch();
        ?>



<h2>Exercice 2</h2>
<!-- Créer un tableau associatif contenant comme clé des chiffres de 1 à 5 et comme valeurs cinq langages de programmation.
 Affichez ces langages. -->

<?php
$languages = array(1 => "PHP", 2 => "Python", 3 => "Java", 4 => "javaScript", 5 => "C#");
print_r($languages);
foreach($languages as $language)
{
    echo'<p>'.$language.'</p>';
}
?>

<h2>Exercice 3</h2>
<!-- Créer un tableau associatif contenant comme clé des chiffres de 1 à 5 et comme valeurs cinq langages de programmation.
 Affichez le troisième langage. -->
<?php
$languages = array(1 => "PHP", 2 => "Python", 3 => "Java", 4 => "javaScript", 5 => "C#");
    echo $languages[3];
    ?>

<h2>Exercice 4</h2>
<!-- Créer un tableau associatif contenant comme clé des chiffres de 1 à 5 et comme valeurs cinq langages de programmation.
 Ajoutez une clé et assignez lui une valeur. Affichez cette valeur. -->
 <?php
$tablang = array(1 => "PHP", 2 => "Python", 3 => "Java", 4 => "javaScript", 5 => "C#");

array_push($tablang,'Ruby');
var_dump($tablang);
?>

<h2>Exercice 5</h2>
<?php 
$departements = array('60' => 'Oise', '75' => 'Paris', '02' => 'Aine', '59' => 'Nord');
foreach($departements as $key => $departements){?>
<p>Le département <?= $departements ?> a le numéro <?= $key ?>.</p>
<?php
}
?>
</body>
</html>