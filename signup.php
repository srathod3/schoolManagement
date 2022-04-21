<?php 
session_start();
include("connection.php");
include("function.php");

if(isset($_POST['signup']))
{
    $id=$_POST['id'];
    $user_name= $_POST['user_name'];
    $email= $_POST['email'];
    $user_password= $_POST['user_password'];
    $userType= $_POST['userType'];

    if(!empty($user_name) && !empty($email) && !empty($user_password) && !is_numeric($user_name))
    {
    $query="insert into users (id, user_name, email, user_password, userType) values ('$id','$user_name','$email','$user_password','$userType')";
    $result=mysqli_query($con, $query);
    if($result)
    {
       // echo "data inserted successfully";
       header("location: index.php");
    } else
     {
       die(mysqli_error($con)) ;
    }

} 
}
?> 


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Signup</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
         <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">  
        <!-- icheck bootstrap -->
        <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
         <!-- Theme style -->
         <link rel="stylesheet" href="dist/css/adminlte.min.css"> 
    </head>
    <body class="hold-transition register-page">
        <div class="register-box">
            <div class="register-logo">
              <b>Signup</b>
            </div>
            <div class="card">
                <div class="card-body register-card-body">
                    <p class="login-box-msg">Register a new account</p>
       
                    <form method="POST">
                        <div class="input-group mb-3">
                             <input type="text" class="form-control" name="user_name" placeholder="Enter name" required><br>
                                <div class="input-group-append">
                                 <div class="input-group-text">
                                <span class="fas fa-user"></span>
                                </div>
                                </div>
                        </div>

                        <div class="input-group mb-3">
                            <input type="email" class="form-control" name="email" placeholder="Enter email" required><br>
                            <div class="input-group-append">
                            <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                            </div>
                            </div>
                        </div>

                        <div class="input-group mb-3">
                            <input type="password" class="form-control" name="user_password" placeholder="Enter password" required><br>
                            <div class="input-group-append">
                            <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                            </div>
                            </div>
                        </div>

                        <div class="input-group mb-3">
                            <select name="userType">
                                <option>select type</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                            </select>
                            <div class="input-group-append">
                            <div class="input-group-text">
                            </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary" name="signup"> Signup </button>
                    </form>
                    <p class="mb-0">
                        <a href="index.php" class="text-center">Already having account </a>
                    </p>
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