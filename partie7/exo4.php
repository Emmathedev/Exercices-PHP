<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 4 partie 7</title>
</head>
<body>
<?php
if (isset($_POST['pseudo']) AND isset($_POST['password'])) {
    echo 'Votre pseudo est ' . $_POST['pseudo'] . ' et votre mot de passe est ' . $_POST['password'];
} else {
    echo "Veuillez remplir les deux champs! ";
}
?>
</body>
</html>
