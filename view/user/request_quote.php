<?php
$pageTitle = "Request Quote";
ob_start(); // Start output buffering
require_once "../../config/connection.php";
?>

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    <div class="card card-light m-3 px-4">

      <?php 
        // Quote request send message
        if(isset($_GET['quote_request'])){
          echo '<script>
          document.addEventListener("DOMContentLoaded", function() {
              Swal.fire({
                  title: "Successfull",
                  text: "Your quote is successsfully send to admin!",
              }).then(function() {
                window.location.href = "request_quote.php";
                });;
          });
        </script>';;
        }
      ?>

      <!-- form start -->

      <form action="../../function/user/request_quote.php" method="post">
        <div class="row mt-5 mb-1">
          <div class="col-sm-6">
            <!-- text input -->
            <div class="form-group">
              <label>Name:</label>
              <input type="text" name="name" class="form-control" placeholder="Enter Name" required>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label>Email: </label>
              <input type="text" name="email" class="form-control" placeholder="Enter Email Address" required>
            </div>
          </div>
        </div>
        <div class="row my-1">
          <div class="col-sm-6">
            <!-- text input -->
            <div class="form-group">
              <label>Contact No:</label>
              <input type="text" name="contactno" class="form-control" placeholder="Enter Contact No" required>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label>Company: </label>
              <input type="text" name="company" class="form-control" placeholder="Enter Company Name" required>
            </div>
          </div>
        </div>
        <div class="form-group row" id="checkboxContainer">
          <div class="col-md-2">
            <label>Service Required: </label>
          </div>
          <div class="col-md-10">
         
              <?php
               $counter = 0;
              $get_services_query =mysqli_query($con, "SELECT * FROM `services` ");
              while($row = mysqli_fetch_assoc($get_services_query)){ 
               if ($counter % 2 == 0 || $counter == 0) {
                echo '<div class="row">';
              }  ?>
            <div class="col-md-6">
              <label for="<?= $row['services'] ?>" class="font-weight-normal">
                <input type="checkbox" class="font-weight-normal" id="<?= $row['services'] ?>" name="service[]" value="<?= $row['services'] ?>" > <?= $row['services'] ?>
              </label>
            </div>
            <?php
              if ($counter % 2 != 0) {
                 echo '</div>';
               } ?>
         
           <?php $counter++; } ?>
         
         </div> <!-- col-md-10 -->
        </div> <!-- checkboxContainer -->

        <div class="form-group row">
          <label for="query" class="col-sm-2 col-form-label">Query :</label>
          <div class="col-sm-10">
            <textarea class="form-control" id="query" rows="3" name="query" required></textarea>
          </div>
        </div>
        <div class="form-group d-flex justify-content-center">
          <button type="submit" class="btn btn-info" name="quote_submit">SUMBIT</button>
        </div>
       </div>
    </form>
    <!-- /.col -->

  </div><!--card-light m-3 px-4 -->
  </div><!-- /.container-fluid -->
</section>
<?php
$content = ob_get_clean(); // Get the buffered content and clean the buffer
require_once "master.php"; // Include the master template
?>