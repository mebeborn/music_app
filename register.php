<?php

function cleanFormString($inputText) {
	$inputText = strip_tags($inputText);
	$username = str_replace(" ", "" ,$inputText);
	return $inputText;
}

function cleanFormPassword($inputText) {
	$inputText = strip_tags($inputText);
	return $inputText;
}

function cleanFormText($inputText) {
	$inputText = strip_tags($inputText);
	$inputText = str_replace(" ", "" ,$inputText);
	$inputText = ucfirst(strtolower($inputText));
	return $inputText;
}


if(isset($_POST['loginButton'])) {
	//Login button was pressed

	$username = cleanFormString($_POST['username']);
	$password = cleanFormPassword($_POST['password']);
}

if(isset($_POST['registerButton'])) {
	//Register button was pressed

	$firstname = cleanFormText($_POST['firstname']);
	$lastname = cleanFormText($_POST['lastname']);

	$username = cleanFormString($_POST['username']);

	$password = cleanFormPassword($_POST['password']);
	$password2 = cleanFormPassword($_POST['password2']);

	$email = cleanFormString($_POST['email']);
}

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
				<label for="firstname">First name</label>
				<input type="text" id="firstname" name="firstname" required>
			</p>

			<p>
				<label for="lastname">Last name</label>
				<input type="text" id="lastname" name="lastname" required>
			</p>

			<p>
				<label for="username">Username</label>
				<input type="text" id="username" name="username" required>
			</p>

			<p>
				<label for="email">Email</label>
				<input type="email" id="email" name="email" required>
			</p>

			<p>
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