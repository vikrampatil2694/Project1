<!DOCTYPE html>
<html>
<head>
	<title>Dashbord</title>
	<style type="text/css">
	.roundshape{
     border-radius: 8px;
    width: 500px;
    height: 35px;
    border-color: lightblue;
    padding:5px;
  } 	
.makecenter{
display: flex;
justify-content: center;
align-items: center;
  }
  .sticky {
  position: fixed;
  top: 0;
  width: 100%;
}
  tr,td,table,th{
  border: 2px solid black;

  }
	</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  </head>
  <body background="">
  <div  style="height: 50px;margin-top:5px" class="row bg-primary makeleft sticky-top">
      <div class="col-sm-1"></div>
      <div class="col-sm-10"><h3>ProductPLAZA....Welcomes You</h3></div>
      <div class="col-sm-1"><a style="color: black" href="login.php">Logout</a></div>
      </div>
<div class="container">
	<div style="border: 1px solid black" class="row makecenter" style="margin-top: 5px">
		<form   action="product_insert.php" method="post">
			<label class="makecenter">Please Fill Your Product Details</label><br>
			<label>Product ID:</label><br>
			<input type="text" class="roundshape" placeholder="Enter Product Id" name="productId" required><br>
			<label>Product Name:</label><br>
			<input type="text" class="roundshape" placeholder="Enter Product Name" name="productName" required><br>
			<label>Product Price:</label><br>
			<input type="number" class="roundshape" placeholder="Enter Product Price" name="productPrice" title="only number allowed"  required><br>
			<label>Product Quantity:</label><br>
			<input type="number" class="roundshape" placeholder="Enter Product Quantity" name="productQuantity" title="only number allowed" required><br>
			<label>Product Categary:</label><br>
			<input type="text" class="roundshape" placeholder="Enter Product Categary" name="productCategary" required><br><br>

			<div class="makecenter"><button type="submit" class="btn btn-primary">Submit</button></div><br>
		</form>
	</div>
</div><br>

<div class="container">
	<?php


$servername = "localhost";
$username = "vikram";
$pass ="vikram@123";
$dbname = "projectdb";
$sr=1;
// Create connection
$conn = new mysqli($servername, $username,$pass,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "select * from products";
$result = $conn->query($sql);
if($result->num_rows > 0) {
    // output data of each row
    ?>
    <table class="table table-hover" style="width:100%;">
  <tr>
    <th>SR.NO</th>
    <th>Product ID</th> 
    <th>Product Name</th>
    <th>Price</th>
    <th>Quantity</th>
    <th>Categary</th>
  

  </tr>

    <?php
    while($row = $result->fetch_assoc()){
    	?>
    	
  <tr >
  	<td><?php echo $sr++ ?></td>
    <td style="align-items: center;"><?php echo $row["productId"] ?></td>
    <td><?php echo $row["productName"] ?></td>
    <td><?php echo $row["productPrice"] ?></td>
    <td><?php echo $row["productQuantity"] ?></td>
    <td><?php echo $row["productCategary"] ?></td>

  </tr>
  
	
       	<?php
    } ?></table><?php
} else {
	?>
<h1><?php
    echo "0 results"; ?></h1><?php 
}
$conn->close();
?>
</div>
</body>
</html>