<?php
   $usuario = $_POST['usuario'];
   $password = $_POST['password'];

    if ($usuario=="xx" && $password=="xx")  {
        session_start();
        $_SESSION['user'] = "rosita";
        header("Location: lista.php");
    } else {
        header("Location: login.php");
    }