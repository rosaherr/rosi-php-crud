<?php
    include("../util/db.php");
    include("../util/middleware.php");


    if(isset($_POST['save_user'])){
        $name= $_POST['name'];
        $email= $_POST['email'];
        $username= $_POST['username'];
        $password= $_POST['password'];

        $query= "INSERT INTO users(name, email, username, password) VALUES ('$name', '$email', '$username', '$password')";
        $result= mysqli_query($conn, $query);
        if(!$result){
            die("Query failed");

        }
        $_SESSION ['message'] = 'Usuario ' .$username. ' creado Satisfactoriamente ';
        header("Location: index.php");
    }


?>