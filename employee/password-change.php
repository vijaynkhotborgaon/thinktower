<?php 

	require_once('../config.php');


	require_once('auth.php');

	$errmsg_arr = array();

	$errflag = false;

	function clean($str) {

		$str = @trim($str);

		if(get_magic_quotes_gpc()) {

			$str = stripslashes($str);

		}

		return mysql_real_escape_string($str);

	}



$pword = clean($_POST['pword']);


$vpword = clean($_POST['vpword']);




	if($pword == '') {





		$errmsg_arr[] = 'Enter the new password';





		$errflag = true;





	}





	if($vpword == '') {





		$errmsg_arr[] = 'verify new password';





		$errflag = true;





	}

	if( strcmp($pword, $vpword) != 0 ) {

		$errmsg_arr[] = 'Passwords do not match';

		$errflag = true;

	}


		if($errflag) {


		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;





		session_write_close();





		header("location: self-details.php");





		exit();





	}


	$qry = "UPDATE t_employee SET Password='".md5($pword)."' WHERE User_id='$uid'";





	$result = @mysql_query($qry);

		if($result) {





			$_SESSION['PASSCNG'] = 1;





			session_write_close();





			header("location: self-details.php");





			exit();





		}else {





			die("Query failed");





		}





?>

















