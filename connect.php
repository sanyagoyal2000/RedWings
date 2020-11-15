<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="bb";
$conn=mysqli_connect($server_name,$username,$password,$database_name);
if(!$conn)
{
    die("Connection Failed:" .msql_connect_error());
}
if(isset($_POST['save'])){
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
	

 $sql_query="INSERT INTO entry_details (name,phone,email,password,ad1,ad2,city,state,zip,bloodgroup)
 VALUES('$name','$phone','$email','$password','$ad1','$ad2','$city','$state','$zip','$bloodgroup')";
	if(mysqli_query($conn,$sql_query)){
        echo "New Details Entry inserted successfull !";
    }
    else{
        echo "Errror: "
.$sql."" .msqli_error($conn);    }
mysqli_close($conn);
    }
?>