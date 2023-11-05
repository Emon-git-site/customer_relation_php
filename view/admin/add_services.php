<?php
$pageTitle = "Add Services";
require_once "../../config/connection.php";
ob_start(); 
?>

<!-- main content -->
<section class="content">
    <div class="container-fluid">
    <div class="card card-light m-3">
      

        <?php
        if(isset($_GET['add_service'])){
            echo '<script>
            document.addEventListener("DOMContentLoaded", function() {
                Swal.fire({
                    title: "Successfull",
                    text: "You added new service!",
                }).then(function() {
                  window.location.href = "add_services.php";
                  });;
            });
          </script>';;
          }
        if(isset($_GET['delete_service'])){
            echo '<script>
            document.addEventListener("DOMContentLoaded", function() {
                Swal.fire({
                    title: "Successfull",
                    text: "You delete new service!",
                }).then(function() {
                  window.location.href = "add_services.php";
                  });;
            });
          </script>';;
          }
          
        ?>
        <!-- /.card-header -->
        <!-- form start -->
        <form class="form-horizontal m-3" action="../../function/admin/add_services.php" method="post">
        <div class="card-body ">
            
            <div class="form-group row">
            <label for="add_service" class="col-sm-2 col-form-label">Services Name:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="add_service" id="add_service" placeholder="Enter New Services" required>
            </div>
            </div> <!--row -->
        </div>
        <!-- /.card-body -->
        <div class=" d-flex justify-content-center">
            <button type="submit" class="btn btn-info" name="add_services_btn">Add Services</button>
        </div>
        <!-- /.card-footer -->
        </form>
        <hr>
        <table class="table table-bordered ">
                  <thead>
                    <tr>
                      <th class="text-center">SERVICES ID</th>
                      <th class="text-center">SERVICES NAME</th>
                      <th class="text-center">ACTION</th>
                   </tr>
                  </thead>
                  <?php  
                    $select_services = "SELECT * FROM services";
                    $select_services_run = mysqli_query($con, $select_services);
                    while($row = mysqli_fetch_assoc($select_services_run)){   ?>
                  <tr>
                    <td class="text-center">#SER-<?=$row['id']?></td>
                    <td class="text-center"><?=$row['services']?></td>
                    <td class="text-center">
                      <a href="../../function/admin/add_services.php?service_id=<?=$row['id']?>"  class="btn btn-danger" onclick="alert('Are you sure to delete???')">DELETE</a>
                    </td>
                  </tr>
                  <?php } ?>
                    <tbody>
            
                  </tbody>
                </table>

    </div>  
    
</div>

</section>

<?php
$content = ob_get_clean();
require_once "master.php";
?>