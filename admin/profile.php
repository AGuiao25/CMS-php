
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
<?php


if(isset($_SESSION['username'])) {
    $username = $_SESSION['username'];

$query = "SELECT * FROM users WHERE username = '{$username}' ";
$select_user_profile_query = mysqli_query($connection, $query);

while($row = mysqli_fetch_assoc($select_user_profile_query)) {
    $user_id = $row['user_id'];
    $username= $row['username'];
    $user_password = $row['user_password'];
    $user_firstname = $row['user_firstname'];
    $user_lastname = $row['user_lastname'];
    $user_email = $row['user_email'];
    $user_role = $row['user_role'];
}

}


?>


<?php 

if(isset($_POST['update_user'])) {
    $user_id = $_POST['user_id'];
    $username= $_POST['username'];
    $user_password = $_POST['user_password'];
    $user_firstname = $_POST['user_firstname'];
    $user_lastname = $_POST['user_lastname'];
    $user_email = $_POST['user_email'];
    $user_role =  $_POST['user_role'];



    $query = "UPDATE users SET ";
    $query .="username = '{$username}', ";
    $query .="user_password = '{$user_password}', ";
    $query .="user_firstname = '{$user_firstname}', ";
    $query .="user_lastname = '{$user_lastname}', ";
    $query .="user_email = '{$user_email}', ";
    $query .="user_role = '{$user_role}' ";
    $query .="WHERE username = '{$username}' ";

    $result = mysqli_query($connection,  $query);

    // confirmResult($result);
    if(!$result) {
        die("QUERY FAILED ." . mysqli_error($connection));
    

 }


}




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
                
<form action="" method="post" enctype="multipart/form-data">
                          
                          <div class="form-group"> 
                          <label for="user_firstname">First Name</label>
                              <input value="<?php echo  $user_firstname ?>" type="text" class="form-control" name="user_firstname">
                          </div>
                            
                          <div class="form-group"> 
                          <label for="user_lastname">Last Name</label>
                              <input value="<?php echo  $user_lastname ?>" type="text" class="form-control" name="user_lastname">
                          

                          <div class="form-group"> 
                          <select name="user_role" id=""> 

                          <option value="subscriber"><?php echo $user_role; ?></option>
                          <?php 
                          if($user_role == 'admin') {
                              echo "<option value='subscriber'>subscriber</option>";
                          } else  {
                              echo " <option value='admin'>admin</option>";
                          }

                          
                          ?>
                      
                          </select>
                          </div>
                          <div class="form-group"> 
                          <label for="username">Username</label>
                              <input value="<?php echo  $username ?>" type="text" class="form-control" name="username">
                          </div>
                       
                          <!-- <div class="form-group"> 
                          <label for="post_image">Image</label>
                              <input type="file"   name="post_image">
                          </div>
                         -->
                          <div class="form-group"> 
                          <label for="user_password">Password</label>
                              <input value="<?php echo  $user_password ?>" type="password" name="user_password" class="form-control" >
                          </div>
                      
                          <div class="form-group"> 
                          <label for="user_email">Email</label>
                              <input  value="<?php echo  $user_email ?>" type="email" class="form-control" name="user_email">
                          </div>
                 
                          
                           <div class="form-group">
          <button class="btn btn-primary" name="update_user" type="submit">Update Profile</button>
</div>
                  
</form>
            
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