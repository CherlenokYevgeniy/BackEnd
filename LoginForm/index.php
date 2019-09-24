<?php include ('server.php'); 
	if (empty($_SESSION['login'])) {
		header('location: login.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Home page </h2>
	</div>

	<div class="content">
		<?php if (isset($_SESSION['success'])): ?>
			<div class="error success">
				<h3>
					<?php
						echo $_SESSION['success'];
						unset($_SESSION['success']); 
					 ?>
				</h3>
			</div>
		<?php endif ?>

		<?php if (isset($_SESSION['login'])): ?>
			<p>Welcome <strong><?php echo $_SESSION['login']; ?></strong></p>
			
			<p><a href="index.php?logout='1'" style="color: red">Log out</a></p>
		<?php endif ?>

	</div>

</body>
</html>