<?php
	$server="localhost";
	$user="root";
	$password="";
	$connection=mysqli_connect($server,$user,$password);
	$db="barbdb";
	$sql=mysqli_select_db($connection,$db);
	$vmake=$_POST['vmake'];
	$vmodel=$_POST['vmodel'];
	if ((empty($_POST["vmake"]))||(empty($_POST["vmodel"])))
		echo "empty";
	else
		$inss="INSERT INTO vehicles(vmake,vmodel) VALUES('$vmake','$vmodel')";
	mysqli_query($connection,$inss);
	header("Location: ../a_vehicle.php"); 
?>