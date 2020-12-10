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
                     <form method='post' class="nav-item" action="">
            <input class="nav-link1" type="submit" value="Logout" name="but_logout">
        </form>
                  </li>
      </ul>
    </div>
      </div>
      </div>
      </nav>
      <div class="content-wrapper">
  <div class="two-column-wrapper">
    <div class="profile-image-wrapper">
      <div class="img1">
      <img src="images/img3.jpg" alt=""></div>
      <div class="img2">
        <img src="images/about2.png " alt="">
      </div>
    </div>

    <div class="profile-content-wrapper">
      <H3>Our main objectives at Red Wings are:</H3>
      <ul>
      
      <li> Safe and Adequate Blood Supplies
      </li>
      <li> Reduced Turnaround Time
      </li>
      
      <li> Preventing Wastage of Blood
      </li>
      
      <li> Networking of Blood Banks
      </li>
      
      <li> Donor Repository
      
      </li>
      
       </ul>
      
       
      <p><i>It is our mission to make the best use of contemporary technologies in delivering a promising web portal to bring together all the blood donors in India; thereby fulfilling every blood request in the country.
       </i></p>
      
      <p>We, at Red Wings, are a community of blood donors and recipients who aspire to provide easy access to the blood banks and related 
        hospitals to the recipients and donors alike. Donors can join us and look for nearest blood banks to their location. People in need of blood 
        can search for blood banks near them. In order to provide easy access of blood to those in need, we share your details with the blood bank you are approaching to reduce the hassle of documentation when in need. We also provide a list of blood banks associated with us to ensure the authenticity and their contact information in case of emergencies. Anyone can associate with us and help us fulfil our objectives and save a life.</p>
      
      
    </div>
  </div>
</div>
</div>
</body>
</html>
