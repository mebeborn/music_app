<?php
	include("includes/classes/Account.php");

	$account = new Account();

	include("includes/handlers/login-handler.php");
	include("includes/handlers/register-handler.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Welcomy to Music App</title>
</head>
<body>

	<div id="inputContainer">
		<form action="register.php" id="loginForm" method="POST">
			<h2>Login your account</h2>
			<p>
				<label for="loginUsername">Username</label>
				<input type="text" id="loginUsername" name="loginUsername" placeholder="alexborn" required>
			</p>
			<p>
				<label for="loginPassword">Password</label>
				<input type="password" id="loginPassword" name="loginPassword" required>
			</p>

			<button type="submit" name="loginButton">Log In</button>
		</form>

		<form action="register.php" id="registerForm" method="POST">
			<h2>Register your account</h2>
			
			<p>
				<?php echo $account->getError("Your first name must be between 2 and 20 characters"); ?>
				<label for="firstname">First name</label>
				<input type="text" id="firstname" name="firstname" required>
			</p>

			<p>
				<?php echo $account->getError("Your last name must be between 2 and 20 characters"); ?>
				<label for="lastname">Last name</label>
				<input type="text" id="lastname" name="lastname" required>
			</p>

			<p>
				<?php echo $account->getError("Your username must be between 5 and 15 characters"); ?>
				<label for="username">Username</label>
				<input type="text" id="username" name="username" required>
			</p>

			<p>
				<?php echo $account->getError("Email is invalid"); ?>
				<label for="email">Email</label>
				<input type="email" id="email" name="email" required>
			</p>

			<p>
				<?php echo $account->getError("Your passwords don't match"); ?>
				<?php echo $account->getError("Your password can contain numbers and letters"); ?>
				<?php echo $account->getError("Your password must be between 5 and 30 characters"); ?>
				<label for="password">Password</label>
				<input type="password" id="password" name="password" required>
			</p>

			<p>
				<label for="password2">Confirm Password</label>
				<input type="password" id="password2" name="password2" required>
			</p>

			<button type="submit" name="registerButton">Sign Up</button>
		</form>
	</div>
	
</body>
</html>