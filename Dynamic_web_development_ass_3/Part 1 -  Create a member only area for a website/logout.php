<?php
session_start();
if(!isset($_SESSION['user'])){
    header("Location: index.php");
}elseif(isset($_SESSION['user']) != ""){
    header("Location: members.php");
}
if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['user']);
    header('Location: index.php');
}

?>