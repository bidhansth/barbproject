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
  <style type="text/css">
    .col-sm-3{
      margin-left: 100px;
      margin-right: 100px;
    }
    .row{
      margin-top: 15px;
    }
  </style>
</head>
<body>
  <?php include('includes/navbar.php');?>

  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-sm-12">
        Hello <?php echo $_SESSION['mname']; ?><br>
        your servicing history:
        <table class="table table-striped table-bordered">
        <?php
          $phone=$_SESSION['phone'];
          $sql = "SELECT * FROM archive WHERE phone='$phone'";
          $result = $db->query($sql);

          if ($result->num_rows > 0) {
              echo "<tr><th>Booking ID</th><th>Name</th><th>Phone</th><th>Email</th><th>Servicing Date</th><th>Drop-off Time</th><th>Vehicle</th><th>Vehicle Number</th><th>Services Required</th><th>Comments</th></tr>";
              // output data of each row
              while($row = $result->fetch_assoc()) {
                  echo "<tr><td>" . $row["bid"]. "</td><td>" . $row["mname"]. "</td><td>" . $row["phone"]. "</td><td>" . $row["email"] . "</td><td>" . $row["sdate"] . "</td><td>" . $row["dtime"] . "</td><td>" . $row["vehicle"] . "</td><td>" . $row["vehiclenum"] . "</td><td>" . $row["services"] . "</td><td>" . $row["comments"] . "</td></tr>";
              }
          } else {
              echo "0 results";
          }
        ?>
      </table>
      </div>
    </div>
  </div>

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>