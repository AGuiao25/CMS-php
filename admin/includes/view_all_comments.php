<table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Author</th>
                                        <th>Comment</th>
                                        <th>Email</th>
                                        <th>Status</th>
                                        <th>In Response To</th>
                                        <th>Date</th>
                                        <th>Approve</th>
                                        <th>Unapprove</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>

<?php 
$query = "SELECT * FROM comments";
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
 




                                <tr>
                                    <td><?php echo $comment_id; ?></td>
                                    <td><?php echo $commentt_author ; ?></td>
                                    <td><?php echo  $comment_content; ?></td>
                                    <td><?php echo $comment_email; ?></td>
                                    <td><?php echo $comment_status; ?></td>
                                    <td><?php echo $comment_date; ?></td>
                                    <?php echo "<td><a href='comments.php?approve=$comment_id'>Approve</a></td>"; ?>
                                    <?php echo "<td><a href='comments.php?unapprove=$comment_id'>Unapprove</a></td>"; ?>
                                    <?php echo "<td><a href='comments.php?delete=$comment_id'>Delete</a></td>"; ?>
                          
                            </tr>
                            


<?php }  ?>     
                                </tbody>
                            </table>


                            <?php
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


    if(!$delete_query) {
        echo "Query Failed." . mysqli_error($connection);
    }

}
?>
