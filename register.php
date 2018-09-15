<?php
	include("includes/config.php");
	include("includes/classes/Account.php");
	include("includes/classes/Constants.php");

	$account = new Account($con);

	include("includes/handlers/login-handler.php");
	include("includes/handlers/register-handler.php");

	function getInputValue($name){
		if(isset($_POST[$name])){
			echo $_POST[$name];
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Welcomy to Music App</title>
	<link rel="stylesheet" href="assets/css/register.css">
</head>
<body>
	<div id="background">
		<div id="loginContainer">
			<div id="inputContainer">
				<form action="register.php" id="loginForm" method="POST">
					<h2>Login your account</h2>
					<p>
						<?php echo $account->getError(Constants::$loginFailed); ?>
						<label for="loginUsername">Username</label>
						<input type="text" id="loginUsername" name="loginUsername" placeholder="Barten" required>
					</p>
					<p>
						<label for="loginPassword">Password</label>
						<input type="password" id="loginPassword" name="loginPassword" placeholder="Your password" required>
					</p>

					<button type="submit" name="loginButton">Log In</button>
					<div class="hasAccountText">
						<span id="hideLogin">
							Don't have an account yet? Signup here.
						</span>
					</div>
				</form>

				<form action="register.php" id="registerForm" method="POST">
					<h2>Register your account</h2>
					
					<p>
						<?php echo $account->getError(Constants::$firstNameCharacters); ?>
						<label for="firstname">First name</label>
						<input type="text" id="firstname" name="firstname" value="<?php getInputValue('firstname') ?>"
						placeholder="Derik" required>
					</p>

					<p>
						<?php echo $account->getError(Constants::$lastNameCharacters); ?>
						<label for="lastname">Last name</label>
						<input type="text" id="lastname" name="lastname" value="<?php getInputValue('lastname') ?>" 
						placeholder="Herinkton" required>
					</p>

					<p>
						<?php echo $account->getError(Constants::$usernameCharacters); ?>
						<?php echo $account->getError(Constants::$usernameTaken); ?>
						<label for="username">Username</label>
						<input type="text" id="username" name="username" value="<?php getInputValue('username') ?>"
						placeholder="Pozzier" required>
					</p>

					<p>
						<?php echo $account->getError(Constants::$emailInvalid); ?>
						<?php echo $account->getError(Constants::$emailTaken); ?>
						<label for="email">Email</label>
						<input type="email" id="email" name="email" value="<?php getInputValue('email') ?>" placeholder="derik1932@gmail.com" required>
					</p>

					<p>
						<?php echo $account->getError(Constants::$passwordsDoNoMatch); ?>
						<?php echo $account->getError(Constants::$passwordNotAlphanumeric); ?>
						<?php echo $account->getError(Constants::$passwordCharacters); ?>
						<label for="password">Password</label>
						<input type="password" id="password" name="password" placeholder="Your password" required>
					</p>

					<p>
						<label for="password2">Confirm Password</label>
						<input type="password" id="password2" name="password2" placeholder="Repeat your password" required>
					</p>

					<button type="submit" name="registerButton">Sign Up</button>
					<div class="hasAccountText">
						<span id="hideRegister">
							Already have an account? Log in here.
						</span>
					</div>

				</form>
			</div>
		</div>
	</div>
</body>
</html>