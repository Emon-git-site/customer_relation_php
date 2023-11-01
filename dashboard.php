<?php
$pageTitle = "Dashboard";
ob_start(); // Start output buffering
?>

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-md-3 col-sm-6 col-12">
        <div class="info-box bg-info">
          <span class="info-box-icon"><i class="fas fa-ticket-alt"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">View Tickets</span>
            <span class="info-box-number">41,410</span>

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
            <span class="info-box-text">Get Quote</span>
            <span class="info-box-number">41,410</span>
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
            <span class="info-box-text">My Profile</span>
            <span class="info-box-number">41,410</span>
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
            <span class="info-box-text">Create</span>
            <span class="info-box-number">41,410</span>

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
$content = ob_get_clean(); // Get the buffered content and clean the buffer
require_once "master.php"; // Include the master template
?>