<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP MYSQL CRUD</title>
    <!--BOOTSTRAP 4 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">


</head>
<body>


<nav class="navbar navbar-dark bg-dark navbar-expand-lg ">
    <div class="container-fluid">        
        <a href="index.php" class="navbar-brand">PHP MYSQL CRUD</a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="../task">Tasks</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../user">Users</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../logout.php">Cerrar Sesión</a>
                </li> 

            </ul>
        </div>
        <div class="d-flex" style="width: 200px">
            <p class="text-white">Hola: <?php echo $_SESSION['username']; ?> </p>
        </div>

    </div>
</nav>