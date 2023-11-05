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
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <?php 
                $select_visitors = "SELECT * FROM usercheek";
                $select_visitors_run = mysqli_query($con,$select_visitors);
                $num = mysqli_num_rows($select_visitors_run)
					  ?>
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?=$num ?></h3>

                <p>OVerall Visitors</p>
              </div>
              <div class="icon">
                <i class="ion ion-person"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <?php 
                $registered_user = mysqli_query($con,"select * from user");
                $registered_user_number=mysqli_num_rows($registered_user);
              ?> 
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?=$registered_user_number ?>&nbsp;%</h3>
                <p>Registered Users</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <?php
           $quota = mysqli_query($con,"SELECT * FROM quota_request");
					  $quota_number=mysqli_num_rows($quota);
					  ?>
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?=$quota_number ?></h3>

                <p>Overall Quotes Request</p>
              </div>
              <div class="icon">
                <i class="fas fa-envelope fa-2x"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <?php
           $ticket = mysqli_query($con,"SELECT * FROM ticket");
					  $ticket_number=mysqli_num_rows($ticket);
					  ?>
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?=$ticket_number ?></h3>

                <p>All Tickets</p>
              </div>
              <div class="icon">
                <i class="fas fa-ticket-alt"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <div class="row">
          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
              <span class="info-box-icon bg-info"><i class="far fa-user"></i></span>
              <?php
					   $today_date  = date("Y/m/d");
					   $today_user_query   ="SELECT * FROM usercheek WHERE logindate='$today_date'";
					   $today_user_query_run =mysqli_query($con,$today_user_query);
					   $today_visitor   =mysqli_num_rows($today_user_query_run);
					  ?>
              <div class="info-box-content">
                <span class="info-box-text">Today Visitors</span>
                <span class="info-box-number"><?=$today_visitor ?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
              <span class="info-box-icon bg-success"><i class="far fa-flag"></i></span>
              <?php 
              $today_date = date("Y-m-d");
                $registered_user = mysqli_query($con,"select * from user  ");
                $registered_user_number=mysqli_num_rows($registered_user);
              ?> 
              <div class="info-box-content">
                <span class="info-box-text">Today Requested Users</span>
                <span class="info-box-number">0</span></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
              <span class="info-box-icon bg-warning"><i class="fas fa-envelope"></i></span>
              <?php
             $new_request = mysqli_query($con,"select * from quota_request where status='0'");
              $new_request_run=mysqli_num_rows($new_request);
              ?>
              <div class="info-box-content">
                <span class="info-box-text">New Quota Request</span>
                <span class="info-box-number"><?=$new_request_run ?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>

          <!-- /.col -->
          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
              <span class="info-box-icon bg-danger"><i class="fas fa-ticket-alt"></i></span>
  
              <div class="info-box-content">
              <?php
                $ticket = mysqli_query($con,"SELECT * FROM ticket where status = 'open'");
                  $ticket_number=mysqli_num_rows($ticket);
                  ?>
                <span class="info-box-text">Pending Ticket</span>
                <span class="info-box-number"><?=$ticket_number  ?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
        </div>



        <!-- /.col -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    
 <?php
$content = ob_get_clean(); 
require_once "master.php"; 
?>
