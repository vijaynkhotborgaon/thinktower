
<?php


	require_once('../config.php');
	
	require_once('auth.php');

?>


<!DOCTYPE html>

<html lang="en">
  <head>
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Admin Dashboard</title>

    <!-- Bootstrap CSS -->    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />    
   
    <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
	<link href="css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
    
	<link rel="stylesheet" href="css/fullcalendar.css">
	<link href="css/widgets.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />
	<link href="css/xcharts.min.css" rel=" stylesheet">	
	<link href="css/jquery-ui-1.10.4.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/css-be258.css" type="text/css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<link rel="shortcut icon" href="img/favicon.png">

    <title>Create User</title>
	
  </head>

  <body>
  <!-- container section start -->
  <section id="container" class="">
     
      <?php include('header.php');?>

     <?php include('side_bar.php');?>
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">            
              <!--overview start-->
			  <div class="row">
				<div class="col-lg-12">
					<!--<h3 class="page-header"><i class="fa fa-laptop"></i> Dashboard</h3>-->
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
						<!--<li><i class="fa fa-laptop"></i>Dashboard</li>	-->								  	
					</ol>
				</div>
			</div>
			
			<?php

	//Array to store validation errors

	$errmsg_arr = array();

	//Validation error flag

	$errflag = false;

	//Function to sanitize values received from the form. Prevents SQL injection

	function clean($str) {

		$str = @trim($str);

		if(get_magic_quotes_gpc()) {

			$str = stripslashes($str);

		}

		return mysql_real_escape_string($str);

	}

	

	//Sanitize the POST values
$reg_code = clean($_POST['reg_code']);

$name = clean($_POST['name']);

$mobile = clean($_POST['mobile']);
$address = clean($_POST['address']);
$email = clean($_POST['email']);


if($reg_code=='')
{

$errmsg_arr[] = 'Please provide Registration ID code';

}




	
if($name == '') {





		$errmsg_arr[] = 'Enter Name';





		$errflag = true;

	}
	
	
	
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





		header("location: create_user.php");





		exit();





	}

	
	
$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
$chars2="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
$rand=substr(str_shuffle($chars),0,20);
$rand2=substr(str_shuffle($chars2),0,20);
$original="user_";
$original2="user_";
$sub=substr($rand,0,6);
$sub2=substr($rand2,0,6);

$new_str=$original.$sub;
//echo "password : " .$new_str ."</br>";
$name_1 = preg_replace('/\s+/', '', $name);
$new_str2=$original2.$name_1;
//echo "username : " .$new_str2;
$pass_emp=md5($new_str);




$qry1="SELECT COUNT(*) FROM t_employee where Registration_ID='$reg_code'";
$EmpCodeCompare=mysql_result(mysql_query($qry1),0);



if($EmpCodeCompare!=0)
{
	//echo "ExEmployee".$ExEmpCompare. "exists as Ex Employee";
	echo "<p style='color:red;'>Registration ID already exists! Please provide unique Registration ID.</p>";
	$_SESSION['ERRMSG_ARR1'] = 100;
	header("location: create_user.php");

	exit();
}


$qry = "INSERT INTO t_employee(Registration_ID, Name, Mobile,  Email, Username, Password) VALUES('$reg_code','$name','$mobile','$email','$new_str2', '$pass_emp' )";
$result = @mysql_query($qry);


if($result)
{



echo $user_details= "<p><b style='color:green;'>Hi ".$name."</b>,</p><p> You are successfully registered. </p><p><b size='4'><i style='color:green;'>Username and password to log in to User Dashboard: </i><b></p><p>Username : ".$new_str2."</p><p>Password : ".$new_str."</p>";

}

else
{
echo "Query Fail";
}

?>

    
          </section>
      </section>
      <!--main content end-->
  </section>
  

  </body>
</html>
