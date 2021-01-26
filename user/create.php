
<?php 
    include("../util/middleware.php");
    include("../includes/header.php");
?>

<div class="container p-4">
    
    <div class="row">

        <div class="col-md4">

            <div class="card card-body">
                <form action="store.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="name" class="form-control"
                        placeholder="Name" autofocus>
                    </div>

                     <div class="form-group">
                        <input type="text" name="username" class="form-control"
                        placeholder="Username" autofocus>
                    </div>

                    <div class="form-group">
                        <input type="text" name="email" class="form-control"
                        placeholder="Email" autofocus>
                    </div>

                    <div class="form-group">
                        <input type="password" name="password" class="form-control"
                        placeholder="Password" autofocus>
                    </div>
 
                    <input type="submit" class="btn btn-success btn-block" name="save_user" value="Save User">
                        
                </form>
            </div>


        </div>


            <div class="col-md-8">

            </div>


    </div>


</div>

   
<?php include("../includes/footer.php") ?>



