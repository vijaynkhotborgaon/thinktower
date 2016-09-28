<?php
	//Start session
	session_start();

	//Check whether the session variable is present or not

	if(!isset($_SESSION['SESS_USER_ID']) || (trim($_SESSION['SESS_USER_ID']) == '') ) {

		header("location: index.php");

		exit();
	}
	$uid = $_SESSION['SESS_USER_ID'];
	


?>