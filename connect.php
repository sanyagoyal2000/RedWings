<?php
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
	$password = $_POST['password'];
	
    $ad1= $_POST['ad1'];
    $ad2= $_POST['ad2'];
    $city= $_POST['city'];
    $state= $_POST['state'];
    $zip= $_POST['zip'];
	$bloodgroup = $_POST['bloodgroup'];
	

	// Database connection
	$conn = new mysqli('localhost','root','','bb');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(name,phone, email, password, ad1,ad2,city,state,zip,bloodgroup) values(?, ?, ?, ?, ?, ?,?,?,?,?)");
		$stmt->bind_param("sissssssis", $name,$phone,$email,$password,$ad1,$ad2,$city,$state,$zip,$bloodgroup);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>