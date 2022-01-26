<?php
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $base = 'projet_1';

    //On établit la connexion
    $bdd = new mysqli($servername, $username, $password, $base);

    //On vérifie la connexion
    if($bdd->connect_error){
        die('Erreur : ' .$bdd->connect_error);
    }
    echo 'Connexion réussie';

?>