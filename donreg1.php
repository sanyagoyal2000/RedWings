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
    <link rel="stylesheet" href="reegi.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Poppins:400,600&display=swap" rel="stylesheet">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
<?php 
$error_message = "";$success_message = "";
if(isset($_POST['terms'])){
    
  $chosenAnswer = $_POST['terms'];

  if(strcasecmp($chosenAnswer, "yes") == 0){
    $isValid=true;
          
   
if (isset($_POST['submit'])) {
  

  $fname=trim($_POST['fname']);
  $lname=trim($_POST['lname']);
  $email=trim($_POST['email']);
  $password=trim($_POST['password']);
  
  $gender = ($_POST['gender']);

  
  $phone=trim($_POST['phone']);
  
  $Day = trim($_POST['Day']);
  $Month =trim($_POST['Month']);
  $Year =trim( $_POST['Year']);

  
  $bloodgroup=trim($_POST['bloodgroup']);
  $ad1=trim($_POST['ad1']);
  $ad2=trim($_POST['ad2']);
  $city=trim($_POST['city']);
  $state=trim($_POST['state']);
  $zip=trim($_POST['zip']);
  
  
  $isValid=true;

 
if($fname == '' ||$lname=='' || $email == '' || $password == ''|| $gender==''||$phone==''||$Day=='' ||$Month==''||$Year==''||$bloodgroup==''||$ad1==''||$ad2==''||$city==''||$state==''||$zip==''){
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
  $stmt = $con->prepare("SELECT * FROM donors WHERE email = ?");
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
  $insertSQL = "INSERT INTO donors(fname,lname,email,password,gender,phone,Day,Month,Year,bloodgroup,ad1,ad2,city,state,zip) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
  $stmt = $con->prepare($insertSQL);
  $stmt->bind_param("ssssssiiissssss",$fname,$lname,$email,$password,$phone,$gender,$Day,$Month,$Year,$bloodgroup,$ad1,$ad2,$city,$state,$zip);
  $stmt->execute();
  $stmt->close();

  $success_message = "Account created successfully.";
}
}
  }

  else{
    echo "Rethink your choice";
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
      <header class="header">
        <h1 class="header__title">Register as A Donor</h1>
      </header>
      <div class="content">
        <div class="content__inner">
          <div class="container">
           
       
            <h2 class="content__title">Click on steps or 'Prev' and 'Next' buttons</h2>
          </div>
          <div class="container overflow-hidden">
            <div class="multisteps-form">
              <div class="row">
                <div class="col-12 col-lg-8 ml-auto mr-auto mb-4">
                  <div class="multisteps-form__progress">
                    <button class="multisteps-form__progress-btn js-active" type="button" title="User Info">Welcome</button>
                    <button class="multisteps-form__progress-btn" type="button" title="Address">Almost There</button>
                    <button class="multisteps-form__progress-btn" type="button" title="Address">Congratulations!!!</button>
                    
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12 col-lg-8 m-auto">
                  <form class="multisteps-form__form" method='post' action=''>
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

                    <div class="multisteps-form__panel shadow p-4 rounded bg-white js-active" data-animation="scaleIn">
                      <h3 class="multisteps-form__title">User Info</h3>
                      <div class="multisteps-form__content">
                        <div class="form-row mt-4">
                          <div class="col-12 col-sm-6">
                            <input class="multisteps-form__input form-control" type="text" name="fname" placeholder="First Name"/>
                          </div>
                          <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                            <input class="multisteps-form__input form-control" type="text" name="lname" placeholder="Last Name"/>
                          </div>
                        </div>
                        <div class="form-row mt-4">
                          <div class="col-12 col-sm-6">
                            <input class="multisteps-form__input form-control" type="email" name="email" placeholder="Email"/>
                          </div>
                          <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                            <input class="multisteps-form__input form-control" type="password" name="password" placeholder="Password"/>
                          </div>
                        </div>
                        <div class="form-row mt-4">
                          <div class="col-12 col-sm-6">
                            <label class="radio-inline">Gender
                            <br>
                            <input type="radio" name="gender" value="male"/> Male
                            <input type="radio" name="gender" value="female"/> Female
                            <input type="radio" name="gender" value="other"/> Other
                          </label>
    
               
          </div>
                          <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                            <input class="multisteps-form__input form-control" type="tel" name="phone" placeholder="Mobile no."/>
                          </div>
                        </div>
                        <div class="button-row d-flex mt-4">
                          <button class="btn btn-primary ml-auto js-btn-next" type="button" title="Next">Next</button>
                        </div>
                      </div>
                    </div>
       
                    <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
                      <h3 class="multisteps-form__title">Your Address and Other Details</h3>
                      <div class="multisteps-form__content">
                        <div class="form-row mt-4">
                            <div class="col-12 col-sm-6">
                            <div>
                                <select name="Day">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                    <option value="21">21</option>
                                    <option value="22">22</option>
                                    <option value="23">23</option>
                                    <option value="24">24</option>
                                    <option value="25">25</option>
                                    <option value="26">26</option>
                                    <option value="27">27</option>
                                    <option value="28">28</option>
                                    <option value="29">29</option>
                                    <option value="30">30</option>
                                    <option value="31">31</option>
                                </select>
                                <!-- Birth Month -->
                                <select name="Month">
                                    <option value="January">January</option>
                                    <option value="February">February</option>
                                    <option value="March">March</option>
                                    <option value="April">April</option>
                                    <option value="May">May</option>
                                    <option value="June">June</option>
                                    <option value="July">July</option>
                                    <option value="August">August</option>
                                    <option value="September">September</option>
                                    <option value="October">October</option>
                                    <option value="November">November</option>
                                    <option value="December">December</option>
                                </select>
                                <!-- Birth Year -->
                                <select name="Year">
                                    <option value='1947'>1947</option>
                                    <option value='1948'>1948</option>
                                    <option value='1949'>1949</option>
                                    <option value='1950'>1950</option>
                                    <option value='1951'>1951</option>
                                    <option value='1952'>1952</option>
                                    <option value='1953'>1953</option>
                                    <option value='1954'>1954</option>
                                    <option value='1955'>1955</option>
                                    <option value='1956'>1956</option>
                                    <option value='1957'>1957</option>
                                    <option value='1958'>1958</option>
                                    <option value='1959'>1959</option>
                                    <option value='1960'>1960</option>
                                    <option value='1961'>1961</option>
                                    <option value='1962'>1962</option>
                                    <option value='1963'>1963</option>
                                    <option value='1964'>1964</option>
                                    <option value='1965'>1965</option>
                                    <option value='1966'>1966</option>
                                    <option value='1967'>1967</option>
                                    <option value='1968'>1968</option>
                                    <option value='1969'>1969</option>
                                    <option value='1970'>1970</option>
                                    <option value='1971'>1971</option>
                                    <option value='1972'>1972</option>
                                    <option value='1973'>1973</option>
                                    <option value='1974'>1974</option>
                                    <option value='1975'>1975</option>
                                    <option value='1976'>1976</option>
                                    <option value='1977'>1977</option>
                                    <option value='1978'>1978</option>
                                    <option value='1979'>1979</option>
                                    <option value='1980'>1980</option>
                                    <option value='1981'>1981</option>
                                    <option value='1982'>1982</option>
                                    <option value='1983'>1983</option>
                                    <option value='1984'>1984</option>
                                    <option value='1985'>1985</option>
                                    <option value='1986'>1986</option>
                                    <option value='1987'>1987</option>
                                    <option value='1988'>1988</option>
                                    <option value='1989'>1989</option>
                                    <option value='1990'>1990</option>
                                    <option value='1991'>1991</option>
                                    <option value='1992'>1992</option>
                                    <option value='1993'>1993</option>
                                    <option value='1994'>1994</option>
                                    <option value='1995'>1995</option>
                                    <option value='1996'>1996</option>
                                    <option value='1997'>1997</option>
                                    <option value='1998'>1998</option>
                                    <option value='1999'>1999</option>
                                    <option value='2000'>2000</option>
                                    <option value='2001'>2001</option>
                                    <option value='2002'>2002</option>
                                    
                                </select>
                            </div>

                            </div>
                            <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                              <input class="multisteps-form__input form-control" type="text" name="bloodgroup" placeholder="Blood Group"/>
                            </div>
                          </div>
                        <div class="form-row mt-4">
                          <div class="col">
                            <input class="multisteps-form__input form-control" type="text" name="ad1" placeholder="Address 1"/>
                          </div>
                        </div>
                        <div class="form-row mt-4">
                          <div class="col">
                            <input class="multisteps-form__input form-control" type="text" name="ad2" placeholder="Address 2"/>
                          </div>
                        </div>
                        <div class="form-row mt-4">
                          <div class="col-12 col-sm-6">
                            <input class="multisteps-form__input form-control" type="text" name="city" placeholder="City"/>
                          </div>
                          <div class="col-6 col-sm-3 mt-4 mt-sm-0">
                            <input class="multisteps-form__select form-control" type="text" name="state" placeholder="State"/>
                            
                          </div>
                          <div class="col-6 col-sm-3 mt-4 mt-sm-0">
                            <input class="multisteps-form__input form-control" type="text" name="zip" placeholder="Pincode"/>
                          </div>
                        </div>
                        <div class="button-row d-flex mt-4">
                          <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Prev</button>
                          <button class="btn btn-primary ml-auto js-btn-next" type="button" title="Next">Next</button>
                        </div>
                      </div>
                    </div>
       
                    
                    <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
                      <h3 class="multisteps-form__title">Wanna Save Lives??</h3>
                      <div class="multisteps-form__content">
                        <div class="form-row mt-4">
                        <div class="radio">
                            <label><input type="radio" name="terms" value="yes" checked>Yes</label>
                          </div>
                          <br>
                          <br>
                          <div class="radio">
                            <label><input type="radio" value="no" name="terms">No</label>
                          </div>

                            
                           <br>
                           <br>
                          <p><i>“If you really want to lend a hand, lend an arm.”<BR>
                            “Remember that the happiest people are not those getting more, but those giving more.”</i> <br>– H. Jackson Brown Jr.
                            </p>
                        </div>
                        <div class="button-row d-flex mt-4">
                          <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Prev</button>
                          <button class="btn btn-success ml-auto"  name="submit" title="Send">Send</button>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
       
      
      
<script src="regi.js"></script>
</body>
</html>
