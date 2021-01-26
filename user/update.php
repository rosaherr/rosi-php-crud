<?php 
    include("../util/middleware.php"); 
    include("../util/db.php"); 
    //session_start();

    if (!isset($_POST["id"])) {
        header("Location: index.php");
        return;
    }

    $id = $_POST["id"];
    $name = $_POST["name"];
    $username = $_POST["username"];
    $email = $_POST["email"];
 
    $query = "UPDATE `users` SET `name`= '$name', username  = '$username', email = '$email' WHERE `users`.`id` = " . $id;
    
    $response = mysqli_query($conn, $query);

    if($response) {
        $_SESSION ['message'] = 'Usuario ' .$username. ' Actualizado Satisfactoriamente ';
        header("Location: edit.php?id=". $id);
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }

    mysqli_close($conn);
    
