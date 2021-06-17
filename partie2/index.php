<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercices PHP Partie 2</title>
</head>
<body>
    <h1>Exercices PHP - Partie 2</h1>
    <h2>Exercice 1 </h2>
<!-- Créez une boucle qui affiche les nombres de 0 à 10. -->
<?php 

for($i = 0; $i <= 10; $i++) {
    var_dump($i);
}

?>


<h2>exercice 2</h2>
<!-- Créez deux variables. L'une initialisée à 0 et l'autre avec un nombre aléatoire de 1 à 100. 
Tant que la variable n'a pas atteint 20, multiplier la première variable par la deuxième est afficher le résultat. -->
<?php

$varRandom = random_int(1,100);

for($var1 = 0; $var1 <= 20; $var1++){
    echo $var1;
    echo $varRandom;
    var_dump($var1*$varRandom);
}

?>


<h2>exercice 3</h2>
<!-- Créez une variable initialisé à 1. Tant que cette variable n'a pas atteint 15, affichez 'On y est presque'. -->
<?php 
for ($varIni = 1; $varIni <= 15; $varIni++){
    var_dump ('On y est presque');
}
?>

<h2>exercice 4</h2>
<!-- Initialisez une variable à 1. Tant que cette variable est inférieure à 100, incrémentez avec un pas de 15. -->
<?php 
for ($varIni = 1; $varIni <= 100; $varIni += 15){
?>
   <p><?= $varIni ?></p>
   <?php
}
?>

<h2>exercice 5</h2>
<!-- Initialisez une variable à 200. Tant que cette variable est supérieure à 0, décrémentez avec un pas de 12. -->
<?php 
for ($varInit = 200; $varInit >= 0; $varInit -= 12){
    ?>
    <p><?= $varInit ?></p>
    <?php
}
?>

<h2>exercice bonus</h2>
<!-- Créer un tableau contenant les 12 mois de l'année. Afficher ces mois dans un "select". -->
</body>
<?php
$months = array('Janvier','Février','Mars','Avril','Mai','Juin','Juillet', 'Aout', 'Septembre','Octobre', 'Novembre','Decembre');
?>
<select name="months" id="month-select">
    <option value="">--Choisissez votre mois--</option>
    <option value=""><?=$months[0]?></option>
    <option value=""><?=$months[1]?></option>
    <option value=""><?=$months[2]?></option>
    <option value=""><?=$months[3]?></option>
    <option value=""><?=$months[4]?></option>
    <option value=""><?=$months[5]?></option>
    <option value=""><?=$months[6]?></option>
    <option value=""><?=$months[7]?></option>
    <option value=""><?=$months[8]?></option>
    <option value=""><?=$months[9]?></option>
    <option value=""><?=$months[10]?></option>
    <option value=""><?=$months[11]?></option>
</select>

<h3>exercice bonus methode en boucle</h3>
<select>
<?php
$tab = array('Janvier','Fevrier','Mars','Avril','Mai','Juin','Juillet','Août', 'Septembre','Octobre','Novembre','Décembre');
$tablength = count($tab);
for($i = 0; $i < $tablength; $i++){
  ?>
  <!-- <option>Choisir un mois</option> -->
  <option><?= $tab[$i] ?></option>
  <?php
}
?>
</select>


<h3>exercice bonus methode foreach</h3>

<?php
    $tab = array('Janvier','Fevrier','Mars','Avril','Mai','Juin','Juillet','Août', 'Septembre','Octobre','Novembre','Décembre');
    ?>
<select>
    <?php
    foreach ($tab as $value) {
    ?>
    <option><?= $value ?></option>
    <?php
    }
    ?>
</select>

</html>
