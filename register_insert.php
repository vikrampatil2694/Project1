<?php
$firstName=$lastName=$email=$password=$confirmPassword=$dateOfBirth=$gender="";

$firstName=$_POST["firstName"];
$lastName=$_POST["lastName"];
$email=$_POST["email"];
$password=$_POST["password"];
$confirmPassword=$_POST["confirmPassword"];
$dateOfBirth=$_POST["dateOfBirth"];
$gender=$_POST["gender"];

$servername = "localhost";
$username = "vikram";
$pass ="vikram@123";
$dbname = "projectdb";

// Create connection
$conn = new mysqli($servername, $username,$pass,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if($password==$confirmPassword){
$sql="insert into credentials (firstName,lastName,email,password,dateOfBirth,gender) values ('$firstName','$lastName','$email','$password','$dateOfBirth','$gender')";
if ($conn->query($sql) === TRUE) {
    	 header("Location: login.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
else{
	echo "password and confirmPassword should be same  ...record not inserted";
}

$conn->close();
?>