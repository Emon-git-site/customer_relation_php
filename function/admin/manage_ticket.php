<?php
session_start();
require_once "../../config/connection.php";
if(isset($_POST['admin_remark'])){

  $remark  = mysqli_escape_string($con, $_POST['remark']);
  $ticket_id  = mysqli_escape_string($con, $_POST['ticket_id']);
  $admin_remark_query = "UPDATE `ticket` SET `admin_remark`='$remark' WHERE `id` ='$ticket_id'; ";
  $admin_remark_query_run = mysqli_query($con, $admin_remark_query);
  if($admin_remark_query_run){
    header('location: ../../view/admin/manage_ticket.php?admin_remark=yes');

  }

}
?>