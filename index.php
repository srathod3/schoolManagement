<?php
session_start();
include("connection.php");

if(isset($_SESSION['user_data']))
{
if($_SESSION['user_data']['userType']==3)
{
    header("location:admin_home.php");
}
else {
    header("location:student_home.php");
     }
     
}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
         <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">  
        <!-- icheck bootstrap -->
        <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
         <!-- Theme style -->
         <link rel="stylesheet" href="dist/css/adminlte.min.css">
        <title></title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
        <?php //include 'css.php'; ?>
	
	
    </head>
    <body class="hold-transition index-page">
    <div class="index-box">
        <div class="container">
            <div class="row">
                <?php if(isset($_REQUEST['error'])) { ?>
                    <div class="col-lg-12">
                        <span class="alert"></sapn>
                    </div>
                <?php } ?>
            </div>
            <div class="row">
                <div class="col-lg-4">
                </div>
                <div class="col-lg-4">
                    <form class="form-signin" action="login1.php" method="POST">
                        <div class="from-group">
                            <h2 class="form-signin-heading text-center">Login</h2>
                        </div>
                        <div class="form-group">
                            <lable for="inputEmail" class="sr-only">Email</lable>
                            <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email" required>
                        </div>
                        <div class="form-group">
                            <lable for="inputPassword" class="sr-only">Password</lable>
                            <input type="password" name="user_password" id="inputPassword" class="form-control" placeholder="Password" required>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4">
   		        </div>
            </div>
        </div>
     </div>
     <script src="plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- AdminLTE App -->
        <script src="dist/js/adminlte.min.js"></script>
    </body>
</html>
