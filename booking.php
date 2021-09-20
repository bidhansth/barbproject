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
  <link rel="stylesheet" href="css/bookingcss.css">
  <?php include('includes/server.php');?>
  <?php include('includes/errors.php');?>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="js/vehiclesearchjs.js"></script>
</head>
<body>
  <?php include('includes/navbar.php');?>

  <div class="container">
    <h2>Make a Booking</h2><br>
    <form method="post">
      <div class="row" style="display: none;">
        <div class="col-sm-4">
          <label for="mname"><b>Name</b></label>
          <input type="text" name="mname" value="<?php echo $_SESSION['mname'] ?>" required>
          <br>
          <label for="phone"><b>Phone</b></label>
          <input type="text" placeholder="Enter Phone Number" name="phone" value="<?php echo $_SESSION['phone'] ?>" required>
        </div>
        <div class="col-sm-4">
          <label for="email"><b>Email</b></label>
          <input type="email" placeholder="Enter Email Address" name="email" value="<?php echo $_SESSION['email'] ?>" required>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4 search-box">
          <label for="sdate"><b>Servicing Date</b></label>
          <input type="date" name="sdate" required>
          <p>&nbsp;</p>
          <label for="vehicle"><b>Vehicle</b></label>
          <input type="text" autocomplete="off" placeholder="Search vehicles..." style="margin-bottom: 2px;" name="vehicle">
          <div class="result"></div>
          <br>
          <label for="vehiclenum"><b>Vehicle Number</b></label>
          <input type="text" name="vehiclenum" placeholder="eg: Ba 69 Pa 4020" required>
          <br>
        </div>
        <div class="col-sm-4">
          <label for="dtime"><b>Drop-off Time</b></label>
          <select name="dtime" id="dtime">
            <option value="9">9 AM</option>
            <option value="10">10 AM</option>
            <option value="11">11 AM</option>
            <option value="12">12 PM</option>
            <option value="1">1 PM</option>
            <option value="2">2 PM</option>
            <option value="3">3 PM</option>
            <option value="4">4 PM</option>
            <option value="5">5 PM</option>
            <option value="6">6 PM</option>
          </select>
          <p class="text-danger"><?php if(isset($timeslot)) echo $timeslot; ?>&nbsp;</p>
          <label for="vehicleother"><b>Vehicle (Other)</b></label>
          <input type="text" placeholder="Enter vehicle here if not available on the list" name="vehicleother">
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-sm-4">
          <b>Services Required</b><br>
          <input type="checkbox" name="sreq[]" value="Engine Oil Change"> Engine Oil Change<br>
          <input type="checkbox" name="sreq[]" value="Front Brake"> Front Brake<br>
          <input type="checkbox" name="sreq[]" value="Rear Brake"> Rear Brake<br>
          <input type="checkbox" name="sreq[]" value="Full Servicing"> Full Servicing<br>
        </div>
        <div class="col-sm-4">
          <label for="comments"><b>Comments</b></label>
          <textarea name="comments" placeholder="Enter any additional comments/requests"></textarea>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-sm-4">
          <button class="barbbutton" type="submit" name="booking">Confirm Booking</button>
        </div>
      </div>
    </form>
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