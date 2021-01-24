<?php 
    include("../util/middleware.php");     
    include("../util/db.php");

    if (isset($_GET["id"])) {
        $query = " SELECT * FROM `task` WHERE id= ". $_GET["id"];
        $response = mysqli_query($conn, $query);
        $item = mysqli_fetch_array($response);
    }
?>

<?php include("../includes/header.php") ?>

<div class="container">
    <a class="btn btn-link link" href="./index.php">Task list</a>
    <form action="update.php" method="post">

        <input type="hidden" name="id" value="<?php echo $item["id"]; ?>" >

        <div>
            <label for="">Titulo</label>
            <input type="text" name="title" value="<?php echo $item["title"]; ?>" required>
        </div>
        
        <div>
            <label for="">Descripcion</label>
            <input type="text" name="description" value="<?php echo $item["description"]; ?>" required>
        </div>
        
    
        <h3>DATE: <?php echo $item["created_at"]; ?> </h3>
        <button type="submit" class="btn-primary">Actualizar</button>
    </form>
        

        
  
</div>
    <?php include('../util/alert-message.php'); ?>
    <?php include('../util/alert-message.php'); ?>
</body>
</html>
