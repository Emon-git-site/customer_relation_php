<?php
session_start();
require_once "../../config/connection.php";
if(isset($_POST['admin_login_btn'])){
    $admin_email = mysqli_escape_string($con, $_POST['admin_email']);
    $admin_password = mysqli_escape_string($con, $_POST['admin_password']);

    $admin_select_query = "SELECT * FROM `admin` WHERE `email` = '$admin_email' AND `password` = '$admin_password'";
    $admin_select_query_run = mysqli_query($con, $admin_select_query);
    if(mysqli_num_rows($admin_select_query_run) > 0 ){
        $_SESSION['admin_email'] = $admin_email;
        header('location: ../../view/admin/index.php?admin_log=yes');
    }else{
        header('location: ../../view/admin/index.php?admin_log=no');
    }

}