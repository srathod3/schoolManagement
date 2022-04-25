<?php
session_start();
include("connection.php");
if(isset($_POST['add']))
{
    //$exam_name= $_POST['exam_name'];
    $student_id= $_POST['student_id'];
    $subject_id= $_POST['subject_id'];
    $exam_id=$_POST['exam_id'];
    

    if(!empty($student_id) && !empty($subject_id) && !empty($exam_id))
    {
    $query="insert into student_exam (student_id, subject_id, exam_id) values ('$student_id','$subject_id','$exam_id')";
    $result=mysqli_query($con, $query);
    if($result)
    {
       //echo "data inserted successfully";
       header("location: teacher_home.php");
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
        <title>Add Exam</title>

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
    <div class="add-box">
        <div><h2 class="form-signin-heading text-center">Add Exam</h2></div>
        <div class="card">
            <div class="card-body add-card-body">
                <form method="post">
                 <!--   <div class="input-group mb-3">
                        <input type="text" class="form-control" name="exam_name" placeholder="Enter exam name" required><br>
                        <div class="input-group-append">
                            <div class="input-group-text">
                            </div>
                        </div>
                    </div> -->

                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="student_id" placeholder="Enter student id" required><br>
                        <div class="input-group-append">
                            <div class="input-group-text">
                           
                            </div>
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="subject_id" placeholder="Enter subject id" required><br>
                        <div class="input-group-append">
                            <div class="input-group-text">
                            
                            </div> 
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="exam_id" placeholder="Enter exam id" required><br>
                        <div class="input-group-append">
                            <div class="input-group-text">
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary" name="add">Add Exam</button>
                </form>
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