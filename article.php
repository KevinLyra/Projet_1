<?php
            include("config/bdd.php");
            setlocale(LC_TIME, 'fr_FR');
            date_default_timezone_set('Europe/Paris');
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Article</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css\css.css">
    </head>
    <body> 
    <?php

            $id_article = $_GET['id'];
            // lancement de la requete
            $requete = "SELECT * FROM articles WHERE id = $id_article";
		
            $resultat = $bdd->query($requete);
            
            $row1 = $resultat->fetch_assoc();

        ?>

            <h1><?php echo $row1['title']; ?></h1>

            <div id="text">

                <p> <?php echo $row1['article'];?>
                <div id="button">
                    <div>
                        <button class="cssbutton" onclick="window.location.href = 'index.php';">Retour</button>
                    </div>
                    
                    <div>
                        <button class="cssbutton" onclick="window.location.href = 'update.php?id=<?=$id_article?>';">Editer</button><button class="cssbutton">Supprimer</button>
                    </div>
                </div>
            </div>
            
            <div id="author">
                <?php echo $row1['date']; echo" - ";  echo $row1['author']; ?>
            </div>

    </body>
</html>