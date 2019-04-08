<!DOCTYPE html>
<html lang="en">
  <head>
  	<style type="text/css">
  		
  .makecenter{
display: flex;
justify-content: center;
align-items: center;
  }
   .makeleft{
display: flex;
justify-content: left;
align-items: left;

  }
  .loginWindow{
  	box-shadow: 1px 1px 1px 1px red;
  	padding: 50px;
    position: absolute;
    width: 600px;
    height:300px;
    top:50%;
    left: 50%;
    margin-top: -200px;
    margin-left: -200px;
    border-radius: 8px;
    background: whitesmoke;
    opacity: 0.85;
  }
  .roundshape{
    border-radius: 8px;
    width: 500px;
    height: 35px;
    border-color: lightblue;
    padding:5px;
  }
  	</style>
  
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  </head>

  <body background="background.jpg">

  	<div  style="height: 50px;margin-top:5px" class="row bg-primary makeleft">
      <div class="col-sm-1"></div>
      <h3>ProductPLAZA</h3></div>
    <form  action="login_check.php" method="post" >
  	<div class="loginWindow">
     <b>UserID:</b><br><br>

     <input  type="text" class="roundshape" placeholder="Enter email" name="email" required><br><br>

    <b> Password:</b><br><br>
       <input type="password" class="roundshape"  placeholder="Password" name="password" required><br><br>
       
     <button type="submit" class="btn btn-primary">Login</button><br>
     Not yet Registerd?
     <a href="register.php">Create an Account</a>
    </div>

  </form>	

  
  </body>
</html>
