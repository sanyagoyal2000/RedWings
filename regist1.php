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
<?php 
 
$query="select * from bloodbanks"; 
$result=mysqli_query($con,$query); 
?> 
<!DOCTYPE html> 
<html> 
	<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Design</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="design1.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
		<title> Fetch Data From Database </title> 
    <style>
      table {
  border-collapse: collapse;
  width: 100%;
  align:center;
}

th, td {
  text-align: left;
  padding: 8px;
}
    .table-heading{
      margin-top: 30px;
      font-style:Georgia;
      color:#DC143C;
      text-align:center;
      
    }
    tr:nth-child(even) {background-color: #f2f2f2;}
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
      <h2 class="table-heading">REGISTERED BLOOD BANKS</h2>
	
	<table align="center"  border="1px" style="width:600px; line-height:40px; margin:50px;"> 
	 
			 <tr> <th> ID </th> 
              <th> Name </th> 
              <th>Phone No.</th>
              <th> Email Id</th> 
			  <th> City </th> 
              <th> State </th> 
              <th> Zip </th> 
              <th> Available Blood Groups </th> 
			  
		</tr> 
		
		<?php while($rows=mysqli_fetch_assoc($result)) 
		{ 
		?> 
		<tr> <td><?php echo $rows['ID']; ?></td> 
        <td><?php echo $rows['name']; ?></td> 
        <td><?php echo $rows['phone']; ?></td>
		<td><?php echo $rows['email']; ?></td> 
        <td><?php echo $rows['city']; ?></td> 
        <td><?php echo $rows['state']; ?></td>
        <td><?php echo $rows['zip']; ?></td>
        <td><?php echo $rows['blood']; ?></td>
		</tr> 
	<?php 
               } 
          ?> 

	</table> 
	</body> 
	</html>
