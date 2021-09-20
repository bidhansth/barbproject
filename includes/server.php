<?php
// Starting the session, necessary for using session variables
session_start();

// Declaring and hoisting the variables
$phone = "";
$email = "";
$errors = array();
$_SESSION['success'] = "";
// DBMS connection code -> hostname, username, password, database name
$db = mysqli_connect('localhost', 'root', '', 'barbdb');
// Registration code
if (isset($_POST['register'])) {
	// Receiving the values entered and storing in the variables. Data sanitization is done to prevent SQL injections
	$mname = mysqli_real_escape_string($db, $_POST['mname']);
	$phone = mysqli_real_escape_string($db, $_POST['phone']);
	$email = mysqli_real_escape_string($db, $_POST['email']);
	$password_1 = mysqli_real_escape_string($db, $_POST['password']);
	$password_2 = mysqli_real_escape_string($db, $_POST['confirmpassword']);
	// Ensuring that the user has not left any input field blank
	// error messages will be displayed for every blank input
	if (empty($mname)) { array_push($errors, "Name is required"); }
	if (empty($phone)) { array_push($errors, "Phone number is required"); }
	if (empty($email)) { array_push($errors, "Email is required"); }
	if (empty($password_1)) { array_push($errors, "Password is required"); }
	if ($password_1 != $password_2) {
		array_push($errors, "The two passwords do not match");
		// Checking if the passwords match
	}
	// If the form is error free, then register the user
	if (count($errors) == 0) {
		// Password encryption to increase data security
		$password = md5($password_1);
		// Inserting data into table
		$query = "INSERT INTO members (mname, email, phone, password) VALUES('$mname', '$email', '$phone', '$password')";
		mysqli_query($db, $query);
		// Storing username of the logged in user,
		// in the session variable
		$_SESSION['mname'] = $mname;
		$_SESSION['phone'] = $phone;
		// Welcome message
		$_SESSION['success'] = "You have logged in";
		// Page on which the user will be
		// redirected after logging in
		header('location: login.php');
	}
}
// User login
if (isset($_POST['login'])) {
	// Data sanitization to prevent SQL injection
	$phone = mysqli_real_escape_string($db, $_POST['phone']);
	$password = mysqli_real_escape_string($db, $_POST['password']);
	// Error message if the input field is left blank
	if (empty($phone)) {
		array_push($errors, "Phone number is required");
	}
	if (empty($password)) {
		array_push($errors, "Password is required");
	}
	// Checking for the errors
	if (count($errors) == 0) {
		// Password matching
		$password = md5($password);
		$query = "SELECT * FROM members WHERE phone='$phone' AND password='$password'";
		$results = mysqli_query($db, $query);
		// $results = 1 means that one user with the entered username exists
		if (mysqli_num_rows($results) == 1) {
			$row = mysqli_fetch_array($results);
			$mname=$row['mname'];
			$email=$row['email'];
			// Storing username in session variable
			$_SESSION['mname'] = $mname;
			$_SESSION['phone'] = $phone;
			$_SESSION['email'] = $email;
			// Welcome message
			$_SESSION['success'] = "You have logged in!";
			// Page on which the user is sent to after logging in
			header('location: members.php');
		}
		else {
			// If the username and password doesn't match
			array_push($errors, "Username or password incorrect");
		}
	}
}
// logout code
if (isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['mname']);
    unset($_SESSION['phone']);
    unset($_SESSION['email']);
    header("location: index.php");
}

//booking code
if (isset($_POST['booking'])) {
	$mname=$_POST['mname'];
	$phone=$_POST['phone'];
	$email=$_POST['email'];
	$sdate=$_POST['sdate'];
	$vehicle=$_POST['vehicle'];
	$vehiclenum=$_POST['vehiclenum'];
	$dtime=$_POST['dtime'];
	$vehicleother=$_POST['vehicleother'];
	$sreq=$_POST['sreq'];
	$services=implode(",",$sreq);
	$comments=$_POST['comments'];

	$checkunique=mysqli_query($db,"SELECT * FROM bookings where sdate='$sdate' AND dtime='$dtime'");
    if(mysqli_num_rows($checkunique)>0){
		$timeslot="Time Slot taken. Please book at a different time";
    }
    else{
	$inss="INSERT INTO bookings(mname,phone,email,sdate,dtime,vehicle,vehiclenum,services,comments) VALUES('$mname','$phone','$email','$sdate','$dtime','$vehicle','$vehiclenum','$services','$comments')";
		mysqli_query($db,$inss);
		header("Location:booked.php"); 
	}
}

//admin panel code
if (isset($_POST['servicecompleted'])) {
	$compbid=$_POST['compbid'];
	mysqli_query($db,"INSERT INTO archive SELECT * from bookings where bid=$compbid;");
	mysqli_query($db,"DELETE FROM bookings WHERE bid=$compbid;");
}

if (isset($_POST['servicecancelled'])) {
	$compbid=$_POST['delbid'];
	mysqli_query($db,"DELETE FROM bookings WHERE bid=$compbid;");
}

?>