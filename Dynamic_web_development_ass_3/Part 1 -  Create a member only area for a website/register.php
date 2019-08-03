<?php
session_start();
if(isset($_SESSION['user'])!="")
{
 header("Location: members.php");
}

include_once 'connect.php';


// isset checks the variable is set or not

if(isset($_POST['btn-register'])){
  echo '<script>console.log("1 successfully")</script>';
  
  $uname = ($_POST['uname']);
  $psw = md5(($_POST['psw']));
  echo '<script>console.log("2 successfully")</script>';
  // mysqli_query perform a query to DB via $conn
  if(mysqli_query($conn, "INSERT INTO users(Username,Password) VALUES('$uname', '$psw')")){
    echo '<script>console.log("3 successfully")</script>';
    echo '<script>alert(\'Congratulations – you are now registered! \');</script>';
	unset($_POST);
   
  } else {
    echo '<script>console.log("4 successfully")</script>';
    echo '<script>alert(\'Error...! \');</script>';
  }
}


?>
<!DOCTYPE html>
<html>
<head>
<title>Registration Page</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head> 
<body>

<form method="post">
  <div class="container">  
  <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
    
    <label for="uname"><b>User Name</b></label>
    <input type="text" placeholder="Enter user name" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    
    <hr>
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <button type="submit" name="btn-register" class="registerbtn">Register</button>
  </div>
  
  <div class="container signin">
    <p>Already have an account? <a href="index.php">Sign in</a>.</p>
  </div>
</form>

</body>
</html>