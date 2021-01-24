
<?php 
    include("../util/middleware.php");
    include("../includes/header.php"); 
?>

<div class="container p-4">
    
    <div class="row">

        <div class="col-md4">

            <div class="card card-body">
                <form action="store.php" method="GET">
                    <div class="form-group">
                        <input type="text" name="title" class="form-control"
                        placeholder="Task title" autofocus>
                    </div>
                    <div class="form-group">
                        <textarea name="description" id=""rows="2" class="form-control"
                        placeholder= "Task description"></textarea>
                    </div>
                    <input type="submit" class="btn btn-success btn-block" name="save_task" value="Save Task">
                </form>
            </div>


        </div>


            <div class="col-md-8">

            </div>


    </div>


</div>


<?php include("../includes/footer.php") ?>



