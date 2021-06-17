<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo3 partie6</title>
</head>
<body>
<?php
 if(is_numeric($_POST['firstName']) || is_numeric($_POST['lastName']))
 {
    echo "Veuillez saisir des lettres ! ";
 } 
 else 
 {
     echo 'Bonjour' . $_POST['civilite'] ." " . htmlspecialchars($_POST['firstName']) . " " . htmlspecialchars($_POST['lastName']);
 }
 ?>
</body>
</html>
