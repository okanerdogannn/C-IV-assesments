<?php
session_start();
include_once 'connect.php';

  /// sql code for slect the user with matched email
  $sql_code = "SELECT * FROM users WHERE ID='".$_SESSION['user']."'";
  /// get the all info to a array from db
  $res = mysqli_query($conn,$sql_code);
 
  $user_row = mysqli_fetch_array($res);
?>



<!doctype html>

<html>    

<meta charset="utf-8">
<head>
<title>Welcome - <?php echo $user_row['Username']; ?></title>

<!--<link rel="stylesheet" href="myStyle.css" type="text/css" />-->
<link rel="stylesheet" href="style.css" type="text/css" />

</head>

<body>

<div id="header">

 <div id="left">

    </div>

    <div id="right">

     <div id="content">

         <h2>Hello </h2>
         <h3>WELCOME <?php echo $user_row['Username']; ?> </h3>
         <a href="logout.php?logout">Sign Out</a>

        </div>

    </div>

</div>

</body>

</html>

