<?php include ('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
</head>
<body>
	<div>
		<h2>Home page </h2>
	</div>

	<div>
		<?php if (isset($_SESSION['success'])): ?>
			<div>
				<h3>
					<?php
						echo $_SESSION['success'];
						unset($_SESSION['success']); 
					 ?>
				</h3>
			</div>
		<?php endif ?>

		<?php if (isset($_SESSION['login'])): ?>
			<p>Welcome <?php echo $_SESSION['login']; ?></p>
			
			<p><a href="index.php?logout='1'">Log out</a></p>
		<?php endif ?>

		<?php if (isset($_SESSION['id'])): ?>
			<p>Your id: <?php echo $_SESSION['id']; ?></p>
		<?php endif ?>
	</div>

</body>
</html>