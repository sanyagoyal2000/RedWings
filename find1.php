<?php
include "config.php";
?>


<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="colorlib.com">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" />
    <link href="main1.css" rel="stylesheet" />
  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="design.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
          <a class="navbar-brand" href="#">RedWings</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="topnav-right">
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
                <a class="nav-link" href="index.html">Home</a>
              </li>
      <li class="nav-item">
                <a class="nav-link" href="about.html">About Us</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Donors
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="why.html">Why Donate Blood</a>
                  <a class="dropdown-item" href="donreg.php">Donor Registration</a>
                  
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Blood Banks
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="regist.php">Registered BloodBanks</a>
                  <a class="dropdown-item" href="newbb.php">New Registration</a>
                  
                </div>
              </li>
     
     
        <li class="nav-item">
                    <a class="nav-link" href="search.html">Search Blood</a>
                  </li>
          <li class="nav-item">
                    <a class="nav-link" href="login.php">Login</a>
                  </li>
          <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact Us</a>
                  </li>
      </ul>
    </div>
      </div>
      </div>
      </nav>
      
  
    <div class="s01">
      <form method='post' action="display.php">
      <?php 
// Display Error message
if(!empty($error_message)){
?>
<div class="alert alert-danger">
  <strong>Error!</strong> <?= $error_message ?>
</div>

<?php
}
?>

<?php 
// Display Success message
if(!empty($success_message)){
?>
<div class="alert alert-success">
  <strong>Success!</strong> <?= $success_message ?>
</div>

<?php
}
?>
        <fieldset>
          <legend style="font-size:60px;margin-left:170px;">Find what you are looking for</legend>
        </fieldset>
        <div class="inner-form">
          
          <div class="input-field second-wrap">
            <input id="location" type="text" placeholder="Location(State)" name="state" />
          </div>
          <div class="input-field third-wrap">
            
            <input type="submit" name="search" class="btn-search" value="Search" />
          </div>
        </div>
      </form>
    </div>
  </body>
</html>