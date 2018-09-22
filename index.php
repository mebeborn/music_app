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
	<link rel="stylesheet" href="assets/css/indexx.css">
</head>
<body>

	
	<div class="mainContainer">
		
		<div id="topContainer">
			
		<?php include("includes/navBarContainer.php"); ?>
		
		</div>
	
		<?php include("includes/nowPlayingBarContainer.php"); ?>

	</div>
</body>
</html>