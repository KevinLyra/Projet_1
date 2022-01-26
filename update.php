<?php
            setlocale(LC_TIME, 'fr_FR');
            date_default_timezone_set('Europe/Paris');
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Nouveau contenu</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css\css.css">
    </head>
    <body> 
            <h1>Titre : <input type="text" id="title" name="title" required></h1>

            <div id="text_insert">
                <textarea type="text" id="article" name="article"></textarea> 
                <div id="button">
                    <div>
                        <button class="cssbutton">Retour</button>
                    </div>
                    
                    <div>
                        <button class="cssbutton">Enregistrer</button>
                    </div>
                </div>
            </div>
            
            <div id="author">
                <?php echo date('l F Y'); ?> - Autheur : <input type="text" id="author" name="author" required> 
            </div>
    </body>
</html>