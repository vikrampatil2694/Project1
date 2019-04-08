<?php
$productId=$productName=$productPrice=$productQuantity=$productCategary="";

$productId=$_POST["productId"];
$productName=$_POST["productName"];
$productPrice1=$_POST["productPrice"];
$productPrice=doubleval($productPrice1);
$productQuantity1=$_POST["productQuantity"];

$productQuantity= intval($productQuantity1);
$productCategary=$_POST["productCategary"];



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
$sql="insert into products (productId,productName,productPrice,productQuantity,productCategary) values ('$productId','$productName','$productPrice','$productQuantity','$productCategary')";


if ($conn->query($sql) === TRUE) {
     header("Location: dashbord.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();

?>