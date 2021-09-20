<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <title>Chelsea Auto Services</title>
  <script src="https://kit.fontawesome.com/57c187a429.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/signinmodal.css">
  <link rel="stylesheet" href="css/barbcss.css">
  <?php include('includes/server.php');?>
  <?php include('includes/errors.php');?>
</head>
<body>
  <?php include('includes/navbar.php');?>

  <div class="container-fluid">
    booked succesfully<br>
    your bookimg details<br>
    <table class="table table-striped table-bordered table-sm" style="width:auto;">
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

$sql = "SELECT * FROM bookings ORDER BY bid desc limit 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo "<tr><th>Booking ID</th><td>" . $row["bid"]. "</td></tr><tr><th>Name</th><td>" . $row["mname"]. "</td></tr><tr><th>Phone</th><td>" . $row["phone"]. "</td></tr><tr><th>Email</th><td>" . $row["email"] . "</td></tr><tr><th>Servicing Date</th><td>" . $row["sdate"] . "</td></tr><tr><th>Drop-off Time</th><td>" . $row["dtime"] . " AM/PM</td></tr><tr><th>Vehicle Model</th><td>" . $row["vehicle"] . "</td></tr><tr><th>Vehicle Number</th><td>" . $row["vehiclenum"] . "</td></tr><tr><th>Services Required</th><td>" . $row["services"] . "</td></tr><tr><th>Additional Comments</th><td>" . $row["comments"] . "</td></tr>";
} else {
    echo "0 results";
}

?>
    </table>
  </div>

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  <script>
  // Get the modal
  var modal = document.getElementById('id01');
  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function(event) {
      if (event.target == modal) {
          modal.style.display = "none";
      }
  }
  function toggleOne(onId, offId) {
    var turnOn = document.getElementById(onId);
    var turnOff = document.getElementById(offId);
    turnOn.style.display = 'block';
    turnOff.style.display = 'none';
  }
  </script>
</body>
</html>