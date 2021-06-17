<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            color : white; 
            background-image: url("https://i2.wp.com/major-prepa.com/wp-content/uploads/2018/10/matrix-2953869_960_720.jpg?resize=640%2C300&ssl=1");
            background-size: cover;
            text-align: center;
           
       }

        .container {
           background-color: black;
           position: relative;
           margin-top: 300px;
           border: 3px solid green;
           padding: 50px;
    
       }

    </style>
</head>
<body>
    <div class="container">
<?php 
        $mot_de_passe = "kangourou";
        // on vérifie si le mot de passe est envoyé avec isset
        //on verifie si c'est le bon avec $_POST ==
        if (isset($_POST['mot_de_passe']) AND $_POST['mot_de_passe'] ==  "kangourou") 
        {// Si le mot de passe est bon
            ?>

             <p>Bravo tu as trouvé le mot de passe !</p>
             <h1>Voici les codes d'accès :</h1>
        <p><strong>CRD5-GTFT-CK65-JOPM-V29N-24G1-HH28-LLFV</strong></p>   
        
        <p>
        Cette page est réservée au personnel de la NASA. N'oubliez pas de la visiter régulièrement car les codes d'accès sont changés toutes les semaines.<br />
        La NASA vous remercie de votre visite.
        </p>
        <?php
        } else {
            echo "Veuillez saisir le bon mot de passe";
        }
    ?>
    </div>
</body>
</html>