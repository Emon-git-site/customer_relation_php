<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="row">
        <div class="col-md-6 mx-auto mt-3">
            <div class="card card-primary mt-2">
                <div class="card-header mx-auto">
                    <h3 class="card-title ">Admin Login</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="admin_email">Email address</label>
                            <input type="email" class="form-control" name="admin_email" id="admin_email" placeholder="Enter Email">
                        </div>
                        <div class="form-group">
                            <label for="admin_password">Password</label>
                            <input type="password" class="form-control" name="admin_password" id="admin_password" placeholder="Enter Password">
                        </div>
                     
                       
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" name="admin_login_btn" class="btn btn-primary">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>