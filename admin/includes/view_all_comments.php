<table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Author</th>
                                        <th>Comment</th>
                                        <th>Email</th>
                                        <th>Status</th>
<<<<<<< HEAD
                                        <th>In Response To</th>
=======
                                        <th>In Response to</th>
>>>>>>> 6e76b74c8f2e0530549f2316b3dca3e16e03f9d1
                                        <th>Date</th>
                                        <th>Approve</th>
                                        <th>Unapprove</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>

<?php 
$query = "SELECT * FROM comments";
<<<<<<< HEAD
$query_comments = mysqli_query($connection, $query);
while($row = mysqli_fetch_assoc($query_comments)){
    $comment_id = $row['comment_id'];
    $commentt_author = $row['comment_author'];
    $comment_post_id = $row['comment_post_id'];
    $comment_content = $row['comment_content'];
    $comment_email = $row['comment_email'];
    $comment_status = $row['comment_status'];
    $comment_date= $row['comment_date'];
 ?>
 
=======
$select_comments= mysqli_query($connection, $query);
while($row = mysqli_fetch_assoc($select_comments)){
    $comment_id= $row['comment_id'];
    $comment_post_id = $row['comment_post_id'];
    $comment_author = $row['comment_author'];
    $comment_email= $row['comment_email'];
    $comment_content = $row['comment_content'];
    $comment_status = $row['comment_status'];
    $comment_date = $row['comment_date'];
    ?>
>>>>>>> 6e76b74c8f2e0530549f2316b3dca3e16e03f9d1




                                <tr>
                                    <td><?php echo $comment_id; ?></td>
<<<<<<< HEAD
                                    <td><?php echo $commentt_author ; ?></td>
                                    <td><?php echo  $comment_content; ?></td>
                                    <td><?php echo $comment_email; ?></td>
                                    <td><?php echo $comment_status; ?></td>
                                    <?php 
$query = "SELECT * FROM posts WHERE post_id = $comment_post_id" ;
$query_post_id = mysqli_query($connection, $query);

while($row= mysqli_fetch_assoc($query_post_id)) {
    $post_id = $row['post_id'];
    $post_title = $row['post_title'];
    echo "<td><a href='../post.php?p_id= $post_id'>$post_title</a></td>";
}


?>
                                    
                                    <td><?php echo $comment_date; ?></td>
                                    <?php echo "<td><a href='comments.php?approve=$comment_id'>Approve</a></td>"; ?>
                                    <?php echo "<td><a href='comments.php?unapprove=$comment_id'>Unapprove</a></td>"; ?>
                                    <?php echo "<td><a href='comments.php?delete=$comment_id'>Delete</a></td>"; ?>
                          
=======
                                    <td><?php echo $comment_author; ?></td>
                                    <td><?php echo $comment_email; ?></td>
                        
                                    <td><?php echo $comment_content; ?></td>
                                    <td><?php echo $comment_status; ?></td>
                                    <td><?php echo $comment_date; ?></td>
                                    <td><?php echo $post_date; ?></td>
                                    <?php echo "<td><a href='comments.php?approve={$comment_id}'>Approve</a></td>"; ?>
                                    <?php echo "<td><a href='comments.php?inapprove={$comment_id}'>Unapprove</a></td>"; ?>
                                    <?php echo "<td><a href='comments.php?delete={  $comment_id}'>Delete</a></td>"; ?>
>>>>>>> 6e76b74c8f2e0530549f2316b3dca3e16e03f9d1
                            </tr>
                            


<?php }  ?>     
                                </tbody>
                            </table>


                            <?php
<<<<<<< HEAD
if(isset($_GET['approve'])) {
    $the_comment_id = $_GET['approve'];

    $query = "UPDATE comments SET comment_status = 'APPROVED' WHERE comment_id = $the_comment_id";
    $delete_query = mysqli_query($connection, $query);
     header("Location: comments.php");

    if(!$delete_query) {
        echo "Query Failed." . mysqli_error($connection);
    }
}

if(isset($_GET['unapprove'])) {
    $the_comment_id = $_GET['unapprove'];

    $query = "UPDATE comments SET comment_status = 'UNAPPROVED' WHERE comment_id = $the_comment_id";
    $delete_query = mysqli_query($connection, $query);
     header("Location: comments.php");

    if(!$delete_query) {
        echo "Query Failed." . mysqli_error($connection);
    }
}

if(isset($_GET['delete'])) {
    $the_comment_id = $_GET['delete'];

    $query = "DELETE FROM comments WHERE comment_id = {$the_comment_id}";
    $delete_query = mysqli_query($connection, $query);
     header("Location: comments.php");
=======
if(isset($_GET['delete'])) {
    $post_id = $_GET['delete'];

    $query = "DELETE FROM posts WHERE post_id = {$post_id}";
    $delete_query = mysqli_query($connection, $query);
    // header("Location: posts.php");
>>>>>>> 6e76b74c8f2e0530549f2316b3dca3e16e03f9d1

    if(!$delete_query) {
        echo "Query Failed." . mysqli_error($connection);
    }
}

?>
