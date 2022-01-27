<?php
            include("config/bdd.php");
            setlocale(LC_TIME, 'fr_FR');
            date_default_timezone_set('Europe/Paris');
            require("config/recup_bdd.php");
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
        if(!empty($_POST['title'] && $_POST['article'] && $_POST['author'])){
                    
            $update= $bdd->prepare("UPDATE articles SET title=?,article=?,author=? WHERE id= ?");
            $update->bind_param('sssd' ,$_POST['title'], $_POST['article'], $_POST['author'], $id_article);
            $execute = $update->execute();

            if($execute == true){
                $msg_succes = " Modifié";
            }else{
                $msg_error = " Refusé";
            }
        }


        if(isset($msg_error)){ 
        echo $msg_error;

        }elseif(isset($msg_succes)){
        echo $msg_succes;
        }

        $supprimer_article = $bdd->prepare("DELETE FROM articles WHERE id=?");
        $supprimer_article->bind_param('sssd' ,$_POST['title'], $_POST['article'], $_POST['author'], $id_article);
        $execute = $supprimer_article->execute();

        ?>
            <form action="update.php?id=<?=$id_article?>" method="post">

            <h1>Titre : <input type="text" id="title" name="title" value=<?php echo $row1['title']; ?> required></h1>

            <div id="text_insert">

                <textarea type="text" id="article" name="article" ><?php echo $row1['article'];?></textarea>  
                <div id="button">
                    <div>
                        <button class="cssbutton" onclick="window.location.href = 'index.php';">Retour</button>
                    </div>
                    
                    <div>
                    <button class="cssbutton" type="submit" id="submit">Enregistrer</button><button class="cssbutton">Supprimer</button>
                    </div>
                </div>
            </div>
            
            <div id="author">
            <?= date('l F Y'); ?> - Autheur :<input type="text" id="author" name="author" value="<?= $row1['author']; ?>" required> 
            </div>

    </body>
</html>