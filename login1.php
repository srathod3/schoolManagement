<?php
session_start();
include("connection.php");

if(isset($_REQUEST['email']) && isset($_REQUEST['user_password']))
{
    $email=mysqli_real_escape_string($con,$_REQUEST['email']);
    $user_password=mysqli_real_escape_string($con,$_REQUEST['user_password']);
    $query=mysqli_query($con,"select * from users where email='".$email."' and user_password='".$user_password."'");
    if(mysqli_num_rows($query)>0)
    {
        $data=mysqli_fetch_assoc($query);
        $_SESSION['user_data']=$data;
        if($data['userType']==1)
        {
            header("location: teacher_home.php");
        }
        elseif($data['userType']==2)
        {
            header("location: student_home.php");
        }
        else {
            header("location: admin_home.php");
        }
    }
    else {
        header("location: index.php?error=invalid login details"); 
    }
}
else {
    header("location: index.php?error=please enter email and password"); 
}
?>


