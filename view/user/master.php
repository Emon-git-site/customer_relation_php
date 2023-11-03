<?php
ob_start(); 
if (!isset($_SESSION)) {
    session_start();
}
if(empty($_SESSION['user_email'])){
    header('location: ../../index.php') ;
}

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

