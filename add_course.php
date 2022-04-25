<?php
session_start();
include("connection.php");

if(isset($_POST['add'])){

$id=$_POST['id'];
$subject_name=$_POST['subject_name'];

if(!empty($id) && !empty($subject_name)){
    $query="insert into subject (id,subject_name) values ('$id','$subject_name')";
    $result=mysqli_query($con,$query);
    if($result){
        echo "data inserted";
    }
    else {
        die(mysqli_error($con));
    }
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
         <title>Add course</title>
</head>
<body  class="hold-transition login-page">
    <div class="login-box">
    <div><h2 class="form-signin-heading text-center">Add Course</h2></div>
    <div class="card">
        <div class="card-body add-card-body">
            <div class="row">
                <form method="post">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="id" placeholder="Enter course id" required><br>
                            <div class="input-group-append">
                            <div class="input-group-text">
                           
                            </div>
                            </div>
                    </div>

                    <div class="input-group mb-3">
                         <input type="text" class="form-control" name="subject_name" placeholder="Enter course" required><br>
                            <div class="input-group-append">
                            <div class="input-group-text">
                            
                            </div>
                             </div>
                    </div>
                        <button type="submit" class="btn btn-primary" name="add">Add course</button>
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