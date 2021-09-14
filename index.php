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

  <div style="background-image: url(img/img_index.jpg); height:50vh;"></div>

  <div style="height: 100px;background-color:#ececec;">
    <div class="container" style="height: 100%;">
      <div class="row" style="height: 100%;">
        <div class="col-sm-3 b-item">
          <i class="far fa-thumbs-up"></i>&nbsp;&nbsp;Customer Promise
        </div>
        <div class="col-sm-3 b-item">
          <i class="far fa-calendar-check"></i>&nbsp;&nbsp;Quick and Easy Bookings
        </div>
        <div class="col-sm-3 b-item">
          <i class="fas fa-tools"></i>&nbsp;&nbsp;Genuine Products
        </div>
        <div class="col-sm-3 b-item">
          <i class="fas fa-comment-dollar"></i>&nbsp;&nbsp;Easy Payment Options
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid">
    content here
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