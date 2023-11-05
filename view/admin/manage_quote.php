<?php
$pageTitle = "Manage Quote";
ob_start(); 
require_once "../../config/connection.php";
?>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
        <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th class="text-center" style="width: 20px">#</th>
                      <th class="text-center">NAME</th>
                      <th class="text-center">EMAIL</th>
                      <th class="text-center">CONTACT NO</th>
                      <th class="text-center">SERVICES REQUIRED</th>
                      <th class="text-center">ACTION</th>
                    </tr>
                  </thead>
                  <?php
                  $count = 1;
                   $select_user_query =  "SELECT * FROM `quota_request` ";
                   $select_user_query_run = mysqli_query($con, $select_user_query);
                   while($row = mysqli_fetch_assoc($select_user_query_run)){?>
                    <tr>
                      <td class="text-center"><?= $count ?></td>
                      <td class="text-center"><?=$row['name'] ?></td>
                      <td class="text-center"><?=$row['email'] ?></td>
                      <td class="text-center"><?=$row['contact'] ?></td>
                      <td class="text-center"><?=$row['services'] ?></td>
                      <td class="text-center">
                        <button  class="btn btn-primary" data-toggle="modal" data-target="#edit_quota<?= $row['id']  ?>">VIEW</button>
                      </td>
                    </tr>
                    <?php $count++; } ?>
                  <tbody>
            
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              
            </div>
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
      <div>
<?php   
// admin remark on quota
if(isset($_POST['admin_remark'])){
  $quota_id = $_POST['quota_id'];
  $admin_remark = $_POST['admin_remark'];
  $remark_on_quota = "UPDATE `quota_request` SET `remark`='$admin_remark' WHERE `id` =  '$quota_id'";
  $remark_on_quota_run = mysqli_query($con, $remark_on_quota);

}


// select user quota
 $select_user_query =  "SELECT * FROM `quota_request` ";
$select_user_query_run =mysqli_query($con, $select_user_query);
while ($row = mysqli_fetch_assoc($select_user_query_run)) { ?>

<!-- quota modal -->

<div class="modal fade" id="edit_quota<?= $row['id']  ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="" method="post">
            <div class="card-body">
              <div class="form-group">
                <label for="user_name">User Name:</label>
                <input type="text" class="form-control" name="user_name" id="user_name" value="<?= $row['name'] ?>" readonly>
                <input type="hidden" class="form-control" name="quota_id" value="<?= $row['id'] ?>">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" name="user_email" id="exampleInputEmail1" value="<?= $row['email'] ?>" readonly>
              </div>
              <div class="form-group">
                <label for="contact_no">Phone Number:</label>
                <input type="text" class="form-control" name="user_contact" id="contact_no" value="<?= $row['contact'] ?>" readonly>
              </div>
              <div class="form-group">
                <label for="contact_no">Company Name:</label>
                <input type="text" class="form-control" name="user_contact" id="contact_no" value="<?= $row['company'] ?>" readonly>
              </div>
              <div class="form-group">
                <label for="contact_no">Services:</label>
                <input type="text" class="form-control" name="user_contact" id="contact_no" value="<?= $row['services'] ?>" readonly>
              </div>

              <div class="form-group">
                <label>Address</label>
                <textarea class="form-control" name="admin_remark" rows="3"><?= $row['remark'] ?></textarea>
              </div>


            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" name="remark_quota_btn" class="btn btn-primary">REMARK</button>
            </div>
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<?php } ?>
<?php
$content = ob_get_clean(); // Get the buffered content and clean the buffer
require_once "master.php"; // Include the master template
?>