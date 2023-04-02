<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leave Approval</title>
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
table input[type=text]{
    padding-top: 15px;
    margin-bottom: 15px;
}

.leave-form {
    width: 600px;
    height: 300px;
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
        padding:5px;
        
    }
    input[type=submit]{
        padding: 8px;
        padding-left: 20px;
        padding-right: 20px;
    }
</style>
</head>
<body>
    <div class="container">
<div class="leave-form">
            <form action="leaveApproval.php" method="post">
            <table border="1px" style="width:600px; line-height:40px;">
        <thead>
            <tr>
                <th>Reason</th>
                <th>Place</th>
                <th>From Date</th>
                <th>From Time</th>
                <th>To Date</th>
                <th>To Time</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include "connection.php";
            $selectQuery = "SELECT * FROM leaves where status='pending'";
            $result = mysqli_query($conn,$selectQuery);
            if(mysqli_num_rows($result) > 0){
            }else{
            $msg = "No Record found";
    }?><?php
                while($row = mysqli_fetch_assoc($result)){?>
                <tr>
                    <td><?php echo $row['place']; ?></td>
                    <td><?php echo $row['reason']; ?></td>
                    <td><?php echo $row['fromdate']; ?></td>
                    <td><?php echo $row['fromtime']; ?></td>
                    <td><?php echo $row['todate']; ?></td>
                    <td><?php echo $row['totime']; ?></td>
                    <td>
                            <input type="submit" name="sub" value="Accept"  class='btn-success btn-sm' > 
                            <input type="submit" name="submit" value="Reject" class='btn-danger btn-sm' >
                    </td>+
                </tr>
            <?php }?>
        </tbody>
    </table>
        </form>
        </div>
        </div>
</body>
</html>
<?php

include ("connection.php");

if(isset($_POST['sub'])){
    
    $query = "UPDATE leaves SET status='Accepted' where status='pending'";
    $data = mysqli_query($conn,$query);
    if($data){
        // echo "data updated";
      
    }else{
         echo "failed";
    }

  }
 
         
?>

<?php
include ("connection.php");


if(isset($_POST['submit'])){
   
    $query = "UPDATE leaves SET status='Rejected' where status='pending' ";
    $data = mysqli_query($conn,$query);
    if($data){
    
    }else{
         echo "failed";
    }

  }

?>