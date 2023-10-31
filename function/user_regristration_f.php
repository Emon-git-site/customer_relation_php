<?php
session_start();
require_once "../includes/dbconnection.php";
if(isset($_POST['user_registration_btn']) && isset($_POST['user_name']) && 
isset($_POST['user_email']) && isset($_POST['user_password']) && isset($_POST['conform_password']) && 
isset($_POST['contact_no']) && isset($_POST['gender'])){
    $user_name = mysqli_escape_string($con, $_POST['user_name']);
    $user_email = mysqli_escape_string($con, $_POST['user_email']);
    $user_password = mysqli_escape_string($con, $_POST['user_password']);
    $conform_password = mysqli_escape_string($con, $_POST['conform_password']);
    $contact_no = mysqli_escape_string($con, $_POST['contact_no']);
    $gender = mysqli_escape_string($con, $_POST['gender']);
    if ($user_password != $conform_password) {
       header('location: ../user_registration.php?p_match=notmatch');
    }else{
        $select_email_query = "SELECT * FROM `user` WHERE `email` = '$user_email'";
        $select_email_query_run = mysqli_query($con, $select_email_query);
        if(mysqli_num_rows($select_email_query_run) > 0){
            header('location: ../user_registration.php?email= exit');
        }else{
            $insert_data_query = "INSERT INTO `user`(`name`, `email`, `password`, `mobile`, `gender`)
             VALUES ('$user_name', '$user_email', '$user_password', '$contact_no', '$gender')";
            $insert_data_query_run = mysqli_query($con, $insert_data_query);
        if($insert_data_query_run){
            header('location: ../user_registration.php?registration=yes');

        }  
        }
    }
    
}
?>