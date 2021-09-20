<nav class="navbar navbar-expand-lg navbar-dark" style="background:#047a94">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php" style="margin-left: 100px;">CHELSEA AUTO SERVICES</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarDropdown" style="margin-left: 300px;">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item hvr-underline">
          <?php
            if(isset($_SESSION['mname'])){
              ?>
              <a class="nav-link active" aria-current="page" href="booking.php">MAKE A BOOKING</a>
              <?php
              }
            if(!isset($_SESSION['mname'])){
              ?>
              <a class="nav-link active" aria-current="page" href="" onclick="alert('Please Log In or Create an Account to Make a Booking'); return false;">MAKE A BOOKING</a>
              <?php
            }
          ?>
        </li>
        <li class="nav-item hvr-underline">
          <a class="nav-link active" href="aboutus.php">ABOUT US</a>
        </li>
        <li class="nav-item dropdown">
          <?php if(!isset($_SESSION['mname'])) : ?>
            <a class="nav-link active hvr-underline" onclick="document.getElementById('id01').style.display='block'" style="cursor: pointer;">LOG IN</a>
          <?php else : ?>
              <a class="nav-link active dropdown-toggle hvr-underline" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="far fa-user"></i>&nbsp;<?php echo $_SESSION['mname']; ?></a>
              <ul class="dropdown-menu" style="left: 30px;" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="index.php?logout=1" style="color: red;font-weight:600;">LOG OUT</a></li>
              </ul>
          <?php endif ?>
        </li>
      </ul>
      <span class="navbar-text">
        Need Help? Call 9843777722 
      </span>
    </div>
  </div>
</nav>