<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice Partie 6</title>
    <link href="style.css" rel="stylesheet">
</head>

<body>
    <h1>Exercices partie 6</h1>



    <h2>Exercice 1</h2>
    <!-- Créez un formulaire avec les champs "nom" et "prénom". 
    À l'envoie du formulaire sur une autre page, Affichez les informations saisies. -->

    <!-- action indique vers quelle page rediriger le formulaire -->
    <!-- methode d'envoie transferer les données: GET ou POST -->
    <form action="exo1.php" method="POST">
        <p><label for="prenom">Prénom: <input type="text" id="prenom" name="prenom"></label>
            <label for="nom">Nom:<input type="text" id="nom" name="nom"></label>
            <input type="submit">
        </p>
    </form>


    <h2>Exercice 2</h2>
    <!-- Créer un formulaire avec les champs "nom" et "prénom". 
    À l'envoie du formulaire sur une autre page, Affichez les informations saisies. 
    Les champs doivent être renseignés. Vérifiez la saisie. -->
    <form action="exo2.php" method="POST">
        <p><label for="exo2Prenom">Prénom:<input type="text" id="exo2Prenom" name="exo2Prenom"></label>
            <label for="exo2Nom">Nom:<input type="text" id="exo2Nom" name="exo2Nom"></label>
        </p>
        <input type="submit">
    </form>

    <h2>Exercice 3</h2>
    <!-- Créez un formulaire avec les champs "civilité", "nom" et "prénom". À l'envoie du formulaire sur une autre page, 
   Affichez les informations saisies. Les champs doivent être renseignés. Vérifiez la saisie. Empêchez l'inclusion de balises html. -->
    <form action="exo3.php" method="post">
        <select name="civilite">
            <option value="choix1">Monsieur</option>
            <option value="choix2">Madame</option>
        </select>
        <label for="lastName">Nom</label>
        <input type="text" name="lastName" placeholder="Votre nom" id="lastName">
        <label for="firstName">Prénom</label>
        <input type="text" name="firstName" placeholder="Votre prénom" id="firstName">
        <input type="submit" value="Valider">
    </form>


    <!--Rejex de Louiza "/^[A-Z\.\-]+[A-Za-z\.\-]+[^0-9]$/" -->


    <h2>Exercice 4</h2>
    <!-- Créez un formulaire avec les champs "civilité", "nom" et "prénom". À l'envoie du formulaire sur la même page, 
    Affichez les informations saisies. Les champs doivent être renseignés. Vérifiez la saisie. 
    Empêchez l'affichage de balises html. -->
    <?php
    if (empty($_POST['firstName1']) && empty($_POST['lastName1'])) {
    ?>
        <form method="post" action="index.php">
            <select name="civilite1">
                <option>Mr</option>
                <option>Mme</option>
            </select>
            <label>Nom</label>
            <input type="text" name="lastName1" placeholder="Votre nom" required>
            <label>Prénom</label>
            <input type="text" name="firstName1" placeholder="Votre prénom" required>
            <input type="submit" name="valider" value="Valider" />
        </form>
    <?php
    } else {
        if (isset($_POST['firstName1']) && isset($_POST['lastName1']) && isset($_POST['civilite1'])) {
            echo strip_tags('Bonjour ' . ' ' . $_POST['civilite1'] . ' ' . $_POST['firstName1'] . ' ' . $_POST['lastName1'] . ' !');
        }
    }
    ?>

    <h2>Exercice 5</h2>
    <!-- Créez un formulaire avec les champs "civilité", "nom" et "prénom" ainsi qu'un bouton permettant de sélectionner 
