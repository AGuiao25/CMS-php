<?php 
$db['db_host']="localhost";
$db['db_username']="root";
$db['db_password']="mysql";
$db['db_dbName']="cms";
foreach($db as $key => $value) {
    define(strtoupper($key), $value);
}

$connection = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DBNAME);

?>