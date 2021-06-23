<?php
session_start();
setcookie('pseudoExo6', $_POST['pseudoExo6'], time() + 365*24*3600, null, null, false, true); 
setcookie('loginExo6', $_POST['loginExo6'], time() + 365*24*3600, null, null, false, true);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo6</title>
</head>
<body>
<p>Affichage des cookies: le pseudo est <?php echo $_POST['pseudoExo6']; ?> et le login est <?php echo $_POST['loginExo6']; ?></p>

</body>
</html>