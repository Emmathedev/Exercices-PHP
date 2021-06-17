<?php
echo $_SERVER['SERVER_NAME'];  //sert à récuperer les informations du serveur
// la fonction isset() pour savoir la variable est défini 
if (isset($_GET['serveur'])){
    echo 'le serveur est ' . $_GET['serveur'];
} else {
    echo "Il y a une erreur: serveur non exitant";
}
?>