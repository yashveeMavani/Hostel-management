<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hostel";
$conn = mysqli_connect($servername,$username,$password,$dbname);
if(mysqli_connect_error()){
    echo "Failed to connect";
    exit();
}
    // echo "success";
?> 