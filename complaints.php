<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complaints</title>
    <style>
        *{
        font-weight:bold;
    }
    

    .compl {
        width: 350px;
    height: 250px;
    margin: auto;
    position: relative;
    z-index: 1;
    background: #FFFFFF;
    padding: 40px;
    padding-left: 40px;
    padding-right: 80px;
    text-align: center;
    box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
   }
   
   table input[type=text]{
    height:28px;
    width:236px;
}
.container {
    width: 100%;
    height: 100vh;
    background-image: linear-gradient(rgba(132, 128, 128, 0.863), rgba(179, 177, 177, 0.75)), url(./images/complaint.jpg);
    background-size: cover;
    background-position: center;
    z-index: 0;
}
    h3{
    font-size: 25px;
    margin-bottom: 0;
    background-color: #2c3e50;
    color: #fff;
    padding: 20px;
    text-align: center;
    }
    .container{
        padding-top: 50px;
        font-size: large;
    }
    input[type=submit]{
        padding: 8px;
        padding-left: 20px;
        padding-right: 20px;
    }
    
    </style>
</head>
<body>
    <header> 
            <h3>Report any problems or issues you are facing </h3>     
    </header>
     <div class="container">
        <div class="compl">
        <form action="#" method="post">
        <table>
            <tr><td><label>Room no:</label></td>
                <td><input type="text" name="room"></td>
            </tr>
            <tr><td><label>Complaints:</label></td>
                <td><textarea cols="30" rows="10" name="complaints"></textarea></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Submit" name="submit"></td>
            </tr>
        </table>
        </form>
        </div>
     </div>
</body>
</html>

<?php
include "connection.php";
    if(isset($_POST['submit'])){
    $room = $_POST['room'];
    $complaints = $_POST['complaints'];

    $query = "INSERT INTO complaints (room,complaints) values('$room','$complaints')";
    $data = mysqli_query($conn,$query);
    if($data){
        echo "data inserted";
        header("Location: dashboard.php");
    }else{
         echo "failed";
    }
}
?>