<?php include "db.php"?>
 <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4 ">
                <!-- Blog Search Well -->
                <div class="well">
                    <h4>Blog Search</h4>
                    <form action="search.php" method="post"> 
                    <div class="input-group">
                        <input name="search" type="text" class="form-control">
                        <span class="input-group-btn">
                            <button name="submit" class="btn btn-default" type="submit">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
                    </div>
                    </form> 
                    <!-- search form -->
                    <!-- /.input-group -->
                </div>

                <!-- Blog Categories Well -->
                <div class="well">
                    <h4>Blog Categories</h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                <?php 
                $query = "SELECT * FROM categories";
                $category_name_query = mysqli_query($connection, $query);
           
                while($row= mysqli_fetch_assoc($category_name_query)) {
<<<<<<< HEAD
                    $category_title = $row['cat_title'];    
                    $category_id = $row['cat_id'];          
                    echo "<li><a href='category.php?category= $category_id'>{$category_title}</</li>";
=======
                    $category_name = $row['cat_title'];       
                    $category_id = $row['cat_id'];       
                    echo "<li><a href='category.php?category= $category_id'>{$category_name}</</li>";
>>>>>>> 6e76b74c8f2e0530549f2316b3dca3e16e03f9d1
                }
                ?>
                         
                            </ul>
                        </div>
        
                        <!-- /.col-lg-6 -->
                    </div>
                    <!-- /.row -->
                </div> 

  <?php include "widget.php"?>

            </div>

  