un fichier à envoyer. À l'envoie du formulaire sur la même page, affichez les informations saisies. 
Les champs doivent être renseignés. Vérifiez la saisie. Empêchez l'affichage de balises html. -->
    <form action="index.php" method="post" action="cible_envoi.php" method="post" enctype="multipart/form-data">
        <select name="civilite">
            <option value="Mr">Monsieur</option>
            <option value="Mme">Madame</option>
        </select>
        <label for="" lastName>Nom</label>
        <input type="text" name="lastName" placeholder="Votre nom" id="lastName" required>
        <label for="firstName">Prénom</label>
        <input type="text" name="firstName" placeholder="Votre prénom" id="firstName" required>
        <!-- Si on propose un formulaire d'envoie de fichier, tjs rajouter l'attribut enctype (le nav sait qu'il va envoyer des fichiers) -->
        <p>Formulaire d'envoi de fichier
            <input type="file" name="monfichier" id="monfichier">
            <input type="submit" value="Envoyer le fichier">
        </p>
    </form>

    <?php
    if (isset($_POST['lastName']) && isset($_POST['firstName'])) {
        echo 'Bonjour' . $_POST['civilite'] . ' ' . strip_tags($_POST['firstName']) . ' ' . strip_tags($_POST['lastName']);
    } else {
        echo "Veuillez saisir des lettres ! ";
    }
    ?>
    <!-- On teste d'abord si le fichier à été envoyé et s'il n'y a pas d'erreur -->
    <?php
    if (isset($_FILES['monfichier']) and $_FILES['monfichier']['error'] == 0) {

        // On teste si le fichier n'est pas trop gros
        if ($_FILES['monfichier']['size'] <= 1000000) {
            // Testons si l'extension est autorisée
            $infosfichier = pathinfo($_FILES['monfichier']['name']);
            $extension_upload = $infosfichier['extension'];
            $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
            if (in_array($extension_upload, $extensions_autorisees)) {
                // valider le fichier et le stocker définitivement
                move_uploaded_file($_FILES['monfichier']['tmp_name'], 'uploads/' . basename($_FILES['monfichier']['name']));
                echo "L'envoi a bien été effectué !";
            }
        }
    }
    ?>

    <h2>Exercice 6</h2>
    <!-- Créez un formulaire avec les champs "civilité", "nom" et "prénom" ainsi qu'un bouton permettant de sélectionner 
    un fichier à envoyer. À l'envoie du formulaire sur la même page, affichez les informations saisies. 
    Les champs doivent être renseignés. Vérifiez la saisie. Empêchez l'affichage de balises html. 
    Le fichier envoyé doit être un pdf. -->
    <form action="index.php" method="post" action="cible_envoi.php" method="post" enctype="multipart/form-data">
        <select name="civilite">
            <option value="Mr">Monsieur</option>
            <option value="Mme">Madame</option>
        </select>
        <label for="" lastName>Nom</label>
        <input type="text" name="lastName" placeholder="Votre nom" id="lastName" required>
        <label for="firstName">Prénom</label>
        <input type="text" name="firstName" placeholder="Votre prénom" id="firstName" required>
        <!-- Si on propose un formulaire d'envoie de fichier, tjs rajouter l'attribut enctype (le nav sait qu'il va envoyer des fichiers) -->
        <p>Formulaire d'envoi de fichier
            <input type="file" name="monfichier" id="monfichier">
            <input type="submit" value="Envoyer le fichier">
        </p>
    </form>

    <?php
    if (isset($_POST['lastName']) && isset($_POST['firstName'])) {
        echo 'Bonjour' . $_POST['civilite'] . ' ' . strip_tags($_POST['firstName']) . ' ' . strip_tags($_POST['lastName']);
    } else {
        echo "Veuillez saisir des lettres ! ";
    }
    ?>
    <!-- On teste d'abord si le fichier à été envoyé et s'il n'y a pas d'erreur -->
    <?php
    if (isset($_FILES['monfichier']) and $_FILES['monfichier']['error'] == 0) {

        // On teste si le fichier n'est pas trop gros
        if ($_FILES['monfichier']['size'] <= 1000000) {
            // Testons si l'extension est autorisée
            $infosfichier = pathinfo($_FILES['monfichier']['name']);
            $extension_upload = $infosfichier['extension'];
            $extensions_autorisees = array('pdf');
            if (in_array($extension_upload, $extensions_autorisees)) {
                // valider le fichier et le stocker définitivement
                move_uploaded_file($_FILES['monfichier']['tmp_name'], 'uploads/' . basename($_FILES['monfichier']['name']));
                echo "L'envoi a bien été effectué !";
            }
        }
    }
    ?>

</body>

</html>