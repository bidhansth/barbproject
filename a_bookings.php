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
  <div class="container-fluid">
    <div class="row" style="margin: 15px;">
      <table class="table table-striped table-bordered">
        <?php
          $sql = "SELECT * FROM bookings";
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
    <div class="row" style="margin: 15px;">
      <div class="col-sm-3">
        Service Completed<br>
        <form method="post">
          Booking Id: <input type="text" name="compbid" size="3"><br>
          <input type="submit" name="servicecompleted">
        </form>
      </div>

      <div class="col-sm-3">
        Booking Cancelled<br>
        <form method="post">
          Booking Id: <input type="text" name="delbid" size="3"><br>
          <input type="submit" name="servicecancelled">
        </form>
      </div>
    </div>
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