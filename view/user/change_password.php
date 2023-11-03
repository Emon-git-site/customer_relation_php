<?php
$pageTitle = "Change Password";
ob_start(); // Start output buffering

// current password not matching message
if(isset($_GET['cpass_not_match'])){
  echo '<script>
  document.addEventListener("DOMContentLoaded", function() {
      Swal.fire({
          icon: "error",
          title: "Oops...",
          text: "Your input current password is not matching!",
      }).then(function() {
        window.location.href = "change_password.php";
        });;
  });
</script>';;
}
// new password and conform password  matching 
if(isset($_GET['npass_copass_not_match'])){
  echo '<script>
  document.addEventListener("DOMContentLoaded", function() {
      Swal.fire({
          icon: "error",
          title: "Oops...",
          text: "Your input new  and conform password is not matching!",
      }).then(function() {
        window.location.href = "change_password.php";
        });;
  });
</script>';;
}
// user password update message
if(isset($_GET['password_update'])){
  echo '<script>
  document.addEventListener("DOMContentLoaded", function() {
      Swal.fire({
          title: "Successfull",
          text: "Your password updated!",
      }).then(function() {
        window.location.href = "change_password.php";
        });;
  });
</script>';;
}

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
      <form class="form-horizontal m-3" action="../../function/user/password_change.php" method="post" id="password_change">
        <div class="card-body ">

          <div class="form-group row">
            <label for="current_password" class="col-sm-2 col-form-label">Current Password</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" name="current_password" id="current_password" placeholder="Enter Current Password" required>
            </div>
          </div>
          <div class="form-group row">
            <label for="new_password" class="col-sm-2 col-form-label">New Password:</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" name="new_password" id="new_password" placeholder="Enter New Password" required>
            </div>
          </div>
          <div class="form-group row">
            <label for="conform_password" class="col-sm-2 col-form-label">Conform Password:</label>
            <div class="col-sm-10">
              <div class="input-group">
                <input type="password" class="form-control" name="conform_password" id="conform_password" placeholder="Enter Conform Password" required>
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
            <button type="button" class="btn btn-default float-right" id="resetPasswordBtn"> Reset Password </button>
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

<script>
        
          // javascript password visibility show and hidden
          $(document).ready(function() {
            let conform_password = $('#conform_password');
            let visibility = $('.visibility');
            let isshow = true;

            visibility.click(function() {
                if (isshow) {
                    conform_password.attr('type', 'text');
                    visibility.text('visibility');
                } else {
                    conform_password.attr('type', 'password');
                    visibility.text('visibility_off');
                }
                isshow = !isshow;
            });
        });
        // form reset when click the reset password button
        $(document).ready(function() {
          $("#resetPasswordBtn").on("click", function() {
            var form = $("#password_change");
            form[0].reset();
         });
        });
</script>