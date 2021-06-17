<?php
// la fonction isset() pour savoir la variable est défini 
if (isset($_GET['serveur']) && isset($_GET['langage'])){
    echo 'le serveur est ' . $_GET['serveur'] . ' et le langage est ' . $_GET['langage'];
} else {
    echo "Il y a une erreur: serveur ou non exitant";
}
?>