<?php
    include("../util/db.php");
    include("../util/middleware.php");


    if(isset($_GET['save_task'])){
        $title= $_GET['title'];
        $description= $_GET['description'];

        // $_SESSION['id']
        $query= "INSERT INTO task(title, description, user_id) VALUES ('$title', '$description', {$_SESSION['id']})";
        $result= mysqli_query($conn, $query);
        if(!$result){
            die("Query failed");

        }
        $_SESSION ['message'] = 'Tarea ' .$title. ' creada Satisfactoriamente ';
        header("Location: index.php");
    }


?>