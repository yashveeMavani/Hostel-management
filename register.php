<?php include("connection.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="./css/register.css">
</head>

<body>
    <div class="banner">
        <div class="login-page">
            <div class="form">
                <form class="login-form" action="dashboard.php" method="post">
                    <input type="text" placeholder="Name" name="name">
                    <input type="email" placeholder="Email" name="email">
                    <input type="text" placeholder="contact no." name="number">
                    <input type="text" placeholder="username" name="username">
                    <input type="password" placeholder="password" name="password">
                    <input type="submit" class="btn" value="Sign Up" value="register" name="register">
                    <p class="message">Already registered?<a href="./index.php">Login</a></p>
                </form>
            </div>
        </div>
    </div>
    </div>
</body>
</html>

<?php
    if(isset($_POST['register'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "INSERT INTO registration (name,email,number,username,password) values('$name','$email','$number','$username','$password')";
    $data = mysqli_query($conn,$query);
    if($data){
        echo "data inserted";
        header("Location: dashboard.php");
    }else{
         echo "failed";
    }

}
?>