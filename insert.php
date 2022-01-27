<?php
            include("config/bdd.php");
            setlocale(LC_TIME, 'fr_FR');
            date_default_timezone_set('Europe/Paris');

            require("config/insert_bdd.php");    
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Nouveau contenu</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css\css.css">
    </head>
    <body> 

        <form action="insert.php" method="post">
            
            <h1>Titre : <input type="text" id="title" name="title" required></h1>

            <div id="text_insert">
                <textarea type="text" id="article" name="article" required></textarea> 
                <div id="button">
                    <div>
                        <button class="cssbutton"onclick="window.location.href = 'index.php';">Retour</button>
                    </div>
                    
                    <div>
                        <button class="cssbutton" type="submit" id="submit">Enregistrer</button>
                    </div>
                </div>
            </div>
            
            <div id="author">
                <?php echo date('l F Y'); ?> - Autheur : <input type="text" id="author" name="author" required> 
            </div>
        </form>
    </body>
</html>