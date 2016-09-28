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

<div class="alert alert-success">
    <strong>Updated User Details Successfully</strong>
  </div>

<?php

		unset($_SESSION['USERUPDATE']);


	}

?>



<?php

$result = mysql_query("SELECT * FROM t_employee WHERE User_id='$uid'");
$row = mysql_fetch_assoc($result);
?>

<div style="padding:10px;margin:10px;float:right;background:black;color:white;">
<p>Registration ID : <?php echo $row['Registration_ID']; ?></p>
</div>


<div class="table-responsive">

<table class="table">
<tbody>
<tr>

<td colspan="2"><h4><strong>Profile Details</strong></h4></td>
</tr>

<tr >

<td><strong>Registration ID</strong></td>
<td><?php echo $row['Registration_ID']; ?></td>
</tr>


<tr>
<td><strong>Name</strong></td>

<td><?php echo $row['Name']; ?></td>

</tr>

<form class="form-horizontal" action="user-update-process.php" method="post" enctype="multipart/form-data" role="form">

<tr>
<td><strong>Mobile</strong></td>

<td> <input type="text" class="form-control" placeholder="Mobile" name="mobile" id="mobile" value="<?php echo $row['Mobile']; ?>" required></td>


</tr>


<tr>


<td><strong>Email ID</strong></td>

<td><input type="text" class="form-control" placeholder="Email" name="email" id="email" value="<?php echo $row['Email']; ?>" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="pattern should be : ABC@example.com" required></td>

</tr>


<tr>
<td>

<div class="form-group">        
     
        
		 <input type="submit" class="btn btn-info" value="Update">
      </div>
   
  </form>
  
  </td>
  
  </tr>

</tbody>

</table>

</div>

          </section>
      </section>
      <!--main content end-->
  </section>
  

  </body>
</html>
