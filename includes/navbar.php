<nav class="navbar navbar-expand-lg navbar-dark" style="background:#19659f">
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

<div id="id01" class="modal">
  <div class="modal-content animate">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>
    <div class="container con-log" id="con-log">
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
      <br><br>
      Not a member yet? <a href="#" onclick="toggleOne('con-reg','con-log');" style="color: black;">Register Now</a>
    </div>
    <div class="container con-reg" id="con-reg">
      <h3>Register</h3><br>
      <form action="index.php" method="post">
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
      <br><br>
      Already a member? <a href="#" onclick="toggleOne('con-log','con-reg');" style="color: black;">Sign In</a>
    </div>
  </div>
</div>