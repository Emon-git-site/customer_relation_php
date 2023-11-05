<?php 
session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRM-user signin</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="../../index2.html" class="h1">Userfgd Sign</a>
            </div>

            <?php
            // user login successfull message show
            // if (isset($_GET['user_log']) && $_GET['user_log'] == "yes") {       

            // if(isset($_POST['user_login_btn'])){
        //       echo "<script>
        //     document.addEventListener('DOMContentLoaded', function() {
        //     const Toast = Swal.mixin({
        //     toast: true,
        //     position: 'top-end',
        //     showConfirmButton: false,
        //     timer: 3000,
        //     timerProgressBar: true,
        //     didOpen: (toast) => {
        //      toast.addEventListener('mouseenter', Swal.stopTimer)
        //      toast.addEventListener('mouseleave', Swal.resumeTimer)
        //    }
        //  })

        //     Toast.fire({
        //         icon: 'succsdfsdess',
        //         title: 'Login succeshjgjhsful',
        //     })
        //  });
        //   </script>";
        //     } 
       
           
        //     echo '<h1>test</h1>';

        // }
        //     ?>

            <div class="card-body">
                <p class="login-box-msg">Sign in dfgdfgto get your services</p>

                <form action="text_function.php" method="post">
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" name="user_email" id="user_email" placeholder="Enter xfgvxEmail">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" name="user_password" id="user_password" placeholder="Enter Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <i class="material-icons visibility">visibility_off</i>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="remember">
                                <label for="remember">
                                    Remember Me
                                </label>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" name="user_login_btn" class="btn btn-primary btn-block">Sign In</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>


                <p class="mb-1">
                    <a href="#">I forgot my password</a>
                </p>
                <p class="mb-0">
                    <a href="view/user/registration.php" class="text-center">Register a new membership</a>
                </p>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.login-box -->



    <!-- jQuery -->
    <script src="assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="assets/dist/js/adminlte.min.js"></script>
    <script>


  $(function() {
    var Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
    });

    $('.swalDefaultSuccess').click(function() {
      Toast.fire({
        icon: 'success',
        title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });


    //     // javascript password visibility show and hidden
    //     $(document).ready(function() {
    //         let user_password = $('#user_password');
    //         let visibility = $('.visibility');
    //         let isshow = true;

    //         visibility.click(function() {
    //             if (isshow) {
    //                 user_password.attr('type', 'text');
    //                 visibility.text('visibility');
    //             } else {
    //                 user_password.attr('type', 'password');
    //                 visibility.text('visibility_off');
    //             }
    //             isshow = !isshow;
    //         });
    //     });


    // // JavaScript code to focus on the email input field when the page loads
    // document.addEventListener('DOMContentLoaded', function() {
    //     document.getElementById('user_email').focus();
    // });

    </script>
</body>

</html>