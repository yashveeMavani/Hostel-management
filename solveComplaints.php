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
    width: 560px;
    height: 270px;
    margin: auto;
    }

    .compl {
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
    padding-top: 7px;
    padding-bottom: 7px;
    padding-left: 30px;
    padding-right: 30px;
    margin-bottom: 15px;
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
<?php
?>
    <header>
        <h3>Report any problems or issues you are facing</h3> 
    </header>
     <div class="container">
        <div class="compl">
        <table border="1px" style="width:600px; line-height:40px;">
        <thead>
            <tr>
                <th>Room No</th>
                <th>Complaints</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include "connection.php";
            $selectQuery = "SELECT * FROM complaints ORDER BY room ASC";
            $result = mysqli_query($conn,$selectQuery);
            if(mysqli_num_rows($result) > 0){
            }else{
            $msg = "No Record found";
    }?><?php
                while($row = mysqli_fetch_assoc($result)){?>
                <tr>
                    <td><?php echo $row['room']; ?></td>
                    <td><?php echo $row['complaints']; ?></td>
                </tr>
            <?php }?>
        </tbody>
    </table>
        </div>
     </div>
</body>
</html>

