<?php
session_start();
require_once "../../config/connection.php";
if(isset($_POST['add_services_btn'])){
 
    $user_email = $_SESSION['user_email'];

    $add_service = mysqli_escape_string($con, $_POST['add_service']);
    $insert_service_query = "INSERT INTO `services`( `services`) VALUES ('$add_service')";
    $insert_service_query_run = mysqli_query($con, $insert_service_query);
    
    if($insert_service_query_run){
        header('location: ../../view/admin/add_services.php?add_service=yes');   

    }
}

?>