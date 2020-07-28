
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
<<<<<<< HEAD
                <a class="navbar-brand" href="./index.php">Homepage</a>
=======
                <a class="navbar-brand" href="index.php">Home</a>
>>>>>>> 6e76b74c8f2e0530549f2316b3dca3e16e03f9d1
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                <li> <a href="admin">Admin</a></li>
                <?php 
                $query = "SELECT * FROM categories";
                $category_name_query = mysqli_query($connection, $query);
           
                while($row= mysqli_fetch_assoc($category_name_query)) {
                    $category_name = $row['cat_title'];            
                    echo "<li><a href='#'>{$category_name}</</li>";
                }
                ?>
                   
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
