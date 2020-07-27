
<?php 
include "includes/header.php";
include "functions.php";
ob_start();
?>
    <div id="wrapper">

        <!-- Navigation -->
        <?php 
include "includes/navigation.php";

?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Welcome!
                            <small>Author</small>
                        </h1>
                        <div class="col-xs-6">   
                    <?php insert_categories(); ?>
                    <!-- ADD CATEGORIES -->
                        <form action="" method="post" >
                            <label for="cat_title">Add Category</label>
                            <div class="form-group"> 
                                <input type="text" class="form-control" name="cat_title">
                            </div>
                           <div class="form-group">
                           <button class="btn btn-primary" name="submit" type="submit">Add Category</button>
                           </div>
                        </form>
                        <!-- EDIT CATEGORIES -->
                  <?php 
                    if(isset($_GET['edit'])) {
                        $cat_id = $_GET['edit'];
                        include "includes/update_categories.php";
                    }

                    ?>
                    </div> 
          <!-- end of add form -->
   

                <div class="col-xs-6">

          
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Category Title</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                            <?php findAllCategories();?>   
                            <?php  deleteCategories();?>
                                    </tbody>
                                </table>

                            </div>   
                    </div>
                      
        
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

   
<?php 
include "includes/footer.php";

?>