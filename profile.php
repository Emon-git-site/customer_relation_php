<?php
$pageTitle = "Profile";
ob_start(); // Start output buffering
?>

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    <div class="card card-light m-3">

      <form class="form-horizontal m-3" action="" method="post">
        <div class="card-body ">

          <div class="form-group row">
            <label for="user_name" class="col-sm-2 col-form-label">User Name</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="user_name" id="user_name" placeholder="Enter Your Name">
            </div>
          </div>
          <div class="form-group row">
            <label for="user_email" class="col-sm-2 col-form-label">Email Address</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" name="user_email" id="user_email" placeholder="Enter Email Address">
            </div>
          </div>
          <div class="form-group row">
            <label for="phone_no" class="col-sm-2 col-form-label">Phone Number</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" name="phone_no" id="phone_no" placeholder="Enter Phone Number">
            </div>
          </div>
          <div class="form-group row">
            <label for="phone_no" class="col-sm-2 col-form-label">Gender</label>
            <div class="col-sm-10">
              <select class="form-control">
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">other</option>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label for="phone_no" class="col-sm-2 col-form-label">User Address</label>
            <div class="col-sm-10">
              <textarea class="form-control" rows="3" name="user_address"></textarea>
            </div>
          </div>

        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <button type="submit" class="btn btn-info" name="change_password_btn">SUBMIT</button>
          <button type="submit" class="btn btn-default float-right">CLEAR FORM</button>
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

