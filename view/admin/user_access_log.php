<?php
$pageTitle = "User Access Log";
ob_start(); // Start output buffering
?>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
        <div class="card">
              <div class="card-header mx-auto">
                <h3 class="card-title ">Manage Users</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th class="text-center" style="width: 20px">#UID</th>
                      <th class="text-center">USER NAME</th>
                      <th class="text-center">EMAIL</th>
                      <th class="text-center">LOGIN DATE|LOGIN TIME</th>
                      <th class="text-center">IP</th>
                      <th class="text-center">MAC ID</th>
                      <th class="text-center">MAC ID</th>
                      <th class="text-center">CITY</th>
                      <th class="text-center">COUNTRY</th>
                    </tr>
                  </thead>
                  <tbody>
            
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
      <?php
$content = ob_get_clean(); // Get the buffered content and clean the buffer
require_once "master.php"; // Include the master template
?>