<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partie 7 </title>
    <style>
        h2 {
            color: red;
        }

        body {
            text-align: center;
        }

        .container {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 10px;
            width: 50%;
            margin-left: 440px;
        }

        .consigne {
            font-style: italic;
            color: #1a7431;
        }
    </style>
</head>

<body>
    <h1>Partie 7</h1>
    <div class="container">
        <h2>Exercice 1</h2>
        <p class="consigne">Consigne: Sur une même page, affichez votre user_agent, l'adresse ip de votre serveur et le nom de votre serveur.</p>
        <?php
        echo "Votre navigateur a pour \"signature\":" . htmlEntities($_SERVER["HTTP_USER_AGENT"]) . "<br />";
        ?>
        <?php
        echo "<p>Votre adresse IP est " . $_SERVER['REMOTE_ADDR'] . ".</p>";
        ?>
        <?php
        echo "<p>Le nom de votre serveur est " . $_SERVER['SERVER_NAME'] . ".</p>";
        ?>
    </div>
    <br>
    <div class="container">
        <h2>Exercice 2</h2>
        <p class="consigne">Consigne: Créez deux variables de session (nom, prénom). Affichez les sur la même page.</p>
        <?php
        $_SESSION['nom'] = "DUFLOT";
        $_SESSION['prenom'] = "Emma";
        ?>
        <p>Voici l'exercice sur les sessions. On affiche les 2 variables de sessions</p>
        <p><?php
            echo $_SESSION['nom'] . " " . $_SESSION['prenom'];
            ?></p>
    </div>
    <br>
    <div class="container">
        <h2>Exercice 3</h2>
        <p class="consigne">Créez trois variables de session (nom, prénom et âge). Au clic sur un lien, affichez l'âge sur une autre page.</p>
        <?php
        $_SESSION['nom'] = "DUFLOT";
        $_SESSION['prenom'] = "Emma";
        $_SESSION['age'] = "34";
        ?>
        <p>Voici l'exercice sur les sessions. On affiche les 2 variables de sessions et l'âge sur une autre page.</p>
        <p><?php
            echo $_SESSION['nom'] . " " . $_SESSION['prenom'];
            ?></p>
        <a href="exo3.php">Si tu veux connaitre mon âge, clique-moi</a>
    </div>
    <br>
    <div class="container">
        <h2>Exercice 4</h2>
        <p class="consigne">Créez un formulaire demandant un pseudo et mot de passe. Au clic sur le bouton "envoyer", affichez le pseudo et mot de passe sur une autre page.</p>
        <div>
            <form action="exo4.php" method="POST">
                <label for="pseudo">Ton peudo</label>
                <input type="text" id="pseudo" name="pseudo" placeholder="Ton pseudo">

                <label for="password">Ton mot de passe</label>
                <input type="text" id="password" name="password" placeholder="Ton mot de passe">

                <input type="submit" value="Submit">
            </form>
        </div>
    </div>
    <br>
    <div class="container">
        <h2>Exercice 5</h2>
        <p class="consigne">Intialisez deux cookie : pseudo et login. Créez deux champs afin de donner une valeur aux cookie. Afficher ces cookie sur la même page.</p>
        <div>
        <?php
        setcookie('pseudo', $_POST['pseudo'], time() + 365*24*3600, null, null, false, true); 
        setcookie('login', $_POST['login'], time() + 365*24*3600, null, null, false, true);
        ?>
            <form action="index.php" method="POST">
                <label for="pseudo">Ton peudo</label>
                <input type="text" id="pseudo" name="pseudo" placeholder="Ton pseudo">

                <label for="login">Ton mot de passe</label>
                <input type="text" id="login" name="login" placeholder="Ton login">

                <input type="submit" value="Submit">
            </form>

        <p>Affichage des cookies: le pseudo est <?php echo $_POST['pseudo']; ?> et le login est <?php echo $_POST['login']; ?></p>
        </div>
    </div>
    <br>
    <div class="container">
        <h2>Exercice 6</h2>
        <p class="consigne">Intialisez deux cookie : pseudo et login. Créez deux champs afin de donner une valeur aux cookie. Afficher ces cookie sur une autre page.</p>
        <div>
        
            <form action="exo6.php" method="POST">
                <label for="pseudoExo6">Ton peudo</label>
                <input type="text" id="pseudoExo6" name="pseudoExo6" placeholder="Ton pseudo">

                <label for="loginExo6">Ton mot de passe</label>
                <input type="text" id="loginExo6" name="loginExo6" placeholder="Ton login">

                <input type="submit" value="Submit">
            </form>
        </div>
    </div>
</body>

</html>