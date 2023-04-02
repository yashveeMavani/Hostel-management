
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leave Applicaton</title>
</head>
<style>
    *{
        font-weight:bold;
    }
.container {
    width: 100%;
    height: 100vh;
    background-image: linear-gradient(rgba(132, 128, 128, 0.863), rgba(179, 177, 177, 0.75)), url(./images/leave.jpg);
    background-size: cover;
    background-position: center;
    z-index: 0;
}
table input[type=date]{
    height:32px;
    width:180px;
}

table input[type=time]{
    height:32px;
    width:180px;
}

table input[type=text]{
    
    height:32px;
    width:180px;
}

.leave-form {
    width: 300px;
    height: 280px;
    margin: auto;
    
}

.leave-form {
    position: relative;
    z-index: 1;
    background: #FFFFFF;
    padding: 45px;
    text-align: center;
    box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
   
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
    }
    table{
        padding:15px;
        
    }
    input[type=submit]{
        margin-top: 5px;
        padding: 8px;
        padding-left: 20px;
        padding-right: 20px;
    }
</style>
<body >
    <header>
        <h3>Apply for Leave</h3> 
    </header>
   
    <div class="container">
        <div class="leave-form">
            <form action="./leaveApplication.php" method="post">
        <table>
            <tr>
                <td><label>Place:</label></td>
                <td><input type="text" name="place"></td>
            </tr>
            <tr>
                <td><label>Reason:</label></td>
                <td><input type="text" name="reason"></td>
            </tr>
        
            <tr>
                <td>From Date:</td>
                <td><input type="date" name="fromdate"></td>
            </tr>
            <tr>
                <td>From Time:</td>
                <td><input type="time" name="fromtime"></td>
            </tr>
            <tr>
                <td>To Date:</td>
                <td><input type="date" name="todate"></td>
            </tr>
            <tr>
                <td>To Time:</td>
                <td><input type="time" name="totime"></td>
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
    $place = $_POST['place'];
    $reason = $_POST['reason'];
    $fromdate = $_POST['fromdate'];
    $fromtime = $_POST['fromtime'];
    $todate = $_POST['todate'];
    $totime = $_POST['totime'];
    $status = "Pending";
    $query = "INSERT INTO leaves (place,reason,fromdate,fromtime,todate,totime,status) values('$place','$reason','$fromdate','$fromtime','$todate','$totime','$status')";
    $data = mysqli_query($conn,$query);
    if($data){
        echo "data inserted";
        header("Location: leaveStatus.php");
    }else{
         echo "failed";
    }
}
?>