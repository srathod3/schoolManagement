<?php
session_start();
include("connection.php");
if(isset($_SESSION['user_data']))
{
    if($_SESSION['user_data']['userType']!=2)
	{
        header("location: teacher_home.php");
    }

    /*$result_data=array();
	$is_result=false;
	$result=mysqli_query($con,"select * from result where id='".$_SESSION['user_data']['id']."'");
	if(mysqli_num_rows($result)>0)
	{
		$is_result=true;
		$result_row=mysqli_fetch_assoc($result);

		$query=mysqli_query($con,"select result_data.*,subject.subject_name from result_data,subject 
		where subject.id=result_data.subject_id and result_data.result_id='".$result_row['id']."'");
		//"select result_data.*, subject.subject_name from result_data,subject
		//where subject.id=result_data.subject_id and result_data.result_id='".$result_row['id']."'");	

		while($row=mysqli_fetch_assoc($result))
		{
			array_push($result_data,$row);
		}
		
		echo mysqli_error($con);
	} */
	
	$sql="select result_data.*, subject.subject_name from result_data, subject 
	where subject.id=result_data.subject_id and result_data.result_id";
	$result=mysqli_query($con,$sql);
	if($result){
		while($row=mysqli_fetch_assoc($result)) {
			$id=$row['id'];
			$result_id=$row['result_id'];
			$subject_id=$row['subject_id'];
			$subject_name=$row['subject_name'];
			$marks=$row['marks'];
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
	
		 <title>View Result</title>
		<?php //include 'css.php'; ?>
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<a href="logout.php" class="btn btn-success" style="margin:10px;">Logout</a>
				</div>
			</div>
			<div class="row">
				<?php //if($is_result) { ?>
				<div class="col-lg-12">
					<table class="table table-bordered">
						<tr>
							<th colspan="3">Result</th>
						</tr>
						<tr>
							
							<th>Subject Id</th>
							<th>Subject Name</th>
							<th>Marks</th>
							<th>Marks Obtained</th>
						</tr>
							<?php foreach($result as $result){ ?>
						<tr>
							<td>
								<?php echo $result['subject_id']; ?>
							</td>
							<td>
								<?php echo $result['subject_name']; ?>
							</td>
							<td>
								100
							</td>
							<td>
								<?php echo $result['marks']; ?>
							</td>
							</tr>
							<?php } ?>
					</table>
			</div>
	<?php// } else { ?>
		<div class="col-lg-12">
		<!--	<h2>Result Not Found!</h2> -->
		</div>
	<?php// }	?>
</div>
</div>
<script src="plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- AdminLTE App -->
        <script src="dist/js/adminlte.min.js"></script>
</body>
</html>	

