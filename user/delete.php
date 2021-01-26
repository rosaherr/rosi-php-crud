<?php 

    include("../util/middleware.php"); 
    include("../util/db.php");

    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $query =  "DELETE FROM users WHERE users.id = $id";
        $response = mysqli_query($conn, $query);

        $_SESSION ['message'] = 'Usuario' .$username. 'Removido Satisfactoriamente ';
    }
    
    header("Location: index.php");

?>

 