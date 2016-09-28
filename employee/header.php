<?php
require_once('../config.php');
$query="select * from t_employee where User_id=$uid";
$result=mysql_query($query);
$row=mysql_fetch_assoc($result);


?>
	 
      <header class="header dark-bg" style="background-color:;">
            <div class="toggle-nav">
                <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
            </div>
			
			<?php
			
			if($row['Photo']=='')
			{?>
			<img src="img/Blue.png" class="img-circle" alt="user image" width="60" height="60" style="margin:5px;" >
			<?php
			}
			else
			{
			?>
			
			<a href="#" class="pull-left" ><img src="<?php echo $row['Photo'];?>" class="img-circle"  width="60" height="60" style="margin:5px;" ></a>
			<?php
			}
			?>
			
			<a href="upload.php" class="btn btn-info" role="button" style="margin-top:20px;">Upload Image</a>
			
			<a href="upload_resume.php" class="btn btn-info" role="button" style="margin-top:20px;">Upload Resume</a>
			
			<?php if($row['Resume']!='')
			{
			?>
			
			<a href="<?php echo $row['Resume'];?>" class="btn btn-info" role="button" style="margin-top:20px;">Download Resume</a>
			<?php
			}
			?>
           

            <div class="top-nav notification-row" >                
                
                <ul class="nav pull-right top-menu">
                 
                   
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                               
                            </span>
                             
							
							<a href="logout.php"><i class="icon_key_alt"></i> Log Out</a>
							 
                            
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                           
                            <li>
                                <a href="logout.php"><i class="icon_key_alt"></i> Log Out</a>
                            </li>
                        </ul>
                    </li>
                    
                </ul>
             
            </div>
      </header>      
      <!--header end-->