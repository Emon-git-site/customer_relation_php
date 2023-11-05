<?php
$pageTitle = "Create User Ticket";
ob_start(); // Start output buffering

if(isset($_GET['create_ticket'])){
  echo '<script>
  document.addEventListener("DOMContentLoaded", function() {
      Swal.fire({
          icon: "success",
          title: "successful",
          text: "Create Ticket Successfully!",
      }).then(function() {
        window.location.href = "create_ticket.php";
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
      <!-- form start -->
      <form class="form-horizontal m-3" action="../../function/user/create_ticket.php" method="post">
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
              <select class="form-control" name="task_type">
                <option value="">Select your Task Type</option>
                <option value="personal">personal</option>
                <option value="public">public</option>
                <option value="other">other</option>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label for="phone_no" class="col-sm-2 col-form-label">Priority</label>
            <div class="col-sm-10">
              <select class="form-control" name="priority">
                <option value="">Choose your Priority</option>
                <option value="urgent">urgent</option>
                <option value="fast">fast</option>
                <option value="other">other</option>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label for="phone_no" class="col-sm-2 col-form-label">Description</label>
            <div class="col-sm-10">
              <textarea class="form-control" rows="3" name="description"></textarea>
            </div>
          </div>

        </div>
        <!-- /.card-body -->
        <div class="card-footer d-flex justify-content-center">
          <button type="submit" class="btn btn-info" name="create_ticket_btn">CREATE</button>
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
