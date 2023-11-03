<?php
if (!isset($_SESSION)) {
    session_start();
  }
  require_once "../../config/connection.php";
  if(isset($_POST['change_password_btn']) && isset($_POST['new_password']) && isset($_POST['conform_password'])){
    $admin_email = $_SESSION['admin_email'];
    $current_password = mysqli_escape_string($con, $_POST['current_password']);
    $new_password = mysqli_escape_string($con, $_POST['new_password']);
    $conform_password = mysqli_escape_string($con, $_POST['conform_password']);
    $select_password_query = "SELECT * FROM `admin` WHERE `email` = '$admin_email' AND `password` = '$current_password' ";
    $select_password_query_run = mysqli_query($con, $select_password_query);
    if(mysqli_num_rows($select_password_query_run) > 0){
    if($new_password == $conform_password){
      $update_password_query ="UPDATE `admin` SET `password`='$new_password' WHERE `email` = '$admin_email' AND `password` = '$current_password'";
      $update_password_query_run = mysqli_query($con, $update_password_query);
      if($update_password_query_run){
        header('location: ../../view/admin/change_password.php?password_update=yes');

      }
    }else{
      header('location: ../../view/admin/change_password.php?npass_copass_not_match=not');
    }
  }else{
    header('location: ../../view/admin/change_password.php?cpass_not_match=not');
  }
}
?>