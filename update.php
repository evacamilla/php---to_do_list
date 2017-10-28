<?php
require ('required/database.php');
require ('required/fetch_to_do.php');

if(isset($_POST['updateSubmit'])){
    $keys = array_keys($to_do);
    for($i=0; $i < count($to_do); $i++){
        if(isset($_POST["$i"])){
            $id = $to_do[$keys[$i]]['id'];
            $statement = $pdo->prepare("UPDATE `to_do` SET `completed` = '1' WHERE `to_do`.`id` = $id");
            $statement->execute();
        }
    }
    header('Location:index.php');
}


if(isset($_POST['deleteSubmit'])){
    $keys = array_keys($to_do);
    for($i=0; $i<count($to_do); $i++){
        if(isset($_POST["$i"])){
            $id = $to_do[$keys[$i]]['id'];
            $statement = $pdo->prepare("DELETE FROM to_do WHERE `to_do`.`id` = $id");
            $statement->execute();
        }
    }
    header('Location:index.php');
}