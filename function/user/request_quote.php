<?php
if (!isset($_SESSION)) {
    session_start();
}
require_once "../../config/connection.php";

if(isset($_POST['quote_submit']) && isset($_POST['name']) && isset($_POST['email']) && isset($_POST['query']) && 
isset($_POST['contactno']) && isset($_POST['company'])){
    $name = mysqli_escape_string($con, $_POST['name']);
    $email = $_SESSION['user_email'];
    $query = mysqli_escape_string($con, $_POST['query']);
    $contactno = mysqli_escape_string($con, $_POST['contactno']);
    $company = mysqli_escape_string($con, $_POST['company']);
    $posting_date = date("Y-m-d");
    $services_array =  $_POST['service'];
    $services = implode(", ", $services_array);
    $insert_quote_query = "INSERT INTO `quota_request`(`name`, `email`, `contact`, `company`, `services`, `query`, `posting_date`) 
                           VALUES ('$name', '$email', '$contactno', '$company', '$services', '$query', '$posting_date')";
    $insert_quote_query_run = mysqli_query($con, $insert_quote_query);
    if($insert_quote_query_run){
        header('location: ../../view/user/request_quote.php?quote_request=yes');
    }
}

?>