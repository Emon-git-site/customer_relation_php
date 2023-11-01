
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>user signup</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="assets/plugins/jquery/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="row">
        <div class="col-md-6 mx-auto mt-3">
            <div class="card card-primary mt-2">
                <div class="card-header mx-auto">
                    <h3 class="card-title ">User Login</h3>
                </div>
                <!-- /.card-header -->
                <?php
                 if (isset($_GET['user_log'])) {
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
                           title: 'Signed in successfully'
                       }).then(function() {
                           window.location.href = 'change_password_user.php';
                       });
                   });
                 </script>";
                }
                ?>
                <!-- form start -->
                <form action="function/user_login_f.php" method="post">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="user_email">Email address</label>
                            <input type="email" class="form-control" name="user_email" id="user_email" placeholder="Enter Email">
                        </div>
                        <div class="form-group">
                            <label for="user_password">Password</label>
                            <input type="password" class="form-control" name="user_password" id="user_password" placeholder="Enter Password">
                        </div>
                     
                       
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" name="user_login_btn" class="btn btn-primary">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>