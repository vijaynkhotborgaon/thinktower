<?php

	session_start();
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

	if(isset($_SESSION['invalid']) && $_SESSION['invalid']==1 ) {

?>



<p id="update_success" style="color:red;">Invalid File</p>

<?php

		unset($_SESSION['invalid']);


	}

?>

<?php

	if(isset($_SESSION['large_file']) && $_SESSION['large_file']==1 ) {

?>



<p id="update_success" style="color:red;">file exceeds it's size</p>

<?php

		unset($_SESSION['large_file']);


	}

?>

<?php

	if(isset($_SESSION['exist']) && $_SESSION['exist']==1 ) {

?>


<p id="update_success" style="color:red;">File Already Exist</p>


<?php

		unset($_SESSION['exist']);

	}

?>

<?php

	if(isset($_SESSION['uploaded_success']) && $_SESSION['uploaded_success']==1 ) {

?>


<p id="update_success" style="color:green;">Image Uploaded Successfully</p>

<?php

		unset($_SESSION['uploaded_success']);

	}

?>

<h3><strong>Upload Your Image</strong></h3>	
<p><b><span style="color:red;">*</span> Only 'jpeg' , 'png' , 'jpg' allowed.</b><p>	
<p><b><span style="color:red;">*</span> Image should be less than 1MB.</b><p>	
</br>	
			
<form action="upload_process.php" method="POST" enctype="multipart/form-data">
<input type="file" name="file" required>
<br>
<input type="submit" value="upload" name="submit">
	
		

          </section>
      </section>
      <!--main content end-->
  </section>
  <!-- container section start -->



  </script>

  </body>
</html>
