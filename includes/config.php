<?php
ob_start();

$timezone = date_default_timezone_set("Europe/Kiev");

$con = mysqli_connect("localhost", "root", "", "musc_app");//musc_app RIGHT )

if(mysqli_connect_errno()) {
	echo "Failed to connect".mysqli_connect_errno();
}