<?php 
    include("../util/middleware.php");
    include("../util/db.php")         
?>
<?php 
    if (isset($_GET["id"])) {
        $query = " SELECT * FROM `users` WHERE id= ". $_GET["id"];
        $response = mysqli_query($conn, $query);
        $item = mysqli_fetch_array($response);
    }
?>

<?php include("../includes/header.php") ?>

<div class="container">
    <a class="btn btn-link link" href="./index.php">Users List</a>
    
    <h3>ID: <?php echo $item["id"]; ?> </h3>
    <h3>NAME: <?php echo $item["name"]; ?> </h3>
    <h3>USERNAME: <?php echo $item["username"]; ?> </h3>
    <h3>EMAIL: <?php echo $item["email"]; ?> </h3>
    <h3>DATE: <?php echo $item["created_at"]; ?> </h3>
        

        
  
</div>
    
</body>
</html>
