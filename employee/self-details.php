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
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />    
    <!-- full calendar css-->
    <link href="assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
	<link href="assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
    <!-- easy pie chart-->
    <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    <!-- owl carousel -->
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
	<link href="css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
    <!-- Custom styles -->
	<link rel="stylesheet" href="css/fullcalendar.css">
	<link href="css/widgets.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />
	<link href="css/xcharts.min.css" rel=" stylesheet">	
	<link href="css/jquery-ui-1.10.4.min.css" rel="stylesheet">
    
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
					
				</div>
			</div>
	
	<article>

											<?php

	if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {


		foreach($_SESSION['ERRMSG_ARR'] as $msg) { ?>

<?php

			echo '<p id="error_msg" style="color:red;">',$msg,'</p>'; 


		}

		?>


        <?php

		unset($_SESSION['ERRMSG_ARR']);

	}

?>

<?php

	if(isset($_SESSION['USERUPDATE']) && $_SESSION['USERUPDATE']==1 ) {
?>

<p id="update_success">Updated Employee Details successfully</p>
<?php

		unset($_SESSION['USERUPDATE']);


	}

?>

<?php

	if(isset($_SESSION['PASSCNG']) && $_SESSION['PASSCNG']==1 ) {

?>



<p id="update_success" style="color:green;">Password Changed successfully</p>


<?php

		unset($_SESSION['PASSCNG']);

	}


?>

<h3><strong>Change Password</strong></h3>	</br>		
			
			

<form class="form-horizontal" action="password-change.php"  method="post" enctype="multipart/form-data" role="form">

<div class="form-group">
      <label class="control-label col-sm-2" for="email"><strong>New Password</strong></label>
      <div class="col-sm-10">
        <input type="password" class="form-control" placeholder="New Password" name="pword" id="pword" required>
      </div>
    </div>

<div class="form-group">
      <label class="control-label col-sm-2" for="email"><strong>Verify New Password</strong></label>
      <div class="col-sm-10">
        <input type="password" class="form-control" placeholder="Verify New Password" name="vpword" id="vpword" required>
      </div>
    </div>


 <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        
		 <input type="submit" class="btn btn-info" value="Change Password" name="submit">
      </div>
    </div>
	


</form>

          </section>
      </section>
      <!--main content end-->
  </section>
  

  </body>
</html>
