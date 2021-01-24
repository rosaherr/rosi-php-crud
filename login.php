<?php
    session_start();
    if(isset($_SESSION['user'])) {
        header('Location: task/index.php');
    } 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
<form action="autenticacion.php" method="post" >
    <div class="form-element">
        <label>Usuario</label>
        <input type="text" name="usuario" pattern="[a-zA-Z0-9]+" required />
    </div>
    <div class="form-element">
        <label>Password</label>
        <input type="text" name="password" required />
    </div>
    <button type="submit" name="login" value="acceso">Acceder</button>
</form> 
</body>
</html>