<?php 

if(isset($_POST['nombre'])) {
    echo "SI SE ENVIO EL FORMULARIO {$_POST['nombre']}<BR>";
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "test";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO example (nombre) VALUES ('".$_POST['nombre']."')";

    if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>    

    <div class="container">
    <?php
        if(isset($nuevoRegistro)) {
            echo "<h3>Nuevo registro creado</h3>";
        }
    ?>
    <h2>Crea un nuevo registro</h2>
        <form action="./create.php" method="POST">
            <input name="nombre" required>
            <button type="submit">Guardar</button>
        </form>
    </div>
</body>
</html>
