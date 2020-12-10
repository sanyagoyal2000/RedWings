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
    <link rel="stylesheet" href="bb.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<?php 

$name='';


// Register user
if(isset($_POST['btnsignup'])){
 
   $name = trim($_POST['name']);
   $phone = trim($_POST['phone']);
   $email = trim($_POST['email']);
   $password = trim($_POST['password']);
   $ad1 = trim($_POST['ad1']);
   $ad2 = trim($_POST['ad2']);
   $city = trim($_POST['city']);
   $state = trim($_POST['state']);
   $zip = trim($_POST['zip']);
  
  $bloodgroup_arr=$_POST['blood'];
  $blood=implode(",",$bloodgroup_arr);
  
 



   
    

   
    $query = "INSERT INTO bloodbanks (name,phone,email,password,ad1,ad2,city,state,zip,blood) VALUES ('$name', '$phone','$email','$password','$ad1','$ad2','$city','$state','$zip','$blood')";
    
    if(!mysqli_query($con,$query))
    {
        die("DAMMIT");
    }
    else{ echo "Success"; }
    
    mysqli_close($con);

   
  }
?>
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
      <div class="space"></div>
      <div class="form-class">
        <form action='' method='post'>
        

        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="inputName" placeholder="Name" name="name">
          </div>
          <div class="form-group col-md-6">
            <label for="phone no">Phone No.</label>
            <input type="tel" class="form-control" id="inputno" placeholder="Phone No." name="phone">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">Email</label>
            <input type="email" class="form-control" id="inputEmail" placeholder="Email" name="email">
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">Password</label>
            <input type="password" class="form-control" id="inputPassword" placeholder="Password" name="password">
          </div>
        </div>
        <div class="form-group">
          <label for="inputAddress">Address 1</label>
          <input type="text" class="form-control" id="inputAddress" placeholder="Flat, House no., Building, Company, Apartment" name="ad1">
        </div>
        <div class="form-group">
          <label for="inputAddress2">Address 2</label>
          <input type="text" class="form-control" id="inputAddress2" placeholder="Area, Colony, Street, Sector, Village" name="ad2">
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputCity">City</label>
            <input type="text" class="form-control" id="inputCity" name="city">
          </div>
          <div class="form-group col-md-4">
            <label for="inputState">State</label>
            <input type="text" class="form-control" id="inputState" name="state">
          </div>
          <div class="form-group col-md-2">
            <label for="inputZip">Zip</label>
            <input type="text" class="form-control" id="inputZip" name="zip">
          </div>
        </div>
        <div class="form-group">
          <div class="multipleSelection"> 
            <div class="selectBox" 
                onclick="showCheckboxes()"> 
                <select> 
                    <option>Select available blood groups</option> 
                </select> 
                <div class="overSelect"></div> 
            </div> 
  
            <div id="checkBoxes"> 
            <label for="first"> 
                    <input type="checkbox" id="first" name="blood[]" value="O+"/> 
                    O+
                </label> 
                  
                <label for="second"> 
                    <input type="checkbox" id="second" name="blood[]" value="AB+" /> 
                    AB+
                </label> 
                <label for="third"> 
                    <input type="checkbox" id="third" name="blood[]" value="A+" /> 
                    A+ 
                </label> 
                <label for="fourth"> 
                  <input type="checkbox" id="fourth" name="blood[]" value="B+" /> 
                  B+ 
              </label> 
              <label for="fifth"> 
                <input type="checkbox" id="fifth" name="blood[]" value="O-" /> 
                O-
            </label> 
                
              <label for="sixth"> 
                  <input type="checkbox" id="sixth" name="blood[]" value="AB-" /> 
                  AB-
              </label> 
              <label for="seventh"> 
                  <input type="checkbox" id="seventh" name="blood[]" value="A-"/> 
                  A-
              </label> 
              <label for="fourth"> 
                  <input type="checkbox" id="eigth" name="blood[]"  value="B-"/> 
                  B-
              </label> 
 
            </div> 
        </div> 
        </div>

        <div class="form-group">
          <div class="form-check">
            
          </div>
        </div>
        <button type="submit" name="btnsignup" class="btn btn-primary">Register</button>
      </form>
    </div>
    </body>
      <script src="bb.js"></script>
    

    </html>


