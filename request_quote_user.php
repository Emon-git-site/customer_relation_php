<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CRM-User-Request-Quote</title>

   <!-- Google Font: Source Sans Pro -->
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="assets/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="assets/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="assets/plugins/summernote/summernote-bs4.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

  <?php require_once "includes/user_navbar.php" ?> 
  <?php require_once "includes/user_asidebar.php" ?> 
   
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Dashboard</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Request Quote </li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
                       <!-- Small boxes (Stat box) -->
          <div class="card card-light m-3 px-4">
              <div class="card-header mx-auto mt-2">
                <h3 class="card-title ">Request Quote</h3>
              </div>
              <!-- /.card-header -->
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
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

  </div>

  <?php require_once "includes/footer.php" ?> 

  

  <!-- jQuery -->
  <script src="assets/plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="assets/plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- ChartJS -->
  <script src="assets/plugins/chart.js/Chart.min.js"></script>
  <!-- Sparkline -->
  <script src="assets/plugins/sparklines/sparkline.js"></script>
  <!-- JQVMap -->
  <script src="assets/plugins/jqvmap/jquery.vmap.min.js"></script>
  <script src="assets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="assets/plugins/jquery-knob/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="assets/plugins/moment/moment.min.js"></script>
  <script src="plugins/daterangepicker/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Summernote -->
  <script src="assets/plugins/summernote/summernote-bs4.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="assets/dist/js/adminlte.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="assets/dist/js/demo.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="assets/dist/js/pages/dashboard.js"></script>
</body>

</html>