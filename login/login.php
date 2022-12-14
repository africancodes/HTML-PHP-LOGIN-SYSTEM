<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/styles.css">
	<title>Login</title>

	<style>
		body{
			background-image: url("img/back1.jpg");
			background-repeat: no-repeat;
			background-size: cover;
		}
	</style>
</head>
<body>

    <!-- heading -->
	<fieldset class="loginField">
		<form action="" class="nestedForm">
			<h2 class="fh">Login</h2>
		</form>
		
		<form class="loginForm" method="post" action="login.php">
		<?php include('errors.php'); ?>

			<div class="input-group">
				<input type="text" name="username" placeholder="Enter username" >
			</div>
			<div class="input-group">
				<input type="password" name="password" placeholder="Enter your password">
			</div>

			<!-- Submit -->
			<div class="input-group">
				<button type="submit" class="btn" name="login_user">Login</button>
			</div>
			<p> Already have an Account?<a href="register.php"> Get registered </a> </p>
		</form>
  </fieldset>


       <!-- Footer -->
    <form action="" method="post">
        <?php include 'footer.php'?>
	</form>

</body>
</html>