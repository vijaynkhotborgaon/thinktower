<?php
require_once('../config.php');
session_start();
//Check whether the session variable SESS_MEMBER_ID is present or not
if(isset($_SESSION['SESS_ADMIN']) || (trim($_SESSION['SESS_ADMIN']) != '') ) {
header("location: index.php");
exit();
}
?>




<!DOCTYPE html>
<html lang="en-gb" dir="ltr"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Admin Dashboard</title>
<!--<link rel="stylesheet" href="../css/css-be258.css" type="text/css">-->
<script src="../js/jquery-1.8.3.js" type="text/javascript"></script>
<script src="../js/jquery.validate.js" type="text/javascript"></script>
<script src="../js/jquery.validation.functions.js" type="text/javascript"></script>
<script type="text/javascript">
jQuery(function(){
jQuery("#username").validate({
expression: "if (VAL) return true; else return false;",
message: "<b style='color:red;'>Enter Username</b>"
});
jQuery("#password").validate({
expression: "if (VAL) return true; else return false;",
message: "<b style='color:red;'>Enter password</b>"
});
});
</script>

<head>
<style>
body {
    background: url('../images/images.jpe') no-repeat fixed center center;
    background-size: cover;
    font-family: Montserrat;
}

.logo {
    width: 213px;
    height: 36px;
    background: url('../images/imageedit_6_7284757439.png') no-repeat;
    margin: 20px auto;
	margin-top:100px;
}

.login-block {
    width: 320px;
    padding: 20px;
    background: #BDBDBD;
    border-radius: 5px;
    border-top: 5px solid #1a2732;
    margin: 5px auto;
}

.login-block h1 {
    text-align: center;
    color: #000;
    font-size: 18px;
    text-transform: uppercase;
    margin-top: 0;
    margin-bottom: 20px;
}

.login-block input {
    width: 100%;
    height: 42px;
    box-sizing: border-box;
    border-radius: 5px;
    border: 1px solid #ccc;
    margin-bottom: 20px;
    font-size: 14px;
    font-family: Montserrat;
    padding: 0 20px 0 50px;
    outline: none;
}

.login-block input#username {
    background: #fff url('http://i.imgur.com/u0XmBmv.png') 20px top no-repeat;
    background-size: 16px 80px;
}

.login-block input#username:focus {
    background: #fff url('http://i.imgur.com/u0XmBmv.png') 20px bottom no-repeat;
    background-size: 16px 80px;
}

.login-block input#password {
    background: #fff url('http://i.imgur.com/Qf83FTt.png') 20px top no-repeat;
    background-size: 16px 80px;
}

.login-block input#password:focus {
    background: #fff url('http://i.imgur.com/Qf83FTt.png') 20px bottom no-repeat;
    background-size: 16px 80px;
}

.login-block input:active, .login-block input:focus {
    border: 1px solid #ff656c;
}

.login-block button {
    width: 100%;
    height: 40px;
    background:#1a2732;
    box-sizing: border-box;
    border-radius: 5px;
    border: 1px solid #1a2732;
    color: #fff;
    font-weight: bold;
    text-transform: uppercase;
    font-size: 14px;
    font-family: Montserrat;
    outline: none;
    cursor: pointer;
}

.login-block button:hover {
    background: #394a59;
}

</style>



</head>
<div class="logo"></div>


<div class="login-block">
<p>Username : admin</p>
<p>Password : abc123</p>
</div>

<div class="login-block">
<h1>Admin</h1>
	
	<?php
if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
foreach($_SESSION['ERRMSG_ARR'] as $msg) { ?>
<div id="system-message">

<?php
echo "<p id='error_msg' style='color:red;'>",$msg,"</p>"; 
}
?>
</div>

<?php
unset($_SESSION['ERRMSG_ARR']);
}
?>
	<form action="loginprocess.php" method="post" >
    <input type="text" name="username" id="username" value="" class="username" placeholder="Username" style="margin-bottom:10px;margin-top:10px;"/>
    <input type="password" name="password" id="password" value="" class="password" placeholder="Password" style="margin-bottom:10px;margin-top:10px;"/>
    <button type="submit" style="margin-bottom:10px;margin-top:10px;">Submit</button>
	
	</form>
</div>

</html>