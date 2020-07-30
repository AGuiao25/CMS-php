<?php include "db.php"?>
<link href="css/blog-post.css"> 
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
                    </div>
                



                    <div class="well">
                    <form action="includes/login.php" method="post"> 
                    <div class="form-group">
                    <label for="username">Username</label>
                        <input name="username" type="text" class="form-control" placeholder="Username">
                    </div>
                    <div class="form-group">
                    <label for="user_password">Password</label>
                        <input name="password" type="password" class="form-control" placeholder="Password">
                        <span class="input-group-btn" >
                        <button class="btn btn-primary" name="login" type="submit">log in</button>
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
                    $category_title = $row['cat_title'];    
                    $category_id = $row['cat_id'];          
                    echo "<li><a href='category.php?category= $category_id'>{$category_title}</</li>";
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

  