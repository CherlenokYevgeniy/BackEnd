<?php include ('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title> Login Form</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Register</h2>
	</div>
		<form method="POST" action="register.php">
			<?php include ('errors.php'); ?>
			<div class="input-group">
				<label>Login:</label>
				<input type="text" name="login" value="<?php echo $login; ?>">
			</div>
			<div class="input-group">
				<label>Password:</label>
				<input type="password" name="password_1">
			</div>
			<div class="input-group">
				<label>Confirm password:</label>
				<input type="password" name="password_2">
			</div>
			<div class="input-group">
				<button type="submit" name="register" class="btn">Register</button>
			</div>  
			<p>
				Already registered? <a href="login.php">Sign in</a>
			</p>
		</form>
	
</body>
</html>