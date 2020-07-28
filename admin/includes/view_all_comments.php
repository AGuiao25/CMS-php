<table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Author</th>
                                        <th>Comment</th>
                                        <th>Email</th>
                                        <th>Status</th>
                                        <th>In Response to</th>
                                        <th>Date</th>
                                        <th>Approve</th>
                                        <th>Unapprove</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>

<?php 
$query = "SELECT * FROM comments";
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




                                <tr>
                                    <td><?php echo $comment_id; ?></td>
                                    <td><?php echo $comment_author; ?></td>
                                    <td><?php echo $comment_email; ?></td>
                        
                                    <td><?php echo $comment_content; ?></td>
                                    <td><?php echo $comment_status; ?></td>
                                    <td><?php echo $comment_date; ?></td>
                                    <td><?php echo $post_date; ?></td>
                                    <?php echo "<td><a href='comments.php?approve={$comment_id}'>Approve</a></td>"; ?>
                                    <?php echo "<td><a href='comments.php?inapprove={$comment_id}'>Unapprove</a></td>"; ?>
                                    <?php echo "<td><a href='comments.php?delete={  $comment_id}'>Delete</a></td>"; ?>
                            </tr>
                            


<?php }  ?>     
                                </tbody>
                            </table>


                            <?php
if(isset($_GET['delete'])) {
    $post_id = $_GET['delete'];

    $query = "DELETE FROM posts WHERE post_id = {$post_id}";
    $delete_query = mysqli_query($connection, $query);
    // header("Location: posts.php");

    if(!$delete_query) {
        echo "Query Failed." . mysqli_error($connection);
    }
}

?>
