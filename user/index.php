<?php 
    include("../util/middleware.php");
    include("../util/db.php");

    $name = '';
    if (isset($_GET['name'])) {
        $name = $_GET['name'];
        $query = "SELECT * FROM users WHERE name LIKE '%$name%'" ;
    }
    else {
        $query = "SELECT * FROM users";
    }
    $response = mysqli_query($conn, $query);

?>

<?php include("../includes/header.php") ?>

<div class="container">    
    <a class="btn btn-primary" href="./create.php">Crear registro</a>
    <form action="./index.php">
        <input type="search" name="name" value="<?php echo $name; ?>">
    </form>

    <table class="table">

        <thead>

        <tr>
            <th scope="col">ID</th>
            <th scope="col">NAME</th>
            <th scope="col">USERNAME</th>
            <th scope="col">EMAIL</th>
            <th scope="col">DATE</th>  
            <th>Opciones</th>            
        </tr>
    </thead>
    <tbody>
    
        <?php
                while($item = mysqli_fetch_array($response)) {
                echo "
                    <tr>
                        <th>" . $item["id"]. "</th>". 
                        "<th>" . $item["name"]. "</th>".
                        "<th>" . $item["username"]. "</th>".
                        "<th>" . $item["email"]. "</th>".
                        "<th>" . $item["created_at"]. "</th>".
                        "<th>" . 
                            "<a class='btn btn-success' href='./show.php?id=".$item["id"]."'>Show</a>".
                            "<a class='btn btn-primary' href='./edit.php?id=".$item["id"]."'>Edit</a>".
                            "<a class='btn btn-danger' href='./delete.php?id=".$item["id"]."'>Delete</a>". 
                        "</th>".                        
                    "</tr>";
                }
          
        ?>


    </tbody>
    </table>
</div>
    <?php include('../util/alert-message.php'); ?>
</body>
</html>


 
