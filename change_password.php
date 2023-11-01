<?php
$pageTitle = "Change Password";
ob_start(); // Start output buffering
?>
<!-- Content Header (Page header) -->

<!-- /.content-header -->

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    <div class="card card-light m-3">

      <!-- /.card-header -->
      <!-- form start -->
      <form class="form-horizontal m-3" action="function/user_password_change.php" method="post">
        <div class="card-body ">

          <div class="form-group row">
            <label for="current_password" class="col-sm-2 col-form-label">Current Password</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" name="current_password" id="current_password" placeholder="Enter Current Password">
            </div>
          </div>
          <div class="form-group row">
            <label for="new_password" class="col-sm-2 col-form-label">New Password:</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" name="new_password" id="new_password" placeholder="Enter New Password">
            </div>
          </div>
          <div class="form-group row">
            <label for="conform_password" class="col-sm-2 col-form-label">Conform Password:</label>
            <div class="col-sm-10">
              <div class="input-group">
                <input type="password" class="form-control" name="conform_password" id="conform_password" placeholder="Enter Conform Password">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons visibility">visibility_off</i>
                  </span>
                </div>
              </div>
              <small id="pass_match"></small>
            </div>

          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            <button type="submit" class="btn btn-info" name="change_password_btn">Change Password</button>
            <button type="submit" class="btn btn-default float-right">Reset Password</button>
          </div>
          <!-- /.card-footer -->
      </form>
    </div>
    <!-- /.col -->
  </div><!-- /.container-fluid -->
</section>
<?php
$content = ob_get_clean(); // Get the buffered content and clean the buffer
require_once "master.php"; // Include the master template
?>