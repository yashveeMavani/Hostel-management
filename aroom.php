<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rooms</title>
    <style>
        *{
        font-weight: bold;
    }
    .room {
    width: 400px;
    height: 120px;
    margin: auto;
    }

    table input[type=text]{
    height:28px;
    width:180px;
   }
   .room {
    position: relative;
    z-index: 1;
    background: #FFFFFF;
    padding: 45px;
    text-align: center;
    box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
   }
    .container {
    width: 100%;
    height: 100vh;
    background-image: linear-gradient(rgba(132, 128, 128, 0.863), rgba(179, 177, 177, 0.75)), url(./images/room.jpg);
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
        padding-top: 100px;
        font-size: large;
    }
    </style>
</head>
<body>
<header>
        <h3>Available Rooms</h3> 
    </header>
    <div class="container">
        <div class="room">
        <form action="aroom.php" method="post">
            <table>
                <tr>
                    <td><label>Available Rooms: </label></td>
                    <td><input type="text" name="aroom"></td>
                </tr>
                <tr>
                    <td><label>Reserved Rooms: </label></td>
                    <td><input type="text" name="rroom"></td>
                </tr>
                <tr>
                    <td><label>Total Rooms:</label></td>
                    <td><input type="text" name="troom"></td>
                </tr>
            </table>
            <br><input type="submit" name="submit" value="Submit">
            </form>
        </div>
    </div>
</body>
</html>

<?php
include "connection.php";
    if(isset($_POST['submit'])){
    $aroom = $_POST['aroom'];
    $rroom = $_POST['rroom'];
    $troom = $_POST['troom'];

    
    $query = "UPDATE rooms SET aroom=$aroom, rroom=$rroom, troom=$troom ";
    $data = mysqli_query($conn,$query);
    if($data){
        echo "data inserted";
        
    }else{
         echo "failed";
    }

}
?>