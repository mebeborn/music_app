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





if(isset($_POST['registerButton'])) {
	//Register button was pressed

	$fn = cleanFormText($_POST['firstname']);
	$ln = cleanFormText($_POST['lastname']);
	$un = cleanFormString($_POST['username']);
	$pw = cleanFormPassword($_POST['password']);
	$pw2 = cleanFormPassword($_POST['password2']);
	$em = cleanFormString($_POST['email']);

	//Account
	$wasSuccessful = $account->register($fn, $ln, $un, $pw, $pw2, $em);


	if($wasSuccessful) {
		$_SESSION['userLoggedIn'] = $username;
		header("Location: index.php");
	}
	
}



?>
