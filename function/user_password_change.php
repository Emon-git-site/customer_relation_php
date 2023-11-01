<?php 
session_start();
require_once "dbconnection.php";
  if(!isset($_SESSION['user_email'])){
        header('location: index.php');
  }
  
?>