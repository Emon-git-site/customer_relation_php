<?php
$pageTitle = "Request Quote";
ob_start(); // Start output buffering
?>

<!-- Main content -->
    <section class="content">
        <div class="container-fluid">
                       <!-- Small boxes (Stat box) -->
          <div class="card card-light m-3 px-4">
      
              <!-- form start -->
             
          <form action="" method="post">
              <div class="row mt-5 mb-1">
                 <div class="col-sm-6">
                   <!-- text input -->
                   <div class="form-group">
                     <label>Name:</label>
                     <input type="text" class="form-control" placeholder="Enter Name">
                   </div>
                 </div>
                 <div class="col-sm-6">
                   <div class="form-group">
                     <label>Email: </label>
                     <input type="text" class="form-control" placeholder="Enter Email Address">
                   </div>
                 </div>
               </div>
              <div class="row my-1">
                 <div class="col-sm-6">
                   <!-- text input -->
                   <div class="form-group">
                     <label>Contact No:</label>
                     <input type="text" class="form-control" placeholder="Enter Contact No">
                   </div>
                 </div>
                 <div class="col-sm-6">
                   <div class="form-group">
                     <label>Company: </label>
                     <input type="text" class="form-control" placeholder="Enter Company Name">
                   </div>
                 </div>
               </div>
                
               <div class="form-group row">
                    <label for="phone_no" class="col-sm-2 col-form-label">Service Required :</label>
                    <div class="col-sm-10">
                    <div class="row">
                    <div class="col-sm-6">
                      <!-- checkbox -->
                      <div class="form-group">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" checked="">
                          <label class="form-check-label">Website Design & Development</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" >
                          <label class="form-check-label">SEO (Search Engine Optimization)</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" >
                          <label class="form-check-label">Static Website Design </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" >
                          <label class="form-check-label"> Flash Website Development </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" >
                          <label class="form-check-label"> Web Hosting Services </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" >
                          <label class="form-check-label">Ecommerce Development </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" >
                          <label class="form-check-label">Online Payment Integration </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" >
                          <label class="form-check-label"> Dash board Application </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" >
                          <label class="form-check-label">NewsLetter Design </label>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                        <!-- checkbox -->
                        <div class="form-group">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox">
                          <label class="form-check-label">CMS (Content Management System)</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" >
                          <label class="form-check-label">SMO (Social Media Optimization)</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" >
                          <label class="form-check-label">Dynamic Website Design </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" >
                          <label class="form-check-label">Domain Registration </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" >
                          <label class="form-check-label">Website Maintenance</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" >
                          <label class="form-check-label">Walk Through Animation</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" >
                          <label class="form-check-label">Logo Design</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" >
                          <label class="form-check-label">Open Source Customization</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" >
                          <label class="form-check-label">Others</label>
                        </div>
                     
                      </div>
                    </div>
                 </div>
                 </div>
                </div>
              

               <div class="form-group row">
                    <label for="query" class="col-sm-2 col-form-label">Query :</label>
                    <div class="col-sm-10">
                    <textarea class="form-control" id="query" rows="3" name="query"></textarea>                   
                 </div>
                </div>
            
          </form>
            </div>
          <!-- /.col -->

 
        </div><!-- /.container-fluid -->
      </section>
<?php
$content = ob_get_clean(); // Get the buffered content and clean the buffer
require_once "master.php"; // Include the master template
?>
