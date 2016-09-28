<?php
	//Start session
	session_start();

	//Check whether the session variable is present or not
	if(!isset($_SESSION['SESS_ADMIN']) || (trim($_SESSION['SESS_ADMIN']) == '') ) {

		header("location: index.php");

		exit();
	}
	

?>