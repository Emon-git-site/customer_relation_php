<?php
require_once "../../config/connection.php";
if(isset($_POST['user_email'])){
    $user_email = $_POST['user_email'];

    if (filter_var($user_email, FILTER_VALIDATE_EMAIL)===false) {
		echo " You did not enter a valid email.";
    }else{
        $select_email_query = "SELECT * FROM user WHERE email='$user_email'";
		$select_email_query_run = mysqli_query($con,$select_email_query);

        if(mysqli_num_rows($select_email_query_run) > 0){
            echo "the email is not avaiable";
            echo "<script>$('#user_registration_btn').prop('disabled',true);</script>";

        }else{
            echo " the email is available ";
            echo "<script>$('#user_registration_btn').prop('disabled',false);</script>";

        }
    }
}
?>