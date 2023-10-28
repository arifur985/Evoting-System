<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>|| VOTING SYSTEM ||</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
<link href="default.css" rel="stylesheet" type="text/css" />
</head>
<?php
 
require('qs_connection.php');
require_once('admin_users.php');
require_once('qs_functions.php');
$
$err_string = "";

@session_start();
$_SESSION["Admin_UserLogon"] = ""
?>

<body>
<div id="header"></div>
<div id="menu" align="center">
	<ul>
		<li><a href="index.php">|  Home  |</a></li>
		<li><a href="user_login.php">|  Voting  |</a></li>
		<li><a href="result.php">|  Result  |</a></li>
		<li><a href="admin/index.php" >|  Backend  |</a></li>
		<li><a href="contact.php">|  Contact Us  |</a></li>
	</ul>
</div>
<div id="content">
	<div id="left">
    <p style="text-align:center; color:#60B7DE;"><strong>MZALENDO E-VOTING SYSTEM<strong></p>
    
</div>
   <th height="41" colspan="2" scope="col"><h1><center>To Start Voting <a href="user_login.php">Click Here</a></center></strong></h1></th>
	<p>&nbsp;</p>
</div>
</div>

<div id="footer">
<div align="right">
<img src="images/rex.jpg">
</div>
	<p>Copyright &copy; 2019</p>

</div>

</body>
</html>
