<?php
include('connection.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Donor Registration</title>
	<link rel="stylesheet" type="text/css" href="css/s1.css">
	<style type="text/css">
		td {
			width: 200px;
			height: 40px;
		}

	</style>
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
			<h1>Stoke Blood List</h1> 
			<center><div id="form">
				<table>
					<tr>
						<td><center><b><font color="blue">Name</font></b></center></td>
						<td><center><b><font color="blue">QLY</font></b></center></td>
                        

					</tr>
					
						<tr>
						<td><center>O+</center></td>
						<td><center>
							<?php
							$q=$db->query("SELECT * FROM donor_registration WHERE bgroup='+o'");
							echo $row=$q->rowcount();

							?>
						</center></td>
						
					</tr>
					<tr>
						<td><center>AB+</center></td>
						<td><center>
							<?php
							$q=$db->query("SELECT * FROM donor_registration WHERE bgroup='AB+'");
							echo $row=$q->rowcount();

							?>
						</center></td>
						
					</tr>
					<tr>
						<td><center>AB-</center></td>
						<td><center>
							<?php
							$q=$db->query("SELECT * FROM donor_registration WHERE bgroup='AB-'");
							echo $row=$q->rowcount();

							?>
						</center></td>
						
					</tr>

						
					
				</table>
				

			</div></center>
			
		</div>
		<div id="footer"><h4 align="center"></h4>
			<p align="center"><a href="logout.php"><font color="white">Logout</a></font>
			 </p>

		</div>

	</div>
</div>
</body>
</html>