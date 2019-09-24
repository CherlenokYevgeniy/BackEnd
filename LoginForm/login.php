<?php include ('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title> Login Form</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Login</h2>
	</div>
		<form method="POST" action="login.php">
			<?php include ('errors.php'); ?>
			<div class="input-group">
				<label>Login:</label>
				<input type="text" name="login">	
			</div>
			<div class="input-group">
				<label>Password:</label>
				<input type="password" name="password">
			</div>
			<div class="input-group">
				<button type="submit" name="log" class="btn">Login</button>
			</div>
			<p>
				Not yet registered? <a href="register.php">Sign up</a>
			</p>
		</form>
	
</body>
</html>