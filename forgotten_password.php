<?php
session_start();
error_reporting(0);
$_SESSION['rmsg']="";
?>
<?php
include 'config.php';
if(isset($_POST['submit'])){
	$email=$_POST['email'];
	$date=date("d-m-y @ g:i A");
$da=mysqli_query($con,"insert into forgotten_password(email,date) values('$email','$date')");
if ($da) {
$_SESSION['rmsg']='<span style="color:green;">'."Message was successfully recieved, your password will be sent to you via your email....".'</span>';
} else {
	$_SESSION['rmsg']='<span style="color:red;">'."Error sending message".'</span>';
}

}


?>





<!DOCTYPE html>
<html lang="en">
<head>
	<title>ENGLISH TO EDO TRANSLATOR SYSTEM</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body style="background-color: #666666;">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form action="#" class="login100-form validate-form" method="POST">
					<span class="login100-form-title p-b-20" style="font-size: 20px;">
						Enter your email to get password....
					</span>
					<p>
								<?php echo $_SESSION['rmsg']; ?>
								
								
							</p>


							<div class="wrap-input100 validate-input" data-validate = "Email is required">
						<input class="input100" type="email" name="email" placeholder="Email" required  />
						<span class="focus-input100">Email</span>
						<span class="label-input100"></span>
					</div>

			

<div class="container-login100-form-btn">
						<button  type="submit" name="submit" class="login100-form-btn">
							Login
						</button>
					</div>


					
						<span class="txt2">
							<a href="index.html" style="text-decoration: none;">
						Go back to home?
									<i class="fa fa-home fa-2x"></i>
								</a>
						</span>
							
						</fieldset>
					</form>

				<div class="login100-more" style="background-image: url('images/e10.jpg');">
				</div>
			</div>
		</div>
	</div>
	
	

	
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>


