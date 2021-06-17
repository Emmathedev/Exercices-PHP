<?php
// la fonction isset() pour savoir la variable est défini 
if (isset($_GET['serveur']) && isset($_GET['langage'])){
    echo htmlspecialchars($_GET['serveur']).' '. $_GET['langage'];
} else {
    echo "Il y a une erreur";
}
?>