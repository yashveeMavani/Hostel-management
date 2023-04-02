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
    width: 600px;
    height: 140px;
    margin: auto;
    }

   

    table input[type=text]{
    padding-top: 5px;
    padding-bottom: 5px;
    padding-left: 30px;
    padding-right: 30px;
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
        <table border="1px" style="width:600px; line-height:40px;">
        
        <tbody>
            <?php
            include "connection.php";
            $selectQuery = "SELECT * FROM attendance ";
            $result = mysqli_query($conn,$selectQuery);
            if(mysqli_num_rows($result) > 0){
            }else{
            $msg = "No Record found";
    }?><?php
                while($row = mysqli_fetch_assoc($result)){?>
                <tr>
                    <td>Total Girls: </td>
                    <td><?php echo $row['total']; ?></td>
                </tr>
                <tr>
                    <td>Present Girls:</td>
                <td><?php echo $row['present']; ?></td>
                </tr>
                    
                <tr>
                    <td>Absent Girls:</td>
                <td><?php echo $row['absent']; ?></td>
                </tr>
            <?php }?>
        </tbody>
    </table>
        </div>
    </div>
</body>
</html>
