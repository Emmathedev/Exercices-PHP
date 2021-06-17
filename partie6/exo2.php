<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo 2 part6</title>
</head>
<body>
<?php
// $verificationInput = '/^[A-Z]{1}[a-z]+$/';
// if(preg_match($verificationInput, $_POST['exo2Prenom']) && preg_match($verificationInput, $_POST['exo2Nom']))
// {
//     echo $_POST['exo2Prenom'] . " " . $_POST['exo2Nom'];
// } 
// else 
// {
//     echo "le nom ou le prénom n'est pas défini";
// }

if(!empty($_POST['exo2Prenom']) && !empty($_POST['exo2Nom']))
{
    echo $_POST['exo2Prenom'] . " " . $_POST['exo2Nom'];
} 
else 
{
    echo "le nom ou le prénom n'est pas défini";
}
?>
</body>
</html>


