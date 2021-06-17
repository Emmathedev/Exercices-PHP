<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            margin-top: 400px;
            font-size: 40px;
            color: white;
            background-size: cover;
            text-align: center;
            background-image:url("https://images.pexels.com/photos/21380/pexels-photo.jpg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940");
        }
       
        </style>
</head>
<body>
<div class="container">
  <form action="secret.php" method="post">
    <p>ATTENTION, VOUS ENTREZ DANS UNE ZONE SECURISEE !!!</p>
    <label for="mot_de_passe">Le mot de passe svp : </label>
    <input type="text" id="mot_de_passe" name="mot_de_passe" placeholder="Mot de Passe">  
    <input type="submit" value="Submit">
  </form>
</div>
  
</body>
</html>