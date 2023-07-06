<?php
include_once('vendor/autoload.php');
use App\Controllers\Student;
$stu = new Student;

if(isset($_POST['up'])){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$cell = $_POST['cell'];
	$std_pass = $_POST['pass'];
	$photo = $_FILES['photo'];

	if(empty($name) || empty($email) || empty($cell) || empty($std_pass)){
		$msg = $stu -> validate("All the fields are required!!!!", 'danger');
	}else{
	 $stu -> createNew($name, $email, $cell, $std_pass, $photo);
	}


}








?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Development Area</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>
	
	

	<div class="wrap">
		<a class='btn btn-warning btn-sm' href="index.php">Back to Table</a>
		<br>
		<br>
		<div class="card shadow">
			<div class="card-body">
				<h2>Sign Up</h2>
				<p>
				<?php
					if(isset($msg)){
						echo $msg;
					}
				?>
				</p>

				<form action="" method="POST" enctype="multipart/form-data">
					<div class="form-group">
						<label for="">Name</label>
						<input name='name' class="form-control" type="text">
					</div>
					<div class="form-group">
						<label for="">Email</label>
						<input name='email' class="form-control" type="text">
					</div>
					<div class="form-group">
						<label for="">Cell</label>
						<input name='cell' class="form-control" type="text">
					</div>
					<div class="form-group">
						<label for="">Password</label>
						<input name='pass' class="form-control" type="password">
					</div>
					<div class="form-group">
						<input name='photo' class="form-control" type="file">
					</div>
					<div class="form-group">
						<input name='up' class="btn btn-primary" type="submit" value="Sign Up">
					</div>
				</form>
			</div>
		</div>
	</div>
	







	<!-- JS FILES  -->
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>
</body>
</html>