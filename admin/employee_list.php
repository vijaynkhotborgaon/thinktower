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
    <link rel="stylesheet" href="../css/css-be258.css" type="text/css">

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

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
			


<div id="content"><!-- TemplateBeginEditable name="edit1" -->

<?php

	if(isset($_SESSION['delete_emp']) && $_SESSION['delete_emp']==1 ) {

?>

  <div id="system-message">

							<div class="alert alert-success">

<p id="update_success">Employee Record deleted successfully.</p>

       									</div>

					</div>	

<?php

		unset($_SESSION['delete_emp']);

	}

?>
<article>
<form >

<h4 style="float:left;"><strong>Employee Lists</strong></h4><span style="float:right;"><a href="create_user.php" title="Create Employee"><img src="img/user_add.png" alt="Add Employee" /></a></span>

<table class="table">

<tbody>

<tr>

</tr>


<tr style="text-align: center;">

<td><strong>S. No.</strong></td>

<td><strong>Name</strong></td>

<td><strong>Mobile</strong></td>

<td><strong>Email ID</strong></td>

<td><strong>Registration ID</strong></td>

<td><strong>Photo</strong></td>

<td><strong>Resume</strong></td>

</tr>

<?php

$result = mysql_query("SELECT * FROM t_employee");

  $i=1;

while($row = mysql_fetch_array($result))

  { 

?>

<tr style="text-align: center;">

<td><?php echo $i++;?></td>


<td><?php echo $row['Name'];?></td>


<td><?php echo $row['Mobile']; ?></td>


<td><?php echo $row['Email']; ?></td>

<td><?php echo $row['Registration_ID']; ?></td>
<?php
if($row['Photo']=='')
			{?>
			<td><img src="../employee/img/Blue.png" class="img-circle" alt="user image" width="50" height="50" style="margin:5px;" ></td>
			<?php
			}
			else
			{
			?>

<td><img src="../employee/<?php echo $row['Photo'];?>" class="img-circle"  width="50" height="50" ></td>
<?php
}
?>

<?php
if($row['Resume']=='')
			{?>
			<td style="color:red;">Resume not Uploaded by User</td>
			<?php
			}
			else
			{
			?>

<td><a href="../employee/<?php echo $row['Resume'];?>" class="btn btn-info" role="button">Download Resume</a></td>

<?php
}
?>

</tr>

<?php    } ?>

</tbody>

</table>

</article>
</form>

</div>

          </section>
      </section>
      <!--main content end-->
  </section>
  <!-- container section start -->


  </script>

  </body>
</html>
