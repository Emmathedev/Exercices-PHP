<?php

$phrase = 'Bonjour je suis une phrase.';
$nombreDeCaracteres = strlen($phrase);

echo 'Il y a ' . $nombreDeCaracteres . ' caractères dans cette phrase.';

?> 

<p>Exercice 1</p>
<!-- Créer une fonction qui retourne un booléen. -->
<?php
    function boolean(){
        return true;
    }
    echo boolean();
?>

<p>Exercice 2</p>
<!-- Créer une fonction qui retourne une chaîne de caractère -->
<?php
    $text = 'Hello Descodeuses !!!';
    function returnText($string = 'Coucou'){
        return $string;
    }
    echo returnText($text);
?>

<p>Exercice 3</p>
<!-- Créez deux variables contenant chacune une string. Créez une fonction qui retourne le contenu de ces deux variable. -->
<?php
     $truth1 = 'Marcela';
     $truth2 = 'is cool';
    function giveMeTwo($goo,$ga){
      $message = $truth1 . $thruth2;
        return $message;
    }
    giveMeTwo();
    ?>

<h2>Exercice 4</h2>
<!-- Créer une fonction qui retourne deux nombres aléatoire allant de 1 à 15. 
Si le premier nombre est plus grand que le deuxième affichez "le premier nombre est plus grand que le deuxième"
 sinon si le deuxième nombre est plus grand afficher "le premier nombre est plus petit que le deuxième". 
 Afficher "les deux nombres sont égaux" si les deux nombres sont identiques. -->
 <?php
    $nombre1 = random_int(1,15);
    $nombre2 = random_int(1,15);

    echo 'Le 1er nombre aléatoire est '. $nombre1;
    ?>
    <br>
<?php
    echo 'Le 2eme nombre aléatoire est '. $nombre2;

    function theBiggerOne
 ?>