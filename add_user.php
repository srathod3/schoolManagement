<?php
include("connection.php");
include("function.php");
if(isset($_POST['add']))
{
    $id=$_POST['id'];
    $user_name= $_POST['username'];
    $email= $_POST['email'];
    $user_password= $_POST['password'];
    $userType= $_POST['userType'];

    if(!empty($user_name) && !empty($email) && !empty($user_password) && !is_numeric($user_name))
    {
    $query="insert into users (id, user_name, email, user_password, userType) values ('$id','$user_name','$email','$user_password','$userType')";
    $result=mysqli_query($con, $query);
    if($result)
    {
       echo "data inserted successfully";
       //header("location: index.php");
    } else
        {
       die(mysqli_error($con)) ;
        }
    } 
}
?>
<!DOCTYPE html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Add user</title>

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
<body class="hold-transition login-page">
    <div class="login-box">
        <div><h2 class="form-signin-heading text-center">Add User</h2></div>
        <div class="card">
            <div class="card-body add-card-body">
                <div class="row">
                
                    <form method="post">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="id" placeholder="id" required><br>
                        <div class="input-group-append">
                            <div class="input-group-text">
                            </div>
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="user_name" placeholder="Enter username" required><br>
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
                        <input type="text" class="form-control" name="userType" placeholder="Enter usertype" required><br>
                        <div class="input-group-append">
                            <div class="input-group-text">
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary" name="add">Add</button>
                </form>
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