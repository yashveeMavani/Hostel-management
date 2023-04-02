<!DOCTYPE html>
<html>

<head>
	<title>Hostel Management System Dashboard</title>
	<link rel="stylesheet" href="./css/admin.css">
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
			<h2>Leave For Approval</h2>
			<p>Approve Leaves Now</p>
			<a href="leaveApproval.php">Approve Now</a>
		</div>
		<div class="card complaints">
			<h2>Complaints</h2>
			<p>Note the Complaints</p>
			<a href="SolveComplaints.php">View Now</a>
		</div>

		<div class="card meals">
			<h2>Meals</h2>
			<p>View your Today's meal</p>
			<a href="meals.php">View Plan</a>
		</div>

		<div class="card details">
			<h2>Student Details</h2>
			<p>Get student's details from here</p>
			<a href="adminSdetails.php">View Details</a>
		</div>

		<div class="card attendence">
			<h2>Attendence</h2>
			<p>Mark the Attendance</p>
			<a href="aAttendance.php">Mark Attendence</a>
		</div>

		<div class="card roomsavailable">
			<h2>Available Rooms</h2>
			<p>Note Available Rooms</p>
			<a href="aroom.php">View available rooms</a>
		</div>
	</div>
</body>

</html>