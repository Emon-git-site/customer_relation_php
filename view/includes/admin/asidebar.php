
 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="dashboard.php" class="brand-link">
        <img src="../../assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">CRM</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="../../assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">Admin Name</a>
          </div>
        </div>


        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->


            <li class="nav-item">
              <a href="dashboard.php" class="nav-link <?= activeMenu('dashboard.php') ?>">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="change_password.php" class="nav-link <?= activeMenu('change_password.php') ?>">
                <i class="nav-icon fas fa-lock"></i>
                <p>
                  Change Password
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="users_manage.php" class="nav-link <?= activeMenu('users_manage.php') ?>">
                <i class="nav-icon fas fa-users"></i>
                <p>
                  Users
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="add_services.php" class="nav-link <?= activeMenu('add_services.php') ?>">
                <i class="nav-icon fab fa-servicestack"></i>
                <p>
                  Add Services
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="manage_ticket.php" class="nav-link <?= activeMenu('manage_ticket.php') ?>">
                <i class="nav-icon fas fa-ticket-alt"></i>
                <p>
                  Manage Ticket
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="manage_quote.php" class="nav-link <?= activeMenu('manage_quote.php') ?>">
                <i class="nav-icon fas fa-envelope"></i>
                <p>
                  Manage Quotes
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="user_access_log.php" class="nav-link <?= activeMenu('user_access_log.php') ?>">
                <i class="nav-icon fas fa-users"></i>
                <p>
                  User Access Log
                </p>
              </a>
            </li>


          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>
    
<?php 
// active side bar code
function activeMenu($parameater){  
  
  $urlParts = explode('/', $_SERVER['PHP_SELF']);
  $currentPage = end($urlParts);

  if ($parameater == $currentPage) {
      return "active";
  }
}
?>