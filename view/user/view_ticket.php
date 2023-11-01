<?php
$pageTitle = "View  Ticket";
ob_start(); // Start output buffering
?>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
        <div class="row">
          <!-- card start -->
          <div class="col-md-3">
            <div class="card card-outline card-primary">
              <div class="card-header">
                <h3 class="card-title">Primary Outline</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                The body of the card
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- card end -->
          <div class="col-md-3">
            <div class="card card-outline card-warning">
              <div class="card-header">
                <h3 class="card-title">Warning Outline</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                The body of the card
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
         
          <!-- /.col -->
                  <!-- /.col -->
          <div class="col-md-3">
            <div class="card card-outline card-warning">
              <div class="card-header">
                <h3 class="card-title">Warning Outline</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                The body of the card
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <div class="col-md-3">
            <div class="card card-outline card-warning">
              <div class="card-header">
                <h3 class="card-title">Warning Outline</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                The body of the card
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
 
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
      <?php
$content = ob_get_clean(); // Get the buffered content and clean the buffer
require_once "master.php"; // Include the master template
?>
