<?php
$db_connection = mysqli_connect("localhost:3307","root","","esetable");
// Check connection
if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>
