<?php
$pageTitle = "Profile";
session_start();
ob_start();
require_once "../../config/connection.php";
// user profile data update message
if(isset($_GET['profile_update'])){
  echo '<script>
  document.addEventListener("DOMContentLoaded", function() {
      Swal.fire({
          title: "Successfull",
          text: "Your profile data updated!",
      }).then(function() {
        window.location.href = "profile.php";
        });;
  });
</script>';;
}
?>

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    <div class="card card-light m-3">
      <?php
      // show user data
      $user_email = $_SESSION['user_email'];
      $select_user_query = "SELECT * FROM `user` WHERE `email` = '$user_email'";
      $select_user_query_run = mysqli_query($con, $select_user_query);
      if (mysqli_num_rows($select_user_query_run) > 0) {
        $row = mysqli_fetch_assoc($select_user_query_run);
      } ?>
      <form class="form-horizontal m-3" action="../../function/user/profile_update.php" method="post" >
        <div class="card-body ">

          <div class="form-group row">
            <label for="user_name" class="col-sm-2 col-form-label">User Name</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="user_name" id="user_name" value="<?= $row['name'] ?>" required>
            </div>
          </div>
          <div class="form-group row">
            <label for="user_email" class="col-sm-2 col-form-label">Email Address</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" name="user_email" id="user_email" value="<?= $row['email'] ?>" readonly>
            </div>
          </div>
          <div class="form-group row">
            <label for="phone_no" class="col-sm-2 col-form-label">Phone Number</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="phone_no" id="phone_no" value="<?= $row['mobile'] ?>" required>
            </div>
          </div>
          <div class="form-group row">
            <label for="phone_no" class="col-sm-2 col-form-label">Gender</label>
            <div class="col-sm-10">
              <select class="form-control" name="gender">
              <option value="male" <?php if($row['gender']=='male') echo 'selected'; ?>>Male</option>
              <option value="female"<?php if($row['gender']=='female') echo 'selected'; ?>>Female</option>
              <option value="other" <?php if($row['gender']=='other')echo 'selected'; ?>>other</option>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label for="phone_no" class="col-sm-2 col-form-label">User Address</label>
            <div class="col-sm-10">
              <textarea class="form-control" rows="3" name="user_address" required><?=$row['address'] ?></textarea>
            </div>
          </div>

        </div>
        <!-- /.card-body -->
        <div class="card-footer d-flex justify-content-center">
          <button type="submit" class="btn btn-info" name="profile_update_btn">UPDATE</button>
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
