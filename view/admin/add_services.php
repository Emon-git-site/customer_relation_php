<?php
$pageTitle = "Add Services";
ob_start(); 
?>

<!-- main content -->
<section class="content">
    <div class="container-fluid">
    <div class="card card-light m-3">
        <div class="card-header mx-auto mt-2">
        <h3 class="card-title ">Add services</h3>
        </div>

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
          
        ?>
        <!-- /.card-header -->
        <!-- form start -->
        <form class="form-horizontal m-3" action="../../function/admin/add_services.php" method="post">
        <div class="card-body ">
            
            <div class="form-group row">
            <label for="add_service" class="col-sm-2 col-form-label">Add Services</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="add_service" id="add_service" placeholder="Enter New Services">
            </div>
            </div> 
        </div>
        <!-- /.card-body -->
        <div class=" d-flex justify-content-center">
            <button type="submit" class="btn btn-info" name="add_services_btn">Add Services</button>
        </div>
        <!-- /.card-footer -->
        </form>
    </div>  
    <div class="col-md-12">
            <div class="card card-secondary">
              <div class="card-header" >
                <h3 class="card-title text-center">Show Services</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body" style="display: block;">
                The body of the card
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
    </div>
</section>

<?php
$content = ob_get_clean();
require_once "master.php";
?>