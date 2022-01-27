<?php
    if(!empty($_POST['title'] &&  $_POST['article'] && $_POST['author'])){
                
        $insert= $bdd->prepare("INSERT INTO articles (title,article,author) VALUES(?,?,?)");
        $insert->bind_param('sss' ,$_POST['title'], $_POST['article'], $_POST['author']);
    
        //$execute = $bdd->query($insert);
        $execute = $insert->execute();

        if($execute == true){
            $msg_succes = " Ajouté";
        }else{
            $msg_error = " Refusé";
        }
    }


    if(isset($msg_error)){ 
    echo $msg_error;

    }elseif(isset($msg_succes)){
    echo $msg_succes;
    }
?>