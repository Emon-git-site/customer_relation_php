<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $pageTitle; ?></title>
    <link rel="shortcut icon" href="#" />
    <?php require_once "../includes/css/css.php"?>
  

<body class="hold-transition sidebar-mini layout-fixed">
    <?= $main ;?>
<?php require_once "../includes/footer.php" ?>
<?php require_once "../includes/js/js.php" ?>
    <script>
        (function($) {

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

        })(jQuery);
       
         
    </script>
</body>

</html>