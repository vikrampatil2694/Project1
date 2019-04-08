<?php 

$email=$_POST["email"];

$password=$_POST["password"];

$servername = "localhost";
$username = "vikram";
$pass ="vikram@123";
$dbname = "projectdb";

$conn = new mysqli($servername, $username,$pass,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql="select * from credentials where email='$email' and password='$password'";
$result = $conn->query($sql);
if($result->num_rows > 0){
  		 header("Location: dashbord.php");
   
} 
else{
	$error="wrong password";
	 header("Location: login.php?$error");
   }
$conn->close();
?>
