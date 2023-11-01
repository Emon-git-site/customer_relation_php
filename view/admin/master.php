<?php
ob_start(); // Start output buffering
?>
<div class="wrapper">
        <?php require_once "../includes/admin/navbar.php" ?>
        <?php require_once "../includes/admin/asidebar.php" ?>
        <div class="content-wrapper">
        <?php require_once "../includes/breadcrumb.php" ?>
            <?= $content; ?>
        </div>
    </div>
  

<?php
$main = ob_get_clean(); // Get the buffered content and clean the buffer
require_once "../layout.php"; // Include the master template
?>

