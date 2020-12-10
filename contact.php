<?php
include "config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Contact Us</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hamburgers/1.1.3/hamburgers.min.css" integrity="sha512-+mlclc5Q/eHs49oIOCxnnENudJWuNqX5AogCiqRBgKnpoplPzETg2fkgBFVC6WYUVxYYljuxPNG8RE7yBy1K+g==" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hamburgers/1.1.3/hamburgers.css" integrity="sha512-W4KOSUNkQhX7JkalSiTkwAIoqsAvxDdgRc/WAa5U0R2TKTpHnNZuf9AiBk8InN4GCAMwer+O9fe4ThxIQFkOGQ==" crossorigin="anonymous" />  
  <link rel="stylesheet" href="design1.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>

   

    <link rel="stylesheet" type="text/css" href="css/animate.css">

    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    
    <?php 

$error_message = "";$success_message = "";


// Register user
if(isset($_POST['contactbtn'])){
 
   $name = trim($_POST['name']);
   
   $email = trim($_POST['email']);
   $phone = trim($_POST['phone']);
   $messages = trim($_POST['messages']);
   
   $isValid=true;

 
   if($name == ''  || $email == '' || $phone==''||$messages=='' ){
     $isValid = false;
     $error_message = "Please fill all fields.";
   }
   
   if($isValid){
    $insertSQL = "INSERT INTO message(name,email,phone,messages) values(?,?,?,?)";
    $stmt = $con->prepare($insertSQL);
    $stmt->bind_param("ssss",$name,$email,$phone,$messages);
    $stmt->execute();
    $stmt->close();
  
    $success_message = "Query submitted successfully";
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
                  <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact Us</a>
                  </li>
      </ul>
    </div>
      </div>
      </div>
      </nav>
	<div class="bg-contact100" style="background-image: url('images/bg-01.jpg');">
		<div class="container-contact100">
			<div class="wrap-contact100">
				<div class="contact100-pic js-tilt" data-tilt>
					<img src="images/img-01.png" alt="IMG">
				</div>

				<form class="contact100-form validate-form" method='post' action=''>
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
					<span class="contact100-form-title">
						Get in touch
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Name is required">
						<input class="input100" type="text" name="name" placeholder="Name">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
          </div>
          <div class="wrap-input100 validate-input" data-validate = "Valid phone no. is required">
						<input class="input100" type="text" name="phone" placeholder="Contact no.">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-phone" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Message is required">
						<textarea class="input100" name="messages" placeholder="Message"></textarea>
						<span class="focus-input100"></span>
					</div>

					<div class="container-contact100-form-btn">
						<button class="contact100-form-btn" name="contactbtn">
							Send
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>





	
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>

	<script src="js/main.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

</body>
</html>
