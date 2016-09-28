<?php

	//Start session

	require_once('auth.php');

	//Unset the variables stored in session

	unset($_SESSION['SESS_USER_ID']);
	
	header("location: index.php");

?>

