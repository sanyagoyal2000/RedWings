<?php
include "config.php";

// Check user login or not
if(!isset($_SESSION['email'])){
    header('Location: signup.php');
}

// logout
if(isset($_POST['but_logout'])){
    session_destroy();
    header('Location: signup.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Design</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="design1.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<style>
  h1{
    color:#DC143C;
  }
</style>

</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark"">
        <div class="container">
          <a class="navbar-brand" href="#">RedWings</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="topnav-right">
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
                <a class="nav-link" href="home.php">Home</a>
              </li>
      <li class="nav-item">
                <a class="nav-link" href="about1.php">About Us</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Donors
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="why1.php">Why Donate Blood</a>
                  <a class="dropdown-item" href="donreg1.php">Donor Registration</a>
                  
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Blood Banks
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="regist1.php">Registered BloodBanks</a>
                  <a class="dropdown-item" href="newbb1.php">New Registration</a>
                  <a class="dropdown-item" href="find.php">Required BloodBanks</a>
                </div>
              </li>
     
     
        <li class="nav-item">
                    <a class="nav-link" href="search1.php">Search Blood</a>
                  </li>
          <li class="nav-item">
                    <a class="nav-link"> <form method='post' action="">
            <input type="submit" value="Logout" name="but_logout">
        </form></a>
                  </li>
      </ul>
    </div>
      </div>
      </div>
      </nav>
      <div class="content-wrapper">
        <div class="two-column-wrapper">
          <div class="profile-image-wrapper">
            <img src="images/why.jpeg" alt="">
          </div>
      
          <div class="profile-content-wrapper">
            <h1>Why Should you Donate Blood?</h1>
            <dl>
              <dt>Reduced risk of heart attacks and liver ailment</dt>
      <dd>Donating blood regularly is beneficial to prevent and reduce heart attacks and liver ailment. The risk of heart and liver related problem is caused by the iron overload in the body. Donating blood helps in maintaining the iron level in the body and thus reduce those risk.</dd>
      <br>
      <dt> Lowered risk of cancer</dt>
      <dd>By donating blood regularly,the iron level in the blood is balanced and the risk of cancer-related to the liver, lungs, and intestine gets lower.</dd>
      <br>
      <dt> New blood cells</dt>
      <dd>Once we donate blood, the body tries to restore the blood loss. This helps in the production of the new blood cells and maintain good health.</dd>
      <br>
      
      <dt> Maintain Weight</dt>
      <dd>It is recommended to donate blood for those who are overweight. Regularly donating blood helps in weight loss and burn fat up to 650 calories.</dd>
      <br> 
      <dt>Helps prevent premature ageing</dt>
      <dd>Blood donation helps in reducing stress on your mind and body. Also, keeps the skin tight and wrinkle-free.</dd>
      <br>
      <dt> Speeds up healing process</dt>
      <dd>The body tries to adjust to the loss of red blood the cells we donate blood, these adjustments also help in accelerating the wound healing process.</dd>
      <br>
      <dt> Lower cholesterol level</dt>
       <dd>Blood donation can help to reduce the amount of iron in the blood thus helps in lower cholesterol.</dd>
       <br>
       <dt> Blood storage</dt>
      <dd>There is no other method to manufacture blood; the only way to collect blood is from the people who are willing to donate. The blood that we donate is also stored at the blood bank after their usage and used in future when needed. Some chemicals are added to it in order to preserve it for long time and use it in future when needed.</dd>
      <br>
      <dt>Save lives</dt>
      <dd>Every time we donate one pint of blood it helps save three lives, so if we donate four times in a year we end up saving 12 lives. We don’t have to be a superhero to save someone, a simple act of donating blood can also save lives.</dd>
      
            </dl>
      
            <div class="btn1">
              <a href="donreg1.php"><p>Why wait</p><p>Donate now!!</p></a>
            </div>
          </div>
        </div>
      </div>
      </div>
      
  </body>
  </html>