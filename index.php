<?php
	include("includes/config.php");

	if (isset($_SESSION['userLoggedIn'])) {
		$userLoggedIn = $_SESSION['userLoggedIn'];
		// session_destroy();
	} else {
		header("Location: register.php");
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Welcome to Music App</title>
	<link rel="stylesheet" href="assets/css/index.css">
</head>
<body>
	<!-- <?php echo"<h1>Hello $userLoggedIn</h1>" ?> -->

	<div id="nowPlayingBarContainer">
		<div id="nowPlayingBar">
			<div id="nowPlayingLeft">
				
			</div>
			
			<div id="nowPlayingCenter">
				
			</div>
			
			<div id="nowPlayingRight">
				
			</div>
		</div>
	</div>
</body>
</html>