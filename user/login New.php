<?php session_start();
if (isset($_SESSION['username']) && $_SESSION['role'] == 'student') {
	header("Location: index.php");
} else if (isset($_SESSION['username']) && $_SESSION['role'] == 'teacher') {
	header("Location: Admin/index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Matrix Admin</title>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
	<link rel="stylesheet" href="css/matrix-login.css" />
	<link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,700,800" rel="stylesheet" type="text/css">

</head>

<body>

	<div class="container-fluid" style="margin-top: -120px;">

		<center>
			<hr>

			<div class="row" style="padding-top: 0px;">

				<img src="http://downloadicons.net/sites/default/files/computer-icon-66489.png" style="height: 120px;width: 120px;padding-top: 0px;">

				<img src="http://icons.iconarchive.com/icons/paomedia/small-n-flat/1024/book-icon.png" style="height: 145px;width: 150px;padding-top: 0px;">



				<!--Center Logo-->
				<img src="http://www.indraprasthaacademy.in/img/college_111.png" style="padding-top: 0px;height: 180px;width: 200px;">


				<img src="https://www.governmentjobs.com/Content/Images/CategoryIcons/engineering.png" style="height: 145px;width: 150px;padding-top: 0px;">

				<img src="https://pianu.com/wp-content/uploads/2015/05/academy-hat.png" style="height: 120px;width: 120px;padding-top: 0px;">
			</div>


			<div class="row" style="color:bisque;font-family: monospace;font-size:40px;padding-top: 5px;"><br>
				<p>COEB Academic Login</p>
			</div>
			<hr>
		</center>


	</div>
	<?php if (@$_GET['id'] == 2345123475) {
		echo "<center><strong><font color='tomato'><h5>Incorrect User ID or Password</h5></font></strong></center>";
	}
	?>
	<div id="loginbox">

		<form id="loginform" class="form-vertical" action="includes/login.php" method="post">
			<h3 style="color: #ffffff; text-align: center;">Student LogIn</h3>
			<div class="control-group">
				<div class="controls">
					<div class="main_input_box">
						<span class="add-on bg_lg"><i class="icon-user"> </i></span><input type="text" name="regd_no" placeholder="Registration Number" required />
					</div>
				</div>
			</div>
			<div class="control-group">
				<div class="controls">
					<div class="main_input_box">
						<span class="add-on bg_ly"><i class="icon-lock"></i></span><input type="password" pattern=".{6,32}" name="password" placeholder="Password" required title="Password must be 6 to 32 characters" />
					</div>
				</div>
			</div>
			<div class="control-group">
				<div class="controls">
					<div class="main_input_box">
						<span><button type="submit" name="student_login" class="btn btn-large btn-success"> Login</button></span>

					</div>
				</div>
			</div>
			<div class="form-actions">
				<span class="pull-left"><a href="#" class="flip-link btn btn-info" id="to-teacher">Teacher Log In</a></span>
				<span class="pull-right"><a href="#" class="flip-link btn btn-danger" id="to-recover">Forgot password&nbsp;?</a></span>
			</div>
		</form>
		<form id="teacherform" class="form-vertical" action="includes/login_teacher.php" method="post">
			<h3 style="color: #ffffff; text-align: center;">Teacher LogIn</h3>
			<div class="control-group">
				<div class="controls">
					<div class="main_input_box">
						<span class="add-on bg_lg"><i class="icon-user"> </i></span><input type="text" name="regd_no" placeholder="Registration Number" required />
					</div>
				</div>
			</div>
			<div class="control-group">
				<div class="controls">
					<div class="main_input_box">
						<span class="add-on bg_ly"><i class="icon-lock"></i></span><input type="password" pattern=".{6,32}" name="password" placeholder="Password" required title="Password must be 6 to 32 characters" />
					</div>
				</div>
			</div>
			<div class="control-group">
				<div class="controls">
					<div class="main_input_box">
						<span><button type="submit" name="teacher_login" class="btn btn-large btn-success"> Login</button></span>

					</div>
				</div>
			</div>
			<div class="form-actions">
				<span class="pull-left"><a href="#" class="flip-link btn btn-success" id="teacher-login"><i class="icon-hand-left">&nbsp; </i>Student logIn</a></span>
				<span class="pull-right"><a href="#" class="flip-link btn btn-danger" id="teacher-forgot">Forgot Password&nbsp;?</a></span>
			</div>
		</form>
		<form id="forgotform" action="#" class="form-vertical">
			<p class="normal_text">Enter your registration number below and we will send you a recovery password.</p>

			<div class="controls">
				<div class="main_input_box">
					<span class="add-on bg_lo"><i class="icon-user"></i></span><input type="text" placeholder="Registration Number" />
				</div>
			</div>

			<div class="form-actions">
				<span class="pull-left"><a href="#" class="flip-link btn btn-success" id="forgot-login"><i class="icon-hand-left">&nbsp; </i>Teacher LogIn</a></span>
				<span class="pull-right"><a class="btn btn-info">Recover</a></span>
			</div>
		</form>

		<form id="recoverform" action="#" class="form-vertical">
			<p class="normal_text">Enter your registration number below and we will send you a recovery password.</p>

			<div class="controls">
				<div class="main_input_box">
					<span class="add-on bg_lo"><i class="icon-user"></i></span><input type="text" placeholder="Registration Number" />
				</div>
			</div>

			<div class="form-actions">
				<span class="pull-left"><a href="#" class="flip-link btn btn-success" id="to-login"><i class="icon-hand-left">&nbsp; </i>Student logIn</a></span>
				<span class="pull-right"><a class="btn btn-info">Recover</a></span>
			</div>
		</form>

	</div>

	<script src="js/jquery.min.js"></script>
	<script src="js/matrix.login.js"></script>
</body>

</html>
