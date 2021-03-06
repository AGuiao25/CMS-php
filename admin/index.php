
<?php 
include "includes/header.php";

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
                            <small> <?php echo $_SESSION['firstname'];?></small>
                            
                       
                        </h1>
               
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-file-text fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">

                    <?php
                    $query = "SELECT * FROM posts";
                    $select_post = mysqli_query($connection,$query);
                    $number_of_posts = mysqli_num_rows($select_post);
                        echo "<div class='huge'>$number_of_posts </div>";
                    ?>
                 
                        <div>Posts</div>
                    </div>
                </div>
            </div>
            <a href="posts.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-green">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-comments fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                    <?php
                    $query = "SELECT * FROM comments";
                    $select_comments = mysqli_query($connection,$query);
                    $number_of_comments = mysqli_num_rows($select_comments);
                        echo "<div class='huge'>$number_of_comments</div>";
                    ?>
                      <div>Comments</div>
                    </div>
                </div>
            </div>
            <a href="comments.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-yellow">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-user fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                    <?php
                    $query = "SELECT * FROM users";
                    $select_users = mysqli_query($connection,$query);
                    $number_of_users = mysqli_num_rows($select_users);
                        echo "<div class='huge'>$number_of_users</div>";
                    ?>
                        <div> Users</div>
                    </div>
                </div>
            </div>
            <a href="users.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-red">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-list fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                    <?php
                    $query = "SELECT * FROM categories";
                    $select_categories = mysqli_query($connection,$query);
                    $number_of_categories = mysqli_num_rows($select_categories);
                        echo "<div class='huge'>$number_of_categories</div>";
                    ?>
                         <div>Categories</div>
                    </div>
                </div>
            </div>
            <a href="categories.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
</div>
<?php

$query = "SELECT * FROM posts WHERE post_status = 'draft'";
$select_post = mysqli_query($connection,$query);
$number_of_draft_posts = mysqli_num_rows($select_post);

$query = "SELECT * FROM posts WHERE post_status = 'published'";
$select_post = mysqli_query($connection,$query);
$number_of_published_posts = mysqli_num_rows($select_post);


    $query = "SELECT * FROM comments WHERE comment_status = 'unapproved'";
    $select_unapproved_comments = mysqli_query($connection,$query);
    $number_of_unapproved_comments = mysqli_num_rows($select_unapproved_comments);


$query = "SELECT * FROM users WHERE user_role = 'subscriber'";
$select_users = mysqli_query($connection,$query);
$number_of_subscriber = mysqli_num_rows($select_users);


?>



<div class="row">
<script type="text/javascript">
      google.charts.load('visualization', '1.1', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Data', 'Count'],
<?php 

$element_text = ['All Posts','Active Posts', 'Draft Posts',  'Comments', 'Pending Comments', 'User', 'Subscribers', 'Categories'];
$element_count =[ $number_of_posts, $number_of_published_posts, $number_of_draft_posts, $number_of_comments, $number_of_unapproved_comments, $number_of_users, $number_of_subscriber, $number_of_categories];

 for($i=0; $i<8; $i++) {
     echo "['{$element_text[$i]}'" . "," . "'{$element_count[$i]}'],";
 }


?>

        //   ['Posts', 1000]
     
        ]);
    
        var options = {
          chart: {
            title: '',
            subtitle: '',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));
   
        chart.draw(data, options);
      }
    </script>
        <div id="columnchart_material" style="width:'auto'; height: 500px;"></div>


</div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

   
<?php 
include "includes/footer.php";

?>