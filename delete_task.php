<?php 

    include("util/middleware.php"); 
    include("util/db.php");

    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $query =  "DELETE FROM task WHERE task.id = $id";
        $response = mysqli_query($conn, $query);
        // if (!$response) {
        //     die("no funciona");
        // }

        $_SESSION ['message'] = 'Tarea Removida Satisfactoriamente ';
    }
    
    header("Location: lista.php");

?>

 