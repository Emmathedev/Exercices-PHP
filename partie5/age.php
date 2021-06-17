<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>age.php</title>
</head>
<body>
<?php
echo intval($_GET['age']);
if ($_GET['age'] > 18 && $_GET['age'] < 130 ){
    echo ' Nom : '. $_GET['nom'] .' '. 'Prénom : '. $_GET['prenom'] .' '. 'Age : ' . $_GET['age'];
}
else {
    echo 'Il faut afficher un âge correct';
}
    ?>
</body>
</html>

