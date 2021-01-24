<?php
    include("util/db.php");
    include("util/middleware.php");


    if(isset($_GET['save_task'])){
        $title= $_GET['title'];
        $description= $_GET['description'];

        $query= "INSERT INTO task(title, description) VALUES ('$title', '$description')";
        $result= mysqli_query($conn, $query);
        if(!$result){
            die("Query failed");

        }
        $_SESSION ['message'] = 'Tarea ' .$title. ' creada Satisfactoriamente ';
        header("Location: lista.php");
    }


?>