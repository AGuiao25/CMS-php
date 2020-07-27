<?php 
if(isset($_POST['create_post'])) {
    $post_title = $_POST['post_title'];
    $post_author = $_POST['post_author'];
    $post_date = date('d-m-y');
    $post_comment_count = 4;
    $post_status = $_POST['post_status'];
    $post_tags = $_POST['post_tags'];
    $post_content = $_POST['post_content'];
    $post_category_id = $_POST['post_category'];

    $post_image = $_FILES['image']['name'];
    $post_image_temp = $_FILES['image']['tmp_name'];

    move_uploaded_file( $post_image_temp,"../images/$post_image");
   
    $query = "INSERT INTO posts(post_title, post_category_id, post_author, post_date, post_image, post_content, post_tags, post_comment_count, post_status) ";
    $query .= "VALUES ('{$post_title}','{$post_category_id}','{$post_author}',now(),'{$post_image}','{ $post_content}','{$post_tags}','{$post_comment_count}','{$post_status}')" ;

    $add_post_query = mysqli_query($connection, $query);

    if (!$add_post_query) {
        echo die("QUERY FAILED." . mysqli_error($connection));
    }


}

?>

<form action="" method="post" enctype="multipart/form-data">
                          
                                    <div class="form-group"> 
                                    <label for="post_title">Post Title</label>
                                        <input type="text" class="form-control" name="post_title">
                                    </div>
                                
                                    <div class="form-group"> 
                                      <select name="post_category" id="">
                                       <?php
                                         $query = "SELECT * FROM categories";
                                         $select_categories = mysqli_query($connection,  $query);
                                         while($row= mysqli_fetch_assoc($select_categories)) {  
                                             $cat_id = $row['cat_id'];
                                             $cat_title = $row['cat_title'];
                                            
                                             echo "<option value='{$cat_id}'>{$cat_title}</option>";
                                         }
                                    ?>
                                      </select>
                                    </div> 
                           
                                    <div class="form-group"> 
                                    <label for="post_author">Post Author</label>
                                        <input type="text" class="form-control" name="post_author">
                                    </div>
                             
                                    <div class="form-group"> 
                                    <label for="post_status">Post Status</label>
                                        <input type="text" class="form-control" name="post_status">
                                    </div>
                                 
                                    <div class="form-group"> 
                                    <label for="post_image">Image</label>
                                        <input type="file" class="form-control" name="post_image">
                                    </div>
                                  
                                    <div class="form-group"> 
                                    <label for="post_tags">Post Tags</label>
                                        <input type="text" class="form-control" name="post_tags">
                                    </div>
                                
                                    <div class="form-group">  
                                    <label for="post_content">Post Content</label>
                                        <textarea  class="form-control" name="post_content" id="" cols="30" rows="10"> </textarea>
                                    </div>
                           
                                    
                                     <div class="form-group">
                    <button class="btn btn-primary" name="create_post" type="submit">Create Post</button>
          </div>
                            
    </form>