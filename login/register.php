  <!-- a link to my validation page (server page) 
 <?php include('server.php') ?>-->
 
 <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<title>Registration</title>
	<style>
		body{
			background-image: url("img/back2.jpg");
		}
	</style>
</head>
<body>

	<fieldset class="loginField" >
		<legend> <h1>Registration</h1> </legend>
	
  	<form class="fomu regForm" method="post" action="register.php">
		<?php include('errors.php'); ?>
	<!-- username -->
		<div class="input-group">
		<input type="text" name="username"   placeholder="Enter username" required>
		</div>

	<!-- Email -->
		<div class="input-group">
		<input type="email" name="email"  placeholder="Enter email account" required>
		</div>

	<!-- Password -->
		<div class="input-group">
		<input type="password" name="password_1"  placeholder="Enter your password" required>
		</div>

	<!-- Confirm Password -->
		<div class="input-group">
		<input type="password" name="password_2" placeholder="Cornfirm password" required>
		</div>

	<!-- Submit -->
		<div class="input-group">
		<button type="submit" class="btn" name="reg_user">Register</button>
		</div>

	<!-- transfer the user to login page if he/she already have an account  -->
		<p>
			Already have an account?<a href="login.php"> <span id = "loginText">Login</span> </a>
		</p>
  	</form>
	</fieldset>
  	<!-- Footer -->
	<form action="" method="post">
        <?php include 'footer.php'?>
	</form>


	</body>
</html>