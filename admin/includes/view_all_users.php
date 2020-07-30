<table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Username</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Date</th>
                                      
                                    </tr>
                                </thead>
                                <tbody>

<?php 
$query = "SELECT * FROM users";
$query_users = mysqli_query($connection, $query);
while($row = mysqli_fetch_assoc($query_users)){
    $user_id = $row['user_id'];
    $username= $row['username'];
    $user_password = $row['user_password'];
    $user_firstname = $row['user_firstname'];
    $user_lastname = $row['user_lastname'];
    $user_email = $row['user_email'];
    $user_image = $row['user_image'];
    $user_role = $row['user_role'];
 ?>
 




                                <tr>
                                    <td><?php echo $user_id; ?></td>
                                    <td><?php echo $username ; ?></td>
                                    <td><?php echo $user_firstname; ?></td>
                                    <td><?php echo $user_lastname; ?></td>
                                    <td><?php echo $user_email; ?></td>
                                   
                                    
                                    <td><?php echo $user_role; ?></td>
                                    <td><?php echo "Date"; ?></td>
                                    <?php echo "<td><a href='users.php?role_to_admin=$user_id'>Admin</a></td>"; ?>
                                    <?php echo "<td><a href='users.php?role_to_subscriber=$user_id'>Subscriber</a></td>"; ?>
                                    <?php echo "<td><a href='users.php?source=edit_users&p_id={$user_id}'>Edit</a></td>"; ?>
                                    <?php echo "<td><a href='users.php?delete=$user_id'>Delete</a></td>"; ?>
                          
                            </tr>
                            


<?php }  ?>     
                                </tbody>
                            </table>


                            <?php
if(isset($_GET['role_to_admin'])) {
    $the_user_id = $_GET['role_to_admin'];

    $query = "UPDATE users SET user_role = 'admin' WHERE user_id = $the_user_id ";
    $admin_change = mysqli_query($connection, $query);
     header("Location:users.php");

    if(!$admin_change ) {
        echo "Query Failed." . mysqli_error($connection);
    }
}

if(isset($_GET['role_to_subscriber'])) {
    $the_user_id = $_GET['role_to_subscriber'];

    $query = "UPDATE users SET user_role = 'subscriber' WHERE user_id = $the_user_id ";
    $subscriber_change = mysqli_query($connection, $query);
     header("Location: users.php");

    if(!$subscriber_change) {
        echo "Query Failed." . mysqli_error($connection);
    }
}

if(isset($_GET['delete'])) {
    $the_comment_id = $_GET['delete'];

    $query = "DELETE FROM users WHERE user_id = {$the_comment_id}";
    $delete_query = mysqli_query($connection, $query);
     header("Location: users.php");

    if(!$delete_query) {
        echo "Query Failed." . mysqli_error($connection);
    }
}

?>
