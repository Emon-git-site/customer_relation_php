<?php
$pageTitle = "Manage Ticket";
ob_start(); // Start output buffering
?>
<!-- Main content -->
<section class="content">
  <div class="container-fluid">
  <div class="row">
    <?php 
   // admin remark successfullly
if(isset($_GET['admin_remark'])){
  echo '<script>
  document.addEventListener("DOMContentLoaded", function() {
      Swal.fire({
          icon: "success",
          title: "Successfull",
          text: "Your remark done!",
      }).then(function() {
        window.location.href = "manage_ticket.php";
      });
  });
</script>';

}
$counter = 0;
require_once "../../config/connection.php";
$select_ticket_query = "SELECT * FROM `ticket`";
$select_ticket_query_run = mysqli_query($con, $select_ticket_query);
while($row = mysqli_fetch_assoc($select_ticket_query_run)){ 

?>

      <!-- card start -->
      <div class="col-md-3">
        <div class="card card-outline card-primary">
          <div class="card-header">
            <h3 class="card-title">#TIK-<?=$row['id'] ?></h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
            </div>
            <!-- /.card-tools -->
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <p>Email: <?=$row['email'] ?></p>
            <p>Task_type: <?=$row['task_type'] ?></p>
            <p>Priority: <?=$row['priority'] ?></p>
            <p>Posting_date: <?=$row['posting_date'] ?></p>
            <form action="../../function/admin/manage_ticket.php" method="post">
              <div class="form-group ">
                <label for="subject" class="col-sm-6 col-form-label">Remark:</label>
                <div class="col-sm-12">
                <textarea class="form-control" rows="3" name="remark"><?=$row['admin_remark'] ?></textarea>
                  <input type="hidden"  name="ticket_id" value="<?=$row['id'] ?>">
                  <button type="submit" class="btn btn-primary text" name="admin_remark">Submit</button>
                </div>
              </div>
            </form>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- card end -->
      
       <?php  } ?>
       </div>
      <!-- /.col -->
  </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
<?php
$content = ob_get_clean(); // Get the buffered content and clean the buffer
require_once "master.php"; // Include the master template
?>