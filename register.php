<!DOCTYPE html>
<html lang="en">
  <head>
  	<style type="text/css">
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

  <body >


  	<div  style="height: 50px;margin-top:5px" class="row bg-primary makeleft">
      <div class="col-sm-1"></div>
      <div class="col-sm-11"><h3>ProductPLAZA</h3></div>
      </div>
  <div style="padding: 5px" class="container">
    <div class="row">
        <div  class="container">
           <div class="col-sm-3"></div>
              <div class="col-sm-6" style="border: 1px solid black;padding: 25px;background: whitesmoke">
            <form  action="register_insert.php" method="post">

                <h2>Registration</h2>
               
                  <label>First Name</label><br>
                  <input type="text"  placeholder="First Name" class="roundshape" name="firstName" autofocus required>
  
                  <label>Last Name</label>
                  <input type="text" placeholder="Last Name" class="roundshape" name="lastName" autofocus required>
               
                
                    <label >Email </label>
                    
                        <input type="email"  placeholder="Email" class="roundshape" name= "email" required>
                   
                    <label >Password</label>
                    
                        <input type="password"  placeholder="Password" name="password" class="roundshape" pattern=".{6,}" title="Six or more characters" required>
                   
                    <label>Confirm Password</label>
                   
                        <input type="password"  placeholder="Password" name="confirmPassword" class="roundshape"required><br><br>
                   
                    <label>Date of Birth</label>
                   
                        <input type="date" style="width: 200px" name="dateOfBirth" class="roundshape" required>
                    
                    <label >Gender</label>
                        
                                <label class="radio-inline">
                                    <input type="radio" name="gender" value="Female" required>Female
                                </label>
                            
                    
                                <label class="radio-inline">
                                    <input type="radio" name="gender" value="Male" required>Male
                                </label><br><br>
                      
                <button type="submit" class="btn btn-primary ">Register</button>
                 <button  class="btn btn-primary "><a style="color: white" href="login.php">Cancel</a> </button>
            </form> <!-- /form -->


        </div>
        <div class="col-sm-3"></div>

      </div>
      

    </div>
  </div>
  </body>
</html>
