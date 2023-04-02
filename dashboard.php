<?php
include "connection.php";
session_start(); 

?> 


<!DOCTYPE html>
<html>
<head>
	<title>Hostel Management System Dashboard</title>
	<link rel="stylesheet" href="./css/dashboard.css">
</head>
<body>
<header>
		<div class="cont">
			<div class="navbar">
				<div class="logo">
					<img src="./images/logo.jpeg">
				</div>
				<div class="head">
					<h1>CHARUSAT Girls Hostel</h1>
				</div>
				<div class="nav_r">
					<ul>	
						<li><?php echo $_POST['username'];?></li> 
						<li><a href="./logout.php"><img src="./images/logout.jpeg"></a></li> 
			 		</ul>
							
				</div>
			</div>
		</div>
	</header>
	<div class="container">
		<div class="card leave">
			<h2>Leave Application</h2>
			<p>Apply for leave from the hostel</p>
			<a href="leaveApplication.php">Apply Now</a>
		</div>
		<div class="card complaints">
			<h2>Complaints</h2>
			<p>Report any problems you are facing</p>
			<a href="complaints.php">Report Now</a>
		</div>

		<div class="card meals">
			<h2>Meals</h2>
			<p>View your Today's meal</p>
			<a href="meals.php">View Plan</a>
		</div>

		<div class="card details">
			<h2>Leave Status</h2>
			<p>Check your Leave Status</p>
			<a href="leaveStatus.php">View Details</a>
		</div>

        <div class="card attendence">
			<h2>Attendence</h2>
			<p>Girls present.</p>
			<a href="Attendance.php">View Attendence</a>
		</div>

        <div class="card roomsavailable">
			<h2>Available Rooms</h2>
			<p> Check the availability of rooms</p>
			<a href="rooms.php">View available rooms</a>
		</div>
	</div>
</body>
</html>