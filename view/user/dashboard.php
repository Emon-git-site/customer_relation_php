<?php
$pageTitle = "Dashboard";
require_once "../../config/connection.php";
ob_start(); 
 ?>
<!-- Main content -->
<section class="content">
  <div class="container-fluid">


    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-md-3 col-sm-6 col-12">
        <div class="info-box bg-info">
          <span class="info-box-icon"><i class="fas fa-ticket-alt"></i></span>
            <?php 
             $select_ticket =mysqli_query($con, "SELECT * FROM `ticket` ") ;
             $ticket = mysqli_num_rows($select_ticket);

            ?>
          <div class="info-box-content">
          <a href="view_ticket.php">
            <span class="info-box-text text-white">View Tickets : <?=$ticket ?></span></a>
            <span class="info-box-number"></span>

            <div class="progress">
              <div class="progress-bar" style="width: 70%"></div>
            </div>

          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->
      <div class="col-md-3 col-sm-6 col-12">
        <div class="info-box bg-success">
          <span class="info-box-icon"><i class="far fa-envelope"></i></span>
          <div class="info-box-content">
            <a href="request_quote.php">
            <span class="info-box-text text-white">Request Quote</span></a>
            <span></span>
            <div class="progress">
              <div class="progress-bar" style="width: 70%"></div>
            </div>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->
      <div class="col-md-3 col-sm-6 col-12">
        <div class="info-box bg-warning">
          <span class="info-box-icon"><i class="far fa-user"></i></span>
          <div class="info-box-content">
          <a href="profile.php">
            <span class="info-box-text text-white">My Profile</span></a>
            <div class="progress">
              <div class="progress-bar" style="width: 70%"></div>
            </div>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->
      <div class="col-md-3 col-sm-6 col-12">
        <div class="info-box bg-danger">
          <span class="info-box-icon"><i class="fas fa-ticket-alt"></i></span>
          <div class="info-box-content">
          <a href="create_ticket.php">
            <span class="info-box-text text-white">Create Ticket</span></a>
            <div class="progress">
              <div class="progress-bar" style="width: 70%"></div>
            </div>

          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.col -->
  </div><!-- /.container-fluid -->
</section>


<?php
$content = ob_get_clean(); 
require_once "master.php"; 
?>

