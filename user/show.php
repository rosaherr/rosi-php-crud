<?php 
    include("../util/middleware.php");
    include("../util/db.php")         
?>
<?php 
    if (isset($_GET["id"])) {
        $query = " SELECT * FROM `task` WHERE id= ". $_GET["id"];
        $response = mysqli_query($conn, $query);
        $item = mysqli_fetch_array($response);
    }
?>

<?php include("../includes/header.php") ?>

<div class="container">
    <a class="btn btn-link link" href="./index.php">Task list</a>
    
    <h3>ID: <?php echo $item["id"]; ?> </h3>
    <h3>TITLE: <?php echo $item["title"]; ?> </h3>
    <h3>DESCRIPTION: <?php echo $item["description"]; ?> </h3>
    <h3>DATE: <?php echo $item["created_at"]; ?> </h3>
        

        
  
</div>
    
</body>
</html>
