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
      <div class="col-sm-3">
        <h5>&nbsp;</h5>
        <h3>Log In</h3><br>
        <form method="post">
          <label for="phone"><b>Phone Number</b></label>
          <input type="text" placeholder="Enter Phone Number" name="phone" required>
          <br><br>
          <label for="password"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="password" required>
          <br><br>
          <button type="submit" name="login" class="barbbutton">Login</button>
        </form>      
      </div>
      <div class="col-sm-3">
        <h5>Not a member yet?</h5>
        <h3>Register</h3><br>
        <form method="post">
          <label for="mname"><b>Name</b></label>
          <input type="text" placeholder="Enter Name" name="mname" maxlength="50" required>
          <br>
          <label for="email"><b>Email</b></label>
          <input type="email" placeholder="Enter Email address" name="email" maxlength="50" required>
          <br>
          <label for="phone"><b>Phone</b></label>
          <input type="text" placeholder="Enter Phone Number" name="phone" maxlength="10" required>
          <br>
          <label for="password"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="password" maxlength="50" required>
          <br>
          <label for="confirmpassword"><b>Confirm Password</b></label>
          <input type="password" placeholder="Enter Password Again" name="confirmpassword" maxlength="50" onkeyup='' required>
          <br><br>
          <button type="submit" name="register" class="barbbutton">Register</button>
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