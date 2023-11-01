<?php
$pageTitle = "Create User Ticket";
ob_start(); // Start output buffering
?>

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    <div class="card card-light m-3">
      <!-- form start -->
      <form class="form-horizontal m-3" action="" method="post">
        <div class="card-body ">

          <div class="form-group row">
            <label for="subject" class="col-sm-2 col-form-label">Subject</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="subject" id="subject">
            </div>
          </div>
          <div class="form-group row">
            <label for="phone_no" class="col-sm-2 col-form-label">Task Type</label>
            <div class="col-sm-10">
              <select class="form-control">
                <option value="">Select your Task Type</option>
                <option value="">Female</option>
                <option value="other">other</option>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label for="phone_no" class="col-sm-2 col-form-label">Priority</label>
            <div class="col-sm-10">
              <select class="form-control">
                <option value="">Choose your Priority</option>
                <option value="">Female</option>
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
