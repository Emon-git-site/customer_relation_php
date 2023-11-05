<?php
$pageTitle = "Manage Users";
ob_start();
require_once "../../config/connection.php";

if(isset($_POST['user_data_update_btn'])){
     $user_name = mysqli_escape_string($con, $_POST['user_name']);
     $user_id = mysqli_escape_string($con, $_POST['user_id']);
     $user_email = mysqli_escape_string($con, $_POST['user_email']);
     $user_contact = mysqli_escape_string($con, $_POST['user_contact']);
     $gender = mysqli_escape_string($con, $_POST['gender']);
     $user_address = mysqli_escape_string($con, $_POST['user_address']);
     $user_data_update_query = "UPDATE `user` SET `name`='$user_name',`email`='$user_email',
     `mobile`='$user_contact',`gender`='$gender',`address`='$user_address'WHERE `id` = '$user_id'";
     $user_data_update_query_run =  mysqli_query($con, $user_data_update_query);
      if($user_data_update_query_run){
        echo "<script>
        document.addEventListener('DOMContentLoaded', function() {
        const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
         toast.addEventListener('mouseenter', Swal.stopTimer)
         toast.addEventListener('mouseleave', Swal.resumeTimer)
       }
     })

        Toast.fire({
            icon: 'success',
            title: 'User data update successful',
        });
     });
      </script>";
      }
}
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
              <th class="text-center">FUll NAME</th>
              <th class="text-center">EMAIL ID</th>
              <th class="text-center">CONTACT NO</th>
              <th class="text-center">ACTION</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $count = 1;
            $select_user_query =  "SELECT * FROM `user` ";
            $select_user_query_run = mysqli_query($con, $select_user_query);
            while ($row = mysqli_fetch_assoc($select_user_query_run)) { ?>
              <tr>
                <td class="text-center"><?= $count ?></td>
                <td class="text-center"><?= $row['name'] ?></td>
                <td class="text-center"><?= $row['email'] ?></td>
                <td class="text-center"><?= $row['mobile'] ?></td>
                <td class="text-center">
                  <a href="#" class="btn btn-primary editButton" data-toggle="modal" data-target="#edit_user<?= $row['id']  ?>">EDIT</a>
                  <button data-id="<?= $row['id'] ?>" class="btn btn-danger user_delete" onclick="alert('Are you sure to delete???')">DELETE</button>
                </td>
              </tr>
            <?php $count++;
            } ?>

          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
      <div class="card-footer clearfix">
        <ul class="pagination pagination-sm m-0 float-right">
          <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
        </ul>
      </div>
    </div>

  </div><!-- /.container-fluid -->
</section>
<!-- /.content -->

<!--user data show Modal -->
<?php
$select_user_query =  "SELECT * FROM `user` ";
$select_user_query_run =mysqli_query($con, $select_user_query);
while ($row = mysqli_fetch_assoc($select_user_query_run)) { ?>

  <div class="modal fade" id="edit_user<?= $row['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header d-flex justify-content-center">
          <h5 class="modal-title ">Update User Profile</h5>
        </div>
        <div class="modal-body">
          <form action="" method="post">
            <div class="card-body">
              <div class="form-group">
                <label for="user_name">User Name:</label>
                <input type="text" class="form-control" name="user_name" id="user_name" value="<?= $row['name'] ?>">
                <input type="hidden" class="form-control" name="user_id" value="<?= $row['id'] ?>">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" name="user_email" id="exampleInputEmail1" value="<?= $row['email'] ?>" readonly>
              </div>
              <div class="form-group">
                <label for="contact_no">Phone Number:</label>
                <input type="text" class="form-control" name="user_contact" id="contact_no" value="<?= $row['mobile'] ?>">
              </div>
              <div class="form-group">
                <label>Select Gender:</label>
                <select class="form-control" name="gender">
              <option value="male" <?php if($row['gender']=='male') echo 'selected'; ?>>Male</option>
              <option value="female"<?php if($row['gender']=='female') echo 'selected'; ?>>Female</option>
              <option value="other" <?php if($row['gender']=='other')echo 'selected'; ?>>other</option>
                </select>
              </div>
              <div class="form-group">
                <label>Address</label>
                <textarea class="form-control" name="user_address" rows="3"><?= $row['address'] ?></textarea>
              </div>


            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" name="user_data_update_btn" class="btn btn-primary">Update</button>
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

<script>
  (function($) {

    $('.user_delete').on('click', function() {
      let user_id = $(this).data('id');
      $.ajax({
        url: "../../function/admin/users.php",
        data: {
          user_id: user_id,
          action_delete: "delete"
        },
        type: 'post',
        success: function(response) {
          if (response == "delete_success") {
            Swal.fire({
              position: 'top-end',
              icon: 'success',
              title: 'User delete Successfully',
              showConfirmButton: false,
              timer: 1500
            }).then(function() {
              location.reload();
            });
          }
        }
      });
    });

  })(jQuery);
</script>