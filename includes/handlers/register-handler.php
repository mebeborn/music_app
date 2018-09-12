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

	$firstname = cleanFormText($_POST['firstname']);
	$lastname = cleanFormText($_POST['lastname']);

	$username = cleanFormString($_POST['username']);

	$password = cleanFormPassword($_POST['password']);
	$password2 = cleanFormPassword($_POST['password2']);

	$email = cleanFormString($_POST['email']);
}

?>
