


<?php
if(isset($_GET['p_id'])) {
    $the_post_id = $_GET['p_id'];
}
    $query = "SELECT * FROM users WHERE user_id = $the_post_id";
    $select_posts_by_id = mysqli_query($connection, $query);
    // header("Location: posts.php");
    confirmResult( $select_posts_by_id);
    while($row=mysqli_fetch_assoc($select_posts_by_id )) {
        $user_id = $row['user_id'];
    $username= $row['username'];
    $user_password = $row['user_password'];
    $user_firstname = $row['user_firstname'];
    $user_lastname = $row['user_lastname'];
    $user_email = $row['user_email'];
    $user_image = $row['user_image'];
    $user_role = $row['user_role'];

}
if(isset($_POST['update_user'])) {
    $user_id = $_POST['user_id'];
    $username= $_POST['username'];
    $user_password = $_POST['user_password'];
    $user_firstname = $_POST['user_firstname'];
    $user_lastname = $_POST['user_lastname'];
    $user_email = $_POST['user_email'];
    // $user_image = $row['user_image'];
    $user_role =  $_POST['user_role'];


    // move_uploaded_file( $post_image_temp,"../images/$post_image");

    // if(empty($post_image)) {
    //     $query = "SELECT * FROM posts WHERE post_id = $the_post_id";
    //     $select_image = mysqli_query($connection, $query);
    //     while($row = mysqli_fetch_array($select_image)) {
    //         $post_image = $row['post_image'];
    //     }
    // }

    // $query = "UPDATE posts SET ";
    // $query .="post_title = '{post_title}', ";
    // $query .="post_category_id = '{post_category_id}', ";
    // $query .="post_date = now(), ";
    // $query .="post_author = '{post_author}', ";
    // $query .="post_status = '{post_status}', ";
    // $query .="post_tags = '{post_tags}', ";
    // $query .="post_content = '{post_content}', ";
    // $query .="post_image = '{post_image}' ";
    // $query .="WHERE post_id = {$the_post_id}";
    // echo "$query";
    // $update_post = mysqli_query($connection, $query);

    // if(!$update_post) {
    //     die("QUERY FAILED" . mysqli_error($connection));
    // }
    $query = "UPDATE users SET ";
    $query .="username = '{$username}', ";
    $query .="user_password = '{$user_password}', ";
    $query .="user_firstname = '{$user_firstname}', ";
    $query .="user_lastname = '{$user_lastname}', ";
    $query .="user_email = '{$user_email}', ";
    $query .="user_role = '{$user_role}' ";
    $query .="WHERE user_id = {$the_post_id}";
    $result = mysqli_query($connection,  $query);

    // confirmResult($result);
    if(!$result) {
        die("QUERY FAILED ." . mysqli_error($connection));
    

 }


}

?>    



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
                    <button class="btn btn-primary" name="update_user" type="submit">Update User</button>
          </div>
                            
    </form>