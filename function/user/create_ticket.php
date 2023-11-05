<?php 
if (!isset($_SESSION)) {
  session_start();
}
require_once "../../config/connection.php";
 
if(isset($_POST['create_ticket_btn'])){
  $subject = mysqli_escape_string($con, $_POST['subject']);
  $task_type =  $_POST['task_type'];
  $priority =  $_POST['priority'];
  $user_email = $_SESSION['user_email'];
  $posting_date = date("Y-m-d");
  $status = "open";
  $ticket_insert_query = "INSERT INTO `ticket`(`email`, `subject`, `task_type`, `priority`, `status`,`posting_date`) VALUES
   ('$user_email', '$subject', '$task_type', '$priority', '$status', '$posting_date')";
   $ticket_insert_query_run = mysqli_query($con, $ticket_insert_query);
   if($ticket_insert_query_run){
    header('location: ../../view/user/create_ticket.php?create_ticket=yes');

   }


}
?>