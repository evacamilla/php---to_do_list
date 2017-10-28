<?php    
require ('required/database.php');
require ('required/fetch_to_do.php');
    //GÖR TILL FUNKTION
    if(isset($_POST['newToDoSubmit']) && !empty($_POST['newToDo']) && !empty($_POST['createdBy'])){
        $statement = $pdo->prepare("INSERT INTO to_do (title, createdBy, completed) VALUES (:title, :createdBy, :completed)");
        $statement->execute(array(
           ":title" => $_POST['newToDo'],
           ":createdBy" => $_POST['createdBy'],
           ":completed" => 0, 
        ));
        $message =  "<p class='message'>Du har lagt till " . $_POST['newToDo'] . " i listan!</p>";
        header("Location:index.php?message=$message");
    } else {
        $message = "<p style='color:red;'>Du måste fylla i alla fält för att uppdatera listan.</p>";
        header("Location:index.php?message=$message");
        }