


<?php
if(isset($_GET['p_id'])) {
    $the_post_id = $_GET['p_id'];
}
    $query = "SELECT * FROM posts";
    $select_posts_by_id = mysqli_query($connection, $query);
    // header("Location: posts.php");
    confirmResult( $select_posts_by_id);
    while($row=mysqli_fetch_assoc($select_posts_by_id )) {
        $post_id = $row['post_id'];
        $post_title = $row['post_title'];
        $post_author = $row['post_author'];
        $post_category_id = $row['post_category_id'];
        $post_image =$row['post_image'];
        $post_status = $row['post_status'];
        $post_tags = $row['post_tags'];
        $post_content = $row['post_content'];
        $post_comment_count = $row['post_comment_count'];
        $post_date = $row['post_date'];

}
if(isset($_POST['update_posts'])) {

    $post_title = $_POST['post_title'];
    $post_author = $_POST['post_author'];
    $post_image = $_FILES['image']['name'];
    $post_image_temp = $_FILES['image']['tmp_name'];
    $post_date = $_POST['post_date'];
    $post_status = $_POST['post_status'];
    $post_tags = $_POST['post_tags'];
    $post_content = $_POST['post_content'];
    $post_category_id = $_POST['post_category'];
  
    move_uploaded_file( $post_image_temp,"../images/$post_image");

    $query = "UPDATE posts SET ";
    $query .="post_title = '{$post_title}', ";
    $query .="post_author = '{$post_author}', ";
    $query .="post_date = now(), ";
    $query .="post_category_id = '{$post_category_id}', ";
    $query .="post_image = '{$post_image}', ";
    $query .="post_status = '{$post_status}', ";
    $query .="post_tags = '{$post_tags}', ";
    $query .="post_content = '{$post_content}', ";
    $query .="WHERE post_id = {$the_post_id}";
    $result = mysqli_query($connection,  $query);
echo "$query";
    // confirmResult($result);
    if(!$result) {
        die("QUERY FAILED ." . mysqli_error($connection));
    }

 }


?>   

<form action="" method="post" enctype="multipart/form-data">

 

                                <label for="post_title">Post Title</label>
                                    <div class="form-group"> 
                                        <input value="<?php echo $post_title?>" type="text" class="form-control" name="post_title">
                                    </div>
                                    <label for="post_category_id">Post Category Id</label>
                                    <div class="form-group"> 
                                        <select name="post_category" id="post_category">
                                        <?php           
                               
                                            $query = "SELECT * FROM categories";
                                            $category_name_query = mysqli_query($connection, $query);
                                            confirmResult( $category_name_query);
                                                while($row= mysqli_fetch_assoc($category_name_query)) {
                                            $category_name = $row['cat_title']; 
                                            $category_id = $row['cat_id']; 
                               
                                        
                                        
                                        echo "<option value='{ $category_id}'> {$category_name }</option>";
                                    } 
                                        ?>
                                        </select>
                                    </div>
                                    <label for="post_author">Post Author</label>
                                    <div class="form-group"> 
                                        <input value="<?php echo $post_author ?>" type="text" class="form-control" name="post_author">
                                    </div>
                                    <label for="post_status">Post Status</label>
                                    <div class="form-group"> 
                                        <input value="<?php echo $post_status?>" type="text" class="form-control" name="post_status">
                                    </div>
                         
                                    <div class="form-group"> 
                              
                                       <img width="100" src = "../images/<?php echo $post_image;?>" alt="" >
                                    </div>
                                    <label for="post_tags">Post Tags</label>
                                    <div class="form-group"> 
                                        <input value="<?php echo $post_tags?> "type="text" class="form-control" name="post_tags">
                                    </div>
                                    <label for="post_content">Post Content</label>
                                    <div class="form-group">  
                                        <textarea  class="form-control" name="post_content" id="" cols="30" rows="10"><?php echo  $post_content?> </textarea>
                                    </div>
                           
       
                                     <div class="form-group">
                    <button class="btn btn-primary" name="update_posts" type="submit">Update Post</button>
          </div>
                            
    </form>