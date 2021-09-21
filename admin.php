<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin Panel</title>
  <style>
	a:link, a:visited {
  		background-color: white;
  		color: black;
  		border: 2px solid #61C0BF;
  		padding: 0px 20px;
  		text-align: center;
  		text-decoration: none;
  		display: inline-block;
  		margin: 5px;
	}

	a:hover, a:active {
  		background-color: #61C0BF;
  		color: white;
	}

	.linkb{
		width: 250px;
  		font-size: 120%;
	}

	h2{
		color: white;
	}

	.hdr{
		background-color: #61C0BF;
		width: 250px;
		color: white;
		padding: 20px 22px;
		font-weight: bold;
  		font-size: 150%;

	}
</style>
</head>
<body>
	<center>
		<p class="hdr">Service Nepal Admin Panel</p>
		<a href="a_bookings.php"><p class="linkb">View Bookings</p></a><br>
		<a href="a_vehicle.php"><p class="linkb">Add Vehicle</p></a><br>
		<a href="register.php"><p class="linkb">Add User</p></a><br>
		<a href="deleteuser.php"><p class="linkb">Delete User</p></a>
	</center>
</body>
</html>
