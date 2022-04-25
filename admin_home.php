<?php
session_start();
include("connection.php");
if(isset($_SESSION['user_data']))
{
    if($_SESSION['user_data']['userType']!=3)
    {
        header("location: index.php");
    }
    $data=array();
    $query=mysqli_query($con,"select * from users");
    while($row=mysqli_fetch_assoc($query))
    {
        array_push($data,$row);
    }
?>

<!DOCTYPE html>
<head>
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
        
</head>
<body>
    <div class="container">
        <form method="post">
	    <div class="row">
            <?php if(isset($_REQUEST['error'])) { ?>
	        <div class="col-lg-12">
                <span class="alert alert-danger" style="display: block;">
                    <?php echo $_REQUEST['error']; ?>
                </span>
            </div>
            <?php } ?>
        </div>
		
	        <div class="row">
                <?php if(isset($_REQUEST['success'])) { ?>
                <div class="col-lg-12">
                    <span class="alert alert-success" style="display: block;">
                    <?php echo $_REQUEST['success']; ?>
                    </span>
                </div>
                <?php } ?>
            </div>
            <div class="row">
                <a href="logout.php" class="btn btn-success" style="margin:10px;">Logout</a>
                <a href="add_course.php" class="btn btn-success" style="margin:10px;">Add course</a>
                <a href="add_user.php" class="btn btn-success" style="margin:10px;">Add user</a>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div>
                        <table class="table table-bordered">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                            </tr>
                            <?php
                            foreach($data as $d) { ?>
                            <tr>
                                <td><?php echo $d['id']; ?></td>
                                <td><?php echo $d['user_name']; ?></td>
                                <td><?php echo $d['email']; ?></td>
                            </tr>
                            <?php } ?>
                        </table>
                    </div>
                </div>
            </div>
            <script src="plugins/jquery/jquery.min.js"></script>
            <!-- Bootstrap 4 -->
            <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
            <!-- AdminLTE App -->
            <script src="dist/js/adminlte.min.js"></script>
         </from>
        </div>
    </body>
</html>
<?php
}
else {
    header("location:index.php?error=unauthorized access");
}
?>