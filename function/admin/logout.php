<?php 
session_start();
unset ($_SESSION['admin_email']);
header('location: ../../view/admin/index.php');
?>
