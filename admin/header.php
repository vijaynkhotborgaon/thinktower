<?php


	require_once('../config.php');
	
	require_once('auth.php');

?>
      <header class="header dark-bg" >
            <div class="toggle-nav" >
                <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
            </div>
			
			<a class="logo"><span class="lite">Admin</span></a>

            <div class="top-nav notification-row" >                
                <!-- notificatoin dropdown start-->
                <ul class="nav pull-right top-menu">
                
                    <li class="dropdown">
                        
                        <li>
                                <a href="logout.php"><i class="icon_key_alt"></i> Log Out</a>
                            </li>
                        
                    </li>
                   
                </ul>
                
            </div>
      </header>      
     