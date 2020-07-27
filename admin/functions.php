<?php
function confirmResult($result) {
    global $connection;

    if(!$result) {
        die("QUERY FAILED ." . mysqli_error($connection));
    }


}

function insert_categories(){
    global $connection;
    if(isset($_POST['submit'])) {
        $title = $_POST['cat_title'];

            if($title == ''||empty($title) ) {
                echo "This should not be EMPTY!";
            }
            else {
            $query = "INSERT INTO categories(cat_title) VALUES ('$title')";
            $result = mysqli_query($connection, $query);
                if($result) {
                    echo "Succesfully Created!";
                } else
                {
                    echo "Something Went Wrong";
                }
            }
        }
}


function findAllCategories() {
    global $connection;
    $query = "SELECT * FROM categories";
$category_name_query = mysqli_query($connection, $query);
 while($row= mysqli_fetch_assoc($category_name_query)) {
$category_name = $row['cat_title']; 
$category_id = $row['cat_id']; 

echo "<tr>";
echo "<td>$category_id</td>";
echo "<td>{$category_name}</td>";
echo "<td><a href='categories.php?delete=$category_id'>Delete</a></td>";
echo "<td><a href='categories.php?edit=$category_id'>Edit</a></td>";
echo "</tr>";
}
}

function deleteCategories(){
    global $connection;
    if(isset($_GET['delete'])) {
        $cat_id_delete = $_GET['delete'];
        $query = "DELETE FROM categories WHERE cat_id = {$cat_id_delete}";
        $result = mysqli_query($connection,  $query);
        header("Location: categories.php");
    
    }
}





?>