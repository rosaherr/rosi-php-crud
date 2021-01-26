<?php 
    include("../util/middleware.php");     
    include("../util/db.php");

    if (isset($_GET["id"])) {
        $query = " SELECT * FROM `users` WHERE id= ". $_GET["id"];
        $response = mysqli_query($conn, $query);
        $item = mysqli_fetch_array($response);
    }
?>

<?php include("../includes/header.php") ?>

<div class="container">
    <a class="btn btn-link link" href="./index.php">Users list</a>
    <form action="update.php" method="post">

        <input type="hidden" name="id" value="<?php echo $item["id"]; ?>" >

        <div>
            <label for="">Name</label>
            <input type="text" name="name" value="<?php echo $item["name"]; ?>" required>
        </div>
        
        <div>
            <label for="">Username</label>
            <input type="text" name="username" value="<?php echo $item["username"]; ?>" required>
        </div>

        <div>
            <label for="">Email</label>
            <input type="text" name="email" value="<?php echo $item["email"]; ?>" required>
        </div>

        <div>
            <label for="">Password</label>
            <input type="text" name="password" value="<?php echo $item["password"]; ?>" required>
        </div>
        
    
        <h3>DATE: <?php echo $item["created_at"]; ?> </h3>
        <button type="submit" class="btn-primary">Actualizar</button>
    </form>
        

        
  
</div>
    <?php include('../util/alert-message.php'); ?>
    <?php include('../util/alert-message.php'); ?>
</body>
</html>
