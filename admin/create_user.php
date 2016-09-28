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
    <!--<link href="assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
	<link href="assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />-->
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
   <link rel="stylesheet" href="../css/css-be258.css" type="text/css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

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
					
				</div>
			</div>

			<?php

	if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {

	$i=1;

		?>
		<div class="alert alert-danger">

	<?php

		foreach($_SESSION['ERRMSG_ARR'] as $msg) { ?>

		<strong><?php echo $i++ .".  ". $msg." "; ?></strong> </br>

	<?php

		}

		?>


		</div>

        <?php

		unset($_SESSION['ERRMSG_ARR']);

		}

		?>

		<?php

			if(isset($_SESSION['CAMREGMESG']) && $_SESSION['CAMREGMESG']==1 ) {

		?>

<div class="alert alert-success">
  <strong>New User added successfully</strong>
</div>

<?php

		unset($_SESSION['CAMREGMESG']);


	}

?>

<?php
if(isset($_SESSION['ERRMSG_ARR1']) && $_SESSION['ERRMSG_ARR1']==100 ) {
?>

<div class="alert alert-success">
  <strong>Registration ID already exists! Please provide unique Registration ID.</strong>
</div>

<?php

		unset($_SESSION['ERRMSG_ARR1']);

	}

?>


<?php

	if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {

		foreach($_SESSION['ERRMSG_ARR'] as $msg) { ?>

<?php

			echo '<p id="error_msg">',$msg,'</p>'; 


		}

		?>

        <?php

		unset($_SESSION['ERRMSG_ARR']);

	}

	?>

	<?php

		if(isset($_SESSION['CAMREGMESG']) && $_SESSION['CAMREGMESG']==1 ) {

	?>

	<p id="update_success">New Employee added successfully</p>

	<?php

			unset($_SESSION['CAMREGMESG']);

		}

	?>

<form class="form-horizontal" action="create_user_process.php" method="post" enctype="multipart/form-data" role="form">

	<div class="form-group">
      <label class="control-label col-sm-2" for="email"><strong><h3><b>Create User</b></h3></strong></label>
      
    </div>


	 <div class="form-group">
      <label class="control-label col-sm-2" for="email"><strong>Name</strong></label>
      <div class="col-sm-10">
        <input type="text" class="form-control" placeholder="Name" name="name" id="name" required>
      </div>
    </div>

	<div class="form-group">
      <label class="control-label col-sm-2" for="email"><strong>Mobile</strong></label>
      <div class="col-sm-10">
        <input type="text" class="form-control" placeholder="Mobile" name="mobile" id="mobile" maxlength="10"  pattern="[0-9]{10}"  title="Mobile number should be 10 digits" required>
      </div>
    </div>

	<div class="form-group">
      <label class="control-label col-sm-2" for="email"><strong>Email</strong></label>
      <div class="col-sm-10">
        
		 <input type="text" class="form-control" placeholder="Email" name="email" id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="pattern should be : ABC@example.com" required>
      </div>
    </div>
	
	<div class="form-group">
      <label class="control-label col-sm-2" for="email"><strong>Registration ID</strong></label>
      <div class="col-sm-10">
        <input type="text" class="form-control" placeholder="Registration ID" name="reg_code" id="reg_code" pattern="[a-zA-z]+[a-zA-Z]+[0-9]{5}$" title="The Registration format must be DEPT COUNTRY 5-DIGITS (Ex : ITIND00251)" required>
      </div>
    </div>
	
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        
		 <input type="submit" class="btn btn-info" value="Submit">
      </div>
    </div>
  </form>
    
          </section>
      </section>
      <!--main content end-->
  </section>
  

  </body>
</html>
			      			        


			      			  		</div></div></div></body></html>






        


			      			  		</div></div></div></body></html>