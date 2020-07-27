<?php 
if(isset($_POST['update_categories'])) {
    $cat_title = $_POST['cat_title'];
$query = "UPDATE categories SET cat_title = '{$cat_title}' WHERE cat_id = {$cat_id}";
    $result = mysqli_query($connection,  $query);
}    
    
?>

<form action="" method="post" >

                            <label for="cat_title">Update Category</label>
                            <div class="form-group"> 
                            <?php 
                                if(isset($_GET['edit'])) {
                                    $cat_id_edit = $_GET['edit'];
                                    $query = "SELECT * FROM categories WHERE cat_id = {$cat_id_edit}";
                                    $edit_query = mysqli_query($connection,  $query);
                                    while($row= mysqli_fetch_assoc($edit_query )) {  
                                        $cat_id = $row['cat_id'];
                                        $cat_title = $row['cat_title']; ?>
    
                                <input value="<?php if(isset($cat_title)) echo $cat_title;?>" type="text" class="form-control" name="cat_title">
                                <?php } }?> 
                            </div>
                           <div class="form-group">
                           <button class="btn btn-primary" name="update_categories" type="submit">Update Category</button>
                           </div>
</form>