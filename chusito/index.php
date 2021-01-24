<?php

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM example";
$result = $conn->query($sql);



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
    <a class="btn btn-link link" href="./create.php">Crear registro</a>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">NOMbre</th>
            <th scope="col">OPciones</th>            
        </tr>
    </thead>
    <tbody>
    
        <?php
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <th>" . $row["id"]. "</th>". 
                        "<th>" . $row["nombre"]. "</th>".
                        "<th>".
                            "<a class='btn btn-primary'>Editar</a>". 
                            "<a class='btn btn-primary'>Editar</a>". 
                        "</th>".
                    "</tr>";
                }
            } else {
                echo "0 results";
            }
            $conn->close();
        
        ?>


    </tbody>
    </table>
</div>
    
</body>
</html>