<?php 
session_start();
require_once "../../config/connection.php";
if(isset($_POST['profile_update_btn']) && isset($_POST['user_name']) && isset($_POST['phone_no']) && 
isset($_POST['gender']) && isset($_POST['user_address'])){
    $user_name = mysqli_escape_string($con, $_POST['user_name']);
    $phone_no = mysqli_escape_string($con, $_POST['phone_no']);
    $gender = mysqli_escape_string($con, $_POST['gender']);
    $user_address = mysqli_escape_string($con, $_POST['user_address']);
    $user_email = $_SESSION['user_email'];
    $select_userdata_query = "SELECT * FROM `user` WHERE `email` = '$user_email'";
    $select_userdata_query_run = mysqli_query($con, $select_userdata_query);
    if(mysqli_num_rows($select_userdata_query_run) > 0){
        $update_userdata_query = "UPDATE `user` SET `name`='$user_name',`mobile`='$phone_no',
        `gender`='$gender',`address`='$user_address' WHERE `email` = '$user_email'";
        $update_userdata_query_run = mysqli_query($con, $update_userdata_query);
        if($update_userdata_query_run){
            header('location: ../../view/user/profile.php?profile_update=yes');
        }
    }

}
?>