<?php
include "config.php";
ini_set('display_errors',1);
?>


    <HTML>
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
  margin-left: auto;

    margin-right: auto;
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
                <a class="nav-link" href="index.html.html">Home</a>
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
                  <a class="dropdown-item" href="find.php">Required BloodBanks</a>
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
      <h2 class="table-heading">RESULTING BLOOD BANKS</h2>
      <table border="1px" style="line-height:40px,width:900px; "> 
     
  <tr><th> Name </th> 
              <th>Phone No.</th>
              <th> Email Id</th> 
              <th>Address 1</th>
              <th>Address 2</th>
			  <th> City </th> 
              <th> State </th> 
              <th> Zip </th> 
              <th> Available Blood Groups </th> </tr>


        <?php 
        
    
    if( isset($_POST['search']) ) {
     $blood='';
      $state=$_POST['state'];
      if(isset($_POST["bgroup"])){
      $blood=$_POST['bgroup'];}
      $query=mysqli_query($con,"SELECT * FROM bloodbanks WHERE state like '%$state%' OR blood like '%$blood' ");
      if(mysqli_num_rows($query)>0){
        while($row=mysqli_fetch_array($query))
            { 
                
                echo "<tr><td>".$row['name']."</td><td>".$row['phone']."</td><td>".$row['email']."</td><td>".$row['ad1']."</td><td>".$row['ad2']."</td><td>".$row['city']."</td><td>".$row['state']."</td><td>".$row['zip']."</td><td>".$row['blood']."</td></tr>";
            
                       } 
                  
  }
else{
    echo "No BloodBank Found<br><br>";
  }

}

	?> 
		
    </table>
            
</body>
</html>
