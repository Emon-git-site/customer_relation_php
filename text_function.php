<?php
session_start();
require_once "config/connection.php"; 
if(isset($_POST['user_login_btn'])){
  

    $user_email = mysqli_escape_string($con, $_POST['user_email']);
    $user_password = mysqli_escape_string($con, $_POST['user_password']);
    $user_select_query = "SELECT * FROM `user` WHERE `email` = '$user_email' and `password` = '$user_password'";
    $user_select_query_run = mysqli_query($con, $user_select_query);

    
    if(mysqli_num_rows($user_select_query_run) > 0){
        


        header('location: test.php');   
       

    } 
}
?>