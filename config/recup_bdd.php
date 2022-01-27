<?php

            $id_article = $_GET['id'];
            // lancement de la requete
            $requete = "SELECT * FROM articles WHERE id = $id_article";
		
            $resultat = $bdd->query($requete);
            
            $row1 = $resultat->fetch_assoc();

        ?>