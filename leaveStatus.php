<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leave Status</title>
</head>
<style>
    *{
        font-weight: bold;
    }
    .detail {
    width: 600px;
    height: 220px;
    margin: auto;
    }

    table input[type=text]{
    padding-top: 8px;
    padding-bottom: 7px;
    padding-left: 30px;
    padding-right: 30px;
   
   }
    .detail {
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
    background-image: linear-gradient(rgba(132, 128, 128, 0.863), rgba(179, 177, 177, 0.75)), url(./images/DETAIL.jpg);
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
</style>
<body>
    <header>
        <h3>Leave Status</h3> 
    </header>
    <div class="container">
        <div class="detail">

        
        <table border="1px" style="width:600px; line-height:40px;">
        <thead>
            <tr>
                <th>Reason</th>
                <th>Place</th>
                <th>From Date</th>
                <th>From Time</th>
                <th>To Date</th>
                <th>To Time</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include "connection.php";
            $selectQuery = "SELECT * FROM leaves";
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
                    <td><?php echo $row['status']; ?></td>
                </tr>
            <?php }?>
        </tbody>
    </table>
       
        </div>
    </div>
</body>
</html>