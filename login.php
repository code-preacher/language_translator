<?php
session_start();
error_reporting(0);
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
				<form action="check.php" class="login100-form validate-form" method="post">
					<span class="login100-form-title p-b-20">
						Login to continue
					</span>
					<p>
								<?php echo $_SESSION['msg']; ?>
								<?php echo $_SESSION['msg']=""; ?>
							</p>
					
							<div class="wrap-input100 validate-input" data-validate = "Email is required">
						<input class="input100" type="email" name="email" placeholder="Email" required  />
						<span class="focus-input100">Email</span>
						<span class="label-input100"></span>
					</div>

							<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="password" placeholder="Password" required />
						<span class="focus-input100">Password</span>
						<span class="label-input100"></span>
					</div>



<div class="container-login100-form-btn">
						<button  type="submit" name="submit" class="login100-form-btn">
							Login
						</button>
					</div>
					
					<div class="text-left p-t-46 p-b-20">
						<span class="txt2">
						Don't have an account yet?
								<a href="reg.php">
									Create an account
								</a>
						</span>
					</div>


	
						<span class="txt2">
							<a href="forgotten_password.php">
						forgot password?
								</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<a href="index.html" style="text-decoration: none;">
						Go back to home?
									<i class="fa fa-home fa-2x"></i>
								</a>

						</span>
					


						</fieldset>
					</form>

				<div class="login100-more" style="background-image: url('images/e22.png');">
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


