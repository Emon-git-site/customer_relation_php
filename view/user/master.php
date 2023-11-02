<?php
session_start();
if(empty($_SESSION['user_email'])){
    header('location: ../../index.php') ;
}
ob_start(); 

?>

<div class="wrapper">
        <?php require_once "../includes/user/navbar.php" ?>
        <?php require_once "../includes/user/asidebar.php" ?>
        <div class="content-wrapper">
        <?php require_once "../includes/breadcrumb.php" ?>
            <?= $content; ?>
        </div>
    </div>
  
<?php
$main = ob_get_clean(); 
require_once "../layout.php"; 
?>

