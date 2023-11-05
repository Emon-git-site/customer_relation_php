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

// delete services
if(isset($_GET['service_id'])){
$service_id = $_GET['service_id'];

$delete_services = " DELETE FROM `services` WHERE `id` = '$service_id'";
$delete_services_run = mysqli_query($con, $delete_services);
if($delete_services_run){
    header('location: ../../view/admin/add_services.php?delete_service=yes');   
}
}
?>