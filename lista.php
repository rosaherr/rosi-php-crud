<?php 
    include("util/middleware.php");
    include("util/db.php");

    $title = '';
    if (isset($_GET['title'])) {
        $title = $_GET['title'];
        $query = "SELECT * FROM task WHERE title LIKE '%$title%'" ;
    }
    else {
        $query = "SELECT * FROM task";
    }
    $response = mysqli_query($conn, $query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <a class="btn btn-link link" href="./logout.php">Cerrar sesion</a>
    <a class="btn btn-link link" href="./create.php">Crear registro</a>
    <form action="./lista.php">
        <input type="search" name="title" value="<?php echo $title; ?>">
    </form>

    <table class="table">

        <thead>

        <tr>
            <th scope="col">ID</th>
            <th scope="col">TITLE</th>
            <th scope="col">DESCRIPTION</th>
            <th scope="col">DATES</th> 
            <th>Opciones</th>            
        </tr>
    </thead>
    <tbody>
    
        <?php
                while($item = mysqli_fetch_array($response)) {
                echo "<tr>
                        <th>" . $item["id"]. "</th>". 
                        "<th>" . $item["title"]. "</th>".
                        "<th>" . $item["description"]. "</th>".
                        "<th>" . $item["created_at"]. "</th>".
                        "<th> <a href='./show.php?id=".$item["id"]."'>ver</a>" . "</th>".
                        //"<th>". "DELETE FROM php-mysql-crud WHERE id" = '$item'."'>borrar</a>" . "</th>".
                        "<th> <a href='./delete_task.php?id=".$item["id"]."'>eliminar</a>" . "</th>".
                        "<th> <a href='./edit.php?id=".$item["id"]."'>Editar</a>" . "</th>".
                        
                    "</tr>";
                }
          
        ?>


    </tbody>
    </table>
</div>
    <?php include('util/alert-message.php'); ?>
</body>
</html>


<?php 
    // $query = " SELECT * FROM `task`";
    // $response = mysqli_query($conn, $query);

    while($item = mysqli_fetch_array($response)) {
        echo "ID: ".$item['id']."----------- ";
        echo "- TItle: ".$item['title']."----------- ";
        echo "- Description: ".$item['description']."<br/>";    
    }
    
    
?>

