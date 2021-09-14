<!DOCTYPE html>
<html>
<head>
	<title>Orders</title>
<style>
	table{
  		border-collapse: collapse;
  		width: 80%;
	}
	th,td{
  		padding: 12px;
  		text-align: left;
  		border-bottom: 1px solid #ddd;
	}
	th{
  		background-color: #61C0BF;
  		color: white;
	}
	tr:nth-child(even){
		background-color: #f2f2f2
	}
</style>
</head>
<body>
<center>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "barbdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM bookings";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>Booking ID</th><th>Name</th><th>Phone</th><th>Email</th><th>Servicing Date</th><th>Drop-off Time</th><th>Vehicle</th><th>Services Required</th><th>Comments</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["bid"]. "</td><td>" . $row["mname"]. "</td><td>" . $row["phone"]. "</td><td>" . $row["email"] . "</td><td>" . $row["sdate"] . "</td><td>" . $row["dtime"] . "</td><td>" . $row["vehicle"] . "</td><td>" . $row["services"] . "</td><td>" . $row["comments"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>
</center>
</body>
</html>
