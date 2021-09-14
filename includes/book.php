<?php
	$server="localhost";
	$user="root";
	$password="";
	$connection=mysqli_connect($server,$user,$password);
	$db="barbdb";
	$sql=mysqli_select_db($connection,$db);

	$mname=$_POST['mname'];
	$phone=$_POST['phone'];
	$email=$_POST['email'];
	$sdate=$_POST['sdate'];
	$vehicle=$_POST['vehicle'];
	$dtime=$_POST['dtime'];
	$vehicleother=$_POST['vehicleother'];
	$sreq=$_POST['sreq'];
	$services=implode(",",$sreq);
	$comments=$_POST['comments'];

	$inss="INSERT INTO bookings(mname,phone,email,sdate,dtime,vehicle,services,comments) VALUES('$mname','$phone','$email','$sdate','$dtime','$vehicle','$services','$comments')";
	mysqli_query($connection,$inss);
	header("Location: ../index.php"); 
?>