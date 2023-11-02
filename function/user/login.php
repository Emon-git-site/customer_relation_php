<?php
session_start();
require_once "../../config/connection.php"; 
if(isset($_POST['user_login_btn'])){
  
    $user_email = mysqli_escape_string($con, $_POST['user_email']);
    $user_password = mysqli_escape_string($con, $_POST['user_password']);
    $user_select_query = "SELECT * FROM `user` WHERE `email` = '$user_email' and `password` = '$user_password'";
    $user_select_query_run = mysqli_query($con, $user_select_query);
    if(mysqli_num_rows($user_select_query_run) > 0){
        $row = mysqli_fetch_assoc($user_select_query_run);
        $_SESSION['user_id'] = $user_id = $row['id'];
        $_SESSION['user_name'] = $user_name = $row['name'];
        $_SESSION['user_email'] = $user_email = $row['email'];
        $logindate =  date("Y/m/d");   //possible_output: 2023/10/31
        date_default_timezone_set("Asia/Dhaka"); 
        //as default time zone is dhaka so according to this time show in dhaka zonee
        $logintime = date("h:i:sa");  // 02:30:45pm
        $ip_address = $_SERVER['REMOTE_ADDR'];  // 192.168.1.100
        $geopluginURL = 'http://www.geoplugin.net/php.gp?ip='.$ip_address; 
        //$geopluginURL output: a:1:{s:21:"geoplugin_countryName";s:10:"Bangladesh";}
        $addrDetailsArr = unserialize(file_get_contents($geopluginURL));
        // ['geoplugin_countryName' => 'Bangladesh']
        $user_city = $addrDetailsArr['geoplugin_city'];
        $user_country = $addrDetailsArr['geoplugin_countryName'];
        ob_start(); //don't send output to browser as modifying purpose
        system('ipconfig /all');  //run this command we get mac(physical) address
        $mycom = ob_get_contents(); //$mycom output as like:Windows IP Configuration Host Name . . . . . . . . . . . . : DESKTOP-8BP7TVC
        //Physical Address. . . . . . . . . : 34-17-EB-7D-BA-30
        ob_clean();
        $findme  = "Physical"; //assign string to $findme vairable
        $physical_mac = strpos($mycom, $findme);
        //from $mycom long long string it find "physical" string position
        $mac_address = substr($mycom,($physical_mac+36),17);  // cut the mac address  34-17-EB-7D-BA-30
        $insert_query = "INSERT INTO `usercheek`(`logindate`, `logintime`, `user_id`, `username`, `email`, `ip`, `mac`, `city`, `country`) 
        VALUES ('$logindate', '$logintime', '$user_id', '$user_name', '$user_email', '$ip_address', '$mac_address', '$user_city', '$user_country')";
        $insert_query_run = mysqli_query($con, $insert_query);
        if($insert_query_run){
           
            header('location: ../../index.php?user_log=yes'); 
            
        } 
    }
}
?>