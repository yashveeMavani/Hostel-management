<?php
include "connection.php";

if($_SERVER['REQUEST_METHOD']=='POST'){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "select username.password from adminlogin where username='$username' && password='$password' ";
    $result = mysqli_query($conn,$query);
  
    while ($row = mysqli_fetch_assoc($result)) {


        $check_username = $row['username'];
        $check_password = $row['password'];
    }
    if ($username == $check_username && $password == $check_password) {
       
        header("Location: admin.php");
    } else {
       
        echo "invalid";
    }
  
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./css/login.css">
</head>

<body>
    <div class="banner">
        <div class="login-page">
            <div class="form">
                <form action="admin.php" method="post">
                <div class="login-form">
                    <input type="text" placeholder="username" name="username" required>
                    <input type="password" placeholder="password" name="password" required>
                    <input type="submit" class="btn" name="login" value="admin login">
                    <p class="message">Not registered? <a href="./register.php">Create an account</a></p>
                    
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>
</body>

</html>