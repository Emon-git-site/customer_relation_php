<?php 
require_once "../../config/connection.php";

if(isset($_POST['action_delete'])){
    $user_id = $_POST['user_id'];
    $delete_user_query = "DELETE FROM `user` WHERE `id` = '$user_id'";
    $delete_user_query_run = mysqli_query($con, $delete_user_query);
    if($delete_user_query_run){
        echo "delete_success";
    }
}
?>