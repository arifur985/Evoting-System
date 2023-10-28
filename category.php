<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>|| VOTINGSYSTEM ||</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
<link href="default.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style1 {color: #0000CC}
.style2 {
	font-size: 24pt;
	color: #FFCC66;
	font-weight: bold;
}
.style3 {
	color: #FFCC66;
	font-size: 16pt;
}
-->
</style>
</head>
<?php

require('connect.php');
require('functions.php');
@session_start();

if($_SESSION["Admin_UserLogon"] == ""){
		$admin="<meta http-equiv=\"Refresh\" content=\"0;url=./index.php\">";
		echo($admin); 
}else{

$stud = mysql_query("select * from students where studid = '".$_SESSION["Admin_UserLogon"]."' group by studid");
$s = mysql_fetch_array($stud);

?>
<body>
<div id="header">
	
</div>
<div id="menu" align="center">
	<ul>
		<li><a href="index.php">|  Home  |</a></li>
		<li><a href="user_login.php">|  Voting  |</a></li>
		<li><a href="result.php">|  Result  |</a></li>
		<li><a href="admin/index.php" >|  Backend  |</a></li>
		<li><a href="contact.php">|  Contact Us  |</a></li>
		<li><a href="idconf.php">|  My Details  |</a></li>
	</ul>
</div>
<div id="content">
	<div id="left">
    
    <table width="650" border="0" align="center">
  
  <tr>
    <th width="128" align="left" scope="col">&nbsp;</th>
    <th height="41" colspan="2" align="left" scope="col"><span class="style1"><u>HERE ARE THE VOTING CATEGORIES</u></span> </th>
  </tr>
 <?php 
  $vote = mysql_query("SELECT position, IDNo FROM position order by IDNo");
		while($me = mysql_fetch_array($vote))
		{
			$voto = mysql_query("SELECT * FROM votecount where StudID='".$_SESSION["Admin_UserLogon"]."' AND Position = '".$me['position']."'");		
			$me2 = mysql_fetch_array($voto);
  ?>
 
  <tr>
    <th scope="col">&nbsp;</th>
    <th width="102" scope="col">&nbsp;</th>
    <th width="601" height="41" align="left" scope="col">
	<?php 
		
		if(mysql_num_rows($voto)> 0  || $me2['Result'] !=0) {
		$_SESSION[$me['position']] = $me2['Result']; 
		echo "You have already voted for the ", $me['position'];
		
		} else {
		?>
      <a href="votepage.php?cat=<?php echo  $me['position']; ?>"><?php echo "Please click here to vote for the ", $me['position']; ?></a><br>
	  <?php 
	 $_SESSION[$me['position']] = $me2['Result']; 
	  }
	  ?>	</th>
  </tr>
   <?php
  
  
}
   ?>

 
</table>
  </div>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
</div>
</div>
<div id="footer">
	<p>Copyright &copy; 2019</p>

</div>
</body>
</html>
<?php
}
?>