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
            // lancement de la requete
            $requete = "SELECT * FROM articles WHERE id = 0";
		
            $resultat = $bdd->query("SELECT * FROM articles WHERE id = 0");
            
            $row1 = $resultat->fetch_all(MYSQLI_ASSOC);
            
            foreach( $row1 as $row2){ 
        ?>

            <h1><?php echo $row2['title']; ?></h1>

            <div id="text">

                <p> <?php echo $row2['article'];?>
                <div id="button">
                    <div>
                        <button class="cssbutton" onclick="window.location.href = 'index.php';">Retour</button>
                    </div>
                    
                    <div>
                        <button class="cssbutton" onclick="window.location.href = 'article.php';">Voir</button><button class="cssbutton">Supprimer</button>
                    </div>
                </div>
            </div>
            
            <div id="author">
                <?php echo $row2['date']; echo" - ";  echo $row2['author']; ?>
            </div>
  <?php     
  }//fermeture du foreach

$bdd->close();
?>
    </body>
</html>