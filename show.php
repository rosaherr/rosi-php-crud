<?php include("util/db.php") ?>
<?php 
    if (isset($_GET["id"])) {
        $query = " SELECT * FROM `task` WHERE id= ". $_GET["id"];
        $response = mysqli_query($conn, $query);
        $item = mysqli_fetch_array($response);
    }
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
    <a class="btn btn-link link" href="./lista.php">Task list</a>
        <h3>ID: <?php echo $item["id"]; ?> </h3>
        <h3>TITLE: <?php echo $item["title"]; ?> </h3>
        <h3>DESCRIPTION: <?php echo $item["description"]; ?> </h3>
        <h3>DATE: <?php echo $item["created_at"]; ?> </h3>
        

        
  
</div>
    
</body>
</html>
