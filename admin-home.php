<?php
include('connection.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<link rel="stylesheet" type="text/css" href="css/s1.css">
</head>
<body>

<div id="full">
	<div id="inner_full">
		<div id="header"><h2><a href ="admin-home.php" style="text-decoration: none;color: white;">Blood Bank Management System</a></h2></div>
		<div id="body">
			<br>
			<?php
			$un=$_SESSION['un'];
			if(!$un)
			{
				header("location:index.php");

			}
			?>
			<h1>Welcome Admin</h1> <br><br>
			<ul>
				<li><a href="donor-red.php">Donor Registration</a></li>
				<li><a href="donor-list.php">Donor List</a></li>
				<li><a href="stoke-blood-list.php">Stoke Blood List</a></li>
				

			</ul> <br><br><br>
			
			
		</div>
		<div id="footer"><h4 align="center"> </h4> 
			<p align="center"><a href="logout.php"><font color="white">Logout</a></font> </p>
		</div>

	</div>
</div>
</body>
</html>