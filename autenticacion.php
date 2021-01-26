<?php
    include("util/db.php");   

    $username = $_POST['username'];
    $password = $_POST['password'];

    // SELECT * FROM `users` WHERE (username LIKE 'ross') AND (password LIKE 'xx')
    $query = "SELECT * FROM `users` WHERE (username LIKE '$username') AND (password LIKE '$password')";   
    
    // this line exec the sql sentence and recieve a response (true, false, list)
    $response = mysqli_query($conn, $query);

    // We know that the response is a list from a table, 
    // this functions return us a register and delete it from the response
    $item = mysqli_fetch_array($response);

    // var_dump($item);
    // return;

    if ($item) {
        
        session_start();
        $_SESSION['username'] = $item['username'];
        $_SESSION['id'] = $item['id'];
        header("Location: task/index.php");        
               
    }  else {        
        header("Location: login.php");
    }
    

        