<?php 
    include("../util/middleware.php");
    include("../util/db.php");

    $title = '';
    if (isset($_GET['title'])) {
        $title = $_GET['title'];
        // WHERE (username LIKE 'ross') AND (password LIKE 'xx')
        $query = "SELECT * FROM task WHERE (title LIKE '%$title%') AND (user_id LIKE {$_SESSION['id']})" ;
    }
    else {
        // SELECT * FROM `task` WHERE user_id = 2
        $query = "SELECT * FROM task WHERE user_id = " . $_SESSION['id'] ;
    }
    $response = mysqli_query($conn, $query);

?>

<?php include("../includes/header.php") ?>

<div class="container">    
    <a class="btn btn-primary" href="./create.php">Crear registro</a>
    <form action="./index.php">
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
                echo "
                    <tr>
                        <th>" . $item["id"]. "</th>". 
                        "<th>" . $item["title"]. "</th>".
                        "<th>" . $item["description"]. "</th>".
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


 
