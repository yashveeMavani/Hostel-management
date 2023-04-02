<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance</title>
</head>
<style>
     *{
        font-weight: bold;
    }
    .count {
    width: 400px;
    height: 95px;
    margin: auto;
    }

    table input[type=text]{
    height:28px;
    width:180px;
   }
   .count {
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
    background-image: linear-gradient(rgba(132, 128, 128, 0.863), rgba(179, 177, 177, 0.75)), url(./images/ATTENDANCE3.png);
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
<body>
    <header>
        <h3>Attendence</h3> 
    </header>
    <div class="container">
        <div class="count">
            <form action="#" method="post">
            <table>
                <tr>
                    <td><label>Present Girls: </label></td>
                    <td><input type="text" name="present"></td>
                </tr>
                <tr>
                    <td><label>Absent Girls: </label></td>
                    <td><input type="text" name="absent"></td>
                </tr>
                <tr>
                    <td><label>Total Girls: </label></td>
                    <td><input type="text" name="total"></td>
                </tr>
            </table>
            <input type="submit" name="submit" value="Submit">
            </form>
        </div>
    </div>
</body>
</html>

<?php
include "connection.php";
    if(isset($_POST['submit'])){
    $total = $_POST['total'];
    $present = $_POST['present'];
    $absent = $_POST['absent'];

   
    $query = "UPDATE attendance SET total=$total, present=$present, absent=$absent ";
    $data = mysqli_query($conn,$query);
    if($data){
        echo "data inserted";
        // header("Location: dashboard.php");
    }else{
         echo "failed";
    }

}
?>