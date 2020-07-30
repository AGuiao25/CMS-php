<?php 
if(isset($_POST['create_user'])) {
    $user_id = $_POST['user_id'];
    $username= $_POST['username'];
    $user_password = $_POST['user_password'];
    $user_firstname = $_POST['user_firstname'];
    $user_lastname = $_POST['user_lastname'];
    $user_email = $_POST['user_email'];
    // $user_image = $row['user_image'];
    $user_role = $row['user_role'];
        $randSalt = $row['randSalt'];

    // $post_image = $_FILES['image']['name'];
    // $post_image_temp = $_FILES['image']['tmp_name'];

    // move_uploaded_file( $post_image_temp,"../images/$post_image");
   
    $query = "INSERT INTO users(username, user_password, user_firstname, user_lastname, user_email, user_role,randSalt) ";
    $query .= "VALUES ('{$username}','{$user_password}','{$user_firstname}','{$user_lastname}','{$user_email}', '{$user_role}', '{$randSalt}')" ;

    $add_user_query = mysqli_query($connection, $query);

    if (!$add_user_query) {
        echo die("QUERY FAILED." . mysqli_error($connection));
    }


}

?>

<form action="" method="post" enctype="multipart/form-data">
                          
                                    <div class="form-group"> 
                                    <label for="post_title">First Name</label>
                                        <input type="text" class="form-control" name="user_firstname">
                                    </div>
                                      
                                    <div class="form-group"> 
                                    <label for="post_author">Last Name</label>
                                        <input type="text" class="form-control" name="user_lastname">
                                    </div>
                                    <select name="user_role" id=""> 
                                    <option value="subscriber">Select One</option>
                                    <option value="admin">Admin</option>
                                    <option value="subscriber">Subscriber</option>
                                    </select>
                                
                                    <!-- <div class="form-group"> 
                                      <select name="user_role" id="">
                                       <?php
                                         $query = "SELECT * FROM users";
                                         $select_users = mysqli_query($connection,  $query);
                                         while($row= mysqli_fetch_assoc($select_users)) {  
                                             $user_id = $row['user_id'];
                                             $user_role = $row['user_role'];
                                            
                                             echo "<option value='{$user_id}'>{$user_role}</option>";
                                         }
                                    ?>
                                      </select>
                                    </div>  
                         
                              -->
                                    <div class="form-group"> 
                                    <label for="post_status">Username</label>
                                        <input type="text" class="form-control" name="username">
                                    </div>
                                 
                                    <!-- <div class="form-group"> 
                                    <label for="post_image">Image</label>
                                        <input type="file"   name="post_image">
                                    </div>
                                   -->
                                    <div class="form-group"> 
                                    <label for="post_tags">Password</label>
                                        <input type="password" name="user_password" class="form-control" >
                                    </div>
                                
                                    <div class="form-group"> 
                                    <label for="post_tags">Email</label>
                                        <input type="email" class="form-control" name="user_email">
                                    </div>
                           
                                    
                                     <div class="form-group">
                    <button class="btn btn-primary" name="create_user" type="submit">Add User</button>
          </div>
                            
    </form>