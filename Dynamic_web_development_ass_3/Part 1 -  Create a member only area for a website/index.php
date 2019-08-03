<?php
session_start();
include_once 'connect.php';

if(isset($_SESSION['user'])!=""){
  header("Location: members.php");
}
/// console_log func for php
function console_log( $data ){
  echo '<script>';
  echo 'console.log('. json_encode( $data ) .')';
  echo '</script>';
}


if(isset($_POST['btn-login'])){
   /// get email and psw info from post
  $uname = mysqli_real_escape_string($conn, $_POST['uname']);
  $pass = mysqli_real_escape_string($conn, $_POST['psw']);

  /// sql code for slect the user with matched email
  $sql_code = "SELECT * FROM users WHERE Username='$uname'";
  /// get the all info to a array from db
  $res = mysqli_query($conn,$sql_code);
  $all_user_data = mysqli_fetch_array($res);

  console_log( $all_user_data );
  console_log( $all_user_data['Password'] );
  console_log( md5($pass) );
   
  
  if($all_user_data['Password'] == md5($pass)){
    
    echo '<script>alert("welcome '.$all_user_data['Username'] .' \n logged in successfully. . .");</script>';
    $_SESSION['user'] = $all_user_data['ID'];
    header("Location: members.php");
  }
  else{
    echo '<script>alert("email/password incorrect !!!");</script>';
  }
}


?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<h2>Login Form</h2>

<form method="post">
  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter user name" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
        
    <button type="submit" name="btn-login">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <a href="register.php">Sign Up Here</a>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>

</body>
</html>
