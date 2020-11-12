<?php 
session_start(); 

if(isset($_POST['checker'])) 
{ 
  if($_POST['username'] == "admin" && $_POST['password'] == "mov2019") 
  { 
    $_SESSION['auth'] = "ok"; 
    header('location: ../dashboard.php'); 
  } 
  else 
  { 
    header('location: ../index.php');
  } 
} 
?>