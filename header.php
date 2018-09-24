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

	
	<div class="mainContainer">
		
		<div id="topContainer">
			
		<?php include("includes/navBarContainer.php"); ?>
		
		<div id="mainViewContainer">
			<div id="mainContent">