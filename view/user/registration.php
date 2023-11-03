<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Regiatration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../../assets/plugins/jquery/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"  rel="stylesheet">
</head>
   
<body>
    <div class="row">
        <div class="col-md-6 mx-auto mt-3">
            <div class="card card-primary mt-2">
                <div class="card-header mx-auto">
                    <h3 class="card-title ">User Registration</h3>
                </div>
                <!-- /.card-header -->
                <?php
                // password not matching message show
                if (isset($_GET['p_match'])) {
                    echo '<script>
                            document.addEventListener("DOMContentLoaded", function() {
                                Swal.fire({
                                    icon: "error",
                                    title: "Oops...",
                                    text: "Passwords do not match!",
                                }).then(function() {
                                    window.location.href = "registration";
                                });
                            });
                        </script>';
                }
                // email availabilty checking
                if (isset($_GET['email'])) {
                    echo '<script>
                    document.addEventListener("DOMContentLoaded", function() {
                        Swal.fire({
                            icon: "error",
                            title: "Oops...",
                            text: "Email already exit!",
                        }).then(function() {
                            window.location.href = "index.php";
                        });
                    });
                </script>';
                }
                // user registration successfull message
                if (isset($_GET['registration'])) {
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
                            title: 'User Registration successful  successfull'
                        }).then(function() {
                            window.location.href = 'index.php';
                        });
                    });
                  </script>";
            
                }

                ?>
                <!-- form start -->
                <form action="function/user_regristration_f.php" method="post">
                    <div class="card-body">
                        <div class="form-group py-2">
                            <label for="user_name">User Name</label>
                            <input type="text" class="form-control" name="user_name" id="user_name" placeholder="Enter user name" required>
                        </div>
                        <div class="form-group py-2">
                            <label for="user_email">Email address:&nbsp;<small id="email_valid"></small> </label>
                            <input type="email" class="form-control" name="user_email" id="user_email" placeholder="Enter Email" required>
                            <small id="email_availability"></small>
                        </div>
                        <div class="form-group py-2">
                            <label for="user_password">Password</label>
                            <input type="password" class="form-control" name="user_password" id="user_password" placeholder="Enter Password" required>
                        </div>
                        <div class="form-group py-2">
                            <label for="conform_password">Re-type Password</label>
                            <div class="input-group">
                                <input type="password" class="form-control" name="conform_password" id="conform_password" placeholder="Re-type Password" required>
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="material-icons visibility">visibility_off</i>
                                    </span>
                                </div>
                            </div>
                            <div id="pass_not_match"></div>
                        </div>
                        <div class="form-group py-2">
                            <label for="contact_no">Contact No</label>
                            <input type="text" class="form-control" name="contact_no" id="contact_no" placeholder="Enter contact no" required>
                        </div>

                        <div class="form-group py-2">
                            <label class="form-label">Gender</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="male" value="male" required>
                                <label class="form-check-label" for="male">Male</label>
                            </div>
                            <div class="form-check py-2">
                                <input class="form-check-input" type="radio" name="gender" id="female" value="female" required>
                                <label class="form-check-label" for="female">Female</label>
                            </div>
                        </div>

                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" name="user_registration_btn" class="btn btn-primary" id="user_registration_btn">Registration</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
    //   jacascript password match checking
            $(document).ready(function() {
            $('#conform_password').keyup(function() {
                let new_password = $('#new_password').val();
                let conform_password = $('#conform_password').val();

                if (new_password !== conform_password) {
                    $('#pass_match').html('**passwords do not match');
                    $('#pass_match').css('color', 'red');
                } else if (conform_password == '') {
                    $('#pass_match').html('');
                } else {
                    $('#pass_match').html('password matched');
                    $('#pass_match').css('color', 'green');
                }
            });
        });


        // javascript password visibility show and hidden
        $(document).ready(function() {
            let conform_password = $('#conform_password');
            let visibility = $('.visibility');
            let isshow = true;

            visibility.click(function() {
                if (isshow) {
                    conform_password.attr('type', 'text');
                    visibility.text('visibility');
                } else {
                    conform_password.attr('type', 'password');
                    visibility.text('visibility_off');
                }
                isshow = !isshow;
            });
        });
        // user email validity checking 
        $(document).ready(function() {
            $('#user_email').on('input', function() {
                let email = $(this).val();
                let emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                let isValidEmail = emailRegex.test(email);

                if (isValidEmail) {
                    $('#email_valid').html('valid email');
                    $('#email_valid').css('color', 'green');
                } else {
                    $('#email_valid').html('invalid email');
                    $('#email_valid').css('color', 'red');
                }
            });
        });
        // user email availability
        $(document).ready(function() {
            $('#user_email').blur(function(){
                let email = $(this).val();
            $.ajax({
                url: "../../function/user/check_email_availability.php",
                data:{user_email:email},
                type: "post",
                success: function(message){
                    $('#email_availability').html(message);
                    $('#email_availability').css('color', 'blue');
                },
                error:function(message){
                    $('#email_availability').html(message);
                }
            }); 
            });
        });

    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>