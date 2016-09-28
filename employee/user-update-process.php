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



echo $mobile = clean($_POST['mobile']);

echo $email = clean($_POST['email']);

	
	if($mobile == '') {





		$errmsg_arr[] = 'Enter mobile Name';





		$errflag = true;





	}
	


	if($email == '') {





		$errmsg_arr[] = 'Enter Email ID';





		$errflag = true;





	}








	

		if($errflag) {





		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;





		session_write_close();





		header("location: my_profile.php");





		exit();





	}


	$qry = "UPDATE t_employee SET Mobile='$mobile', Email='$email' WHERE User_id=$uid";





	$result = @mysql_query($qry);

		if($result) {

			$_SESSION['USERUPDATE'] = 1;

			session_write_close();

			header("location: my_profile.php");

			exit();

		}else {

			die("Query failed");


		}





?>

















