<?php
include "connection.php";
session_start();

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
                <form action="dashboard.php" method="post">
                <div class="login-form">
                    <input type="text" placeholder="username" name="username" required>
                    <input type="password" placeholder="password" name="password" required>
                    <input type="submit" class="btn" name="login" value="login">
                    <p class="message">Not registered? <a href="./register.php">Create an account</a></p>
                    <p class="message">Go to <a href="./adminlogin.php"> Admin </a>Panel</p>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>
</body>

</html>


<?php
if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "select * from registration where username=$username && password=$password";
    $data = mysqli_query($conn,$query);
    $total = mysqli_num_rows($data);
   
    if($total == 1){
        
        header('location: dashboard.php');
    }
    else{
        echo "invalid username or password";
    }
}
?>