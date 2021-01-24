<?php 
    include("../util/middleware.php"); 
    include("../util/db.php"); 
    //session_start();

    if (!isset($_POST["id"])) {
        header("Location: index.php");
        return;
    }

    $id = $_POST["id"];
    $title = $_POST["title"];
    $description = $_POST["description"];

    // UPDATE `task` SET `title` = 'CREATE A PITZAYETE12', `description` = 'jkhkjhkjh2' WHERE `task`.`id` = 6;

    $query = "UPDATE `task` SET `title`= '$title', description  = '$description' WHERE `task`.`id` = " . $id;
    
    
    $response = mysqli_query($conn, $query);

    if($response) {
        $_SESSION ['message'] = 'Tarea Actualizada Satisfactoriamente ';
        header("Location: edit.php?id=". $id);
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }

    mysqli_close($conn);
    
