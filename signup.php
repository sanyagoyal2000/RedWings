<?php 
include "config.php";
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

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="final.css">

<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>


<link rel="shortcut icon" href="assets/images/fav.jpg">


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="shortcut icon" href="assets/images/fav.jpg">
<?php 
$error_message = "";$success_message = "";

// Register user
if(isset($_POST['btnsignup'])){
   $name = trim($_POST['name']);
  
   $email = trim($_POST['email']);
   $password = trim($_POST['password']);
   
   $gender = trim($_POST['gender']);
   $address = trim($_POST['address']);
   $phone = trim($_POST['phone']);
   

   $isValid = true;

   // Check fields are empty or not
   if($name == ''  || $email == '' || $password == ''|| $gender==''||$address==''||$phone==''){
     $isValid = false;
     $error_message = "Please fill all fields.";
   }

  

   // Check if Email-ID is valid or not
   if ($isValid && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
     $isValid = false;
     $error_message = "Invalid Email-ID.";
   }

   if($isValid){

     // Check if Email-ID already exists
     $stmt = $con->prepare("SELECT * FROM users WHERE email = ?");
     $stmt->bind_param("s", $email);
     $stmt->execute();
     $result = $stmt->get_result();
     $stmt->close();
     if($result->num_rows > 0){
       $isValid = false;
       $error_message = "Email-ID is already existed.";
     }

   }

   // Insert records
   if($isValid){
     $insertSQL = "INSERT INTO users(name,email,password,gender,address,phone) values(?,?,?,?,?,?)";
     $stmt = $con->prepare($insertSQL);
     $stmt->bind_param("ssssss",$name,$email,$password,$gender,$address,$phone);
     $stmt->execute();
     $stmt->close();

     $success_message = "Account created successfully.";
   }
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
                  <a class="dropdown-item" href="find.php">Required BloodBanks</a>
                </div>
              </li>
     
     
        <li class="nav-item">
                    <a class="nav-link" href="search.html">Search Blood</a>
                  </li>
          <li class="nav-item">
                    <a class="nav-link" href="login.php">Login</a>
                  </li>
      </ul>
    </div>
      </div>
      </div>
      </nav>
      <div class="container-fluid ">
        <div class="container ">
            <div class="row ">
            
                <div class="col-sm-10 login-box">
                    <div class="row">
                       <div class="col-lg-4 col-md-5 box-de">
                           
                            <div class="ditk-inf sup-oi">
                                <h2 class="w-100">Already Have an Account </h2>
                                <p>Simply login to your account by clicking the login Button</p>
                                <a href="login.php">
                                    <button type="button" class="btn btn-outline-light">LOG IN</button>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-7 log-det">
                            
                            <h2>Create Account</h2>
                            
                            
                            <form method='post' action=''>


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

                            <div class="text-box-cont">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">
                                        <i class="far fa-user"></i></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Full Name" name="name" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                                 <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="far fa-envelope"></i>
                                        </span>
                                    </div>
                                    <input type="email" class="form-control" placeholder="Email Address" name="email" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                                 <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></span>
                                    </div>
                                    <input type="password" class="form-control" placeholder="Password" name="password" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                            
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-venus-mars"></i></span>
                                    </div>
                                   <div class="form-control">

                                   Male<input type="radio" name="gender" value="male" />

                                   Female<input type="radio" name="gender" value="female"/>
                                   Other<input type="radio" name="gender" value="other"/></div>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-map-marker-alt"></i></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Address" name="address" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-phone-alt"></i></span>
                                    </div>
                                    <input type="tel" class="form-control" placeholder="Mobile No." name="phone" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                               
                                <div class="input-group center sup mb-3">
                                    <button class="btn btn-success btn-round" name="btnsignup">SIGN UP</button>
                                </div> 
</form>   
                            </div>
                            


                        </div>
                       
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</body>
<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/script.js"></script>

</html>
