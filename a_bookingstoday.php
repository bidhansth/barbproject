<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/barbcss.css" rel="stylesheet">
  <title>View Bookings</title>
  <script src="https://kit.fontawesome.com/57c187a429.js" crossorigin="anonymous"></script>
  <?php include('includes/server.php');?>
  <?php include('includes/errors.php');?>
  <style>
  .footer {
    position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
    text-align: center;
  }
  </style>
</head>
<body>
  <?php include('includes/adminnavbar.php'); ?>
  <div class="container-fluid">
    <div class="row" style="margin: 15px;">
      <h3 align="center" style="margin-bottom: 40px;">Today's Bookings</h3>
      <table class="table table-striped table-bordered">
        <?php
          $todaydate=date("Y-m-d");
          $sql = "SELECT * FROM bookings WHERE sdate='$todaydate'";
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
  <div class="footer">
    <div class="row justify-content-center" style="margin: 15px;">
      <div class="col-sm-2">
        Service Completed<br>
        <form method="post">
          Booking Id: <input type="text" name="compbid" style="width:40%;"><br>
          <input type="submit" class="btn barbbutton" name="servicecompleted">
        </form>
      </div>

      <div class="col-sm-2">
        Booking Cancelled<br>
        <form method="post">
          Booking Id: <input type="text" name="delbid" style="width:40%;"><br>
          <input type="submit" class="btn barbbutton" name="servicecancelled">
        </form>
      </div>
    </div>
  </div>

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>