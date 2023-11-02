<?php
ob_start();
?>

<div class="wrapper">
    <h1>testsvbnvbne</h1>
        <?php require_once "../includes/admin/navbar.php" ?>
        <?php require_once "../includes/admin/asidebar.php" ?>
        <div class="content-wrapper">
        <?php require_once "../includes/breadcrumb.php" ?>
            <?= $content; ?>
        </div>
    </div>
  
  
<?php

$main = ob_get_clean(); 
require_once "../layout.php"; 
?>


