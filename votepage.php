<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>|| MZALENDO SYSTEM ||</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
<link href="default.css" rel="stylesheet" type="text/css" />
</head>
<?php 
require('connect.php');
require('functions.php');
@session_start();
if($_SESSION["Admin_UserLogon"] == ""){
		$admin="<meta http-equiv=\"Refresh\" content=\"0;url=./index.php\">";
		echo($admin); 
}else{

$vote = mysql_query("SELECT * FROM position Where position ='".$_GET['cat']."' order by IDNo");
$rj=mysql_fetch_array($vote);

//			echo $_SESSION[$rj['position']];
		if ($_SESSION[$rj['position']] == 1)
		{
		$category = "";
		$admin="<meta http-equiv=\"Refresh\" content=\"0;url=./category.php\">";
		echo($admin); 
		} else {
		$category = $_GET['cat'];
		$button = "<input name=\"vote\" type=\"submit\" id=\"vote\" value=\"VOTE\" class=\"button\">";
		} 

	/*}else {
$admin="<meta http-equiv=\"Refresh\" content=\"0;url=./index.php\">";
echo($admin); 
}*/
	
?>
<style type="text/css">
<!--
.style2 {color: #990000}
.style3 {	font-size: 24pt;
	color: #FFCC66;
	font-weight: bold;
}
.style3 {	color: #FFCC66;
	font-size: 16pt;
}
.style7 {color: #FFCC66; font-size: 25pt; font-weight: bold; }
-->
</style>
<script type="text/JavaScript">
<!--
function MM_goToURL() { //v3.0
  var i, args=MM_goToURL.arguments; document.MM_returnValue = false;
  for (i=0; i<(args.length-1); i+=2) eval(args[i]+".location='"+args[i+1]+"'");
}
//-->
</script>

<script type="text/javascript">
<!--
//initial checkCount of zero
var checkCount=0

//maximum number of allowed checked boxes
var maxChecks=<?php echo $rj['Limit']?>

function setChecks(obj){
//increment/decrement checkCount
if(obj.checked){
checkCount=checkCount+1
}else{
checkCount=checkCount-1
}
//if they checked a 4th box, uncheck the box, then decrement checkcount and pop alert
if (checkCount>maxChecks){
obj.checked=false
checkCount=checkCount-1
alert('you may only choose up to '+maxChecks+' options')
}
}
//-->
</script>
</head>

<body>
<div id="header">
	
</div>
<div id="menu" align="center">
	<ul>
		<li><a href="index.php">|  Home  |</a></li>
		<li><a href="user_login.php">|  Voting  |</a></li>
		<li><a href="result.php">|  Result  |</a></li>
		<li><a href="admin/index.php" >|  Login  |</a></li>
		<li><a href="contact.php">|  Contact Us  |</a></li>
	</ul>
</div>
<div id="content">
	<div id="left">
    <?php 
//echo $category;
$q2 = mysql_query("SELECT
candidate.id,
candidate.`position`,
candidate.name,
candidate.platform,
candidate.picture,
candidate.votecount,
candidate.sy
FROM
candidate ,
`position`
WHERE
candidate.`position` =  `position`.`position` 
and candidate.`position` = '$category'
ORDER BY
`position`.`IDNo` ASC");
$p = mysql_num_rows($q2);
$a = $category;

  
?>

	  <table width="423" border="0" align="center">
	    <tr>
	      <th height="61" colspan="4" align="left" nowrap scope="col"><span class="style2"><u><?php echo $category ?></u></span></th>
        </tr>
	    <?php 
  while($r2=mysql_fetch_array($q2))
	{
	
  ?>
	    <form name="vote" method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
	      <tr>
	        <th width="39" align="left" nowrap scope="row">&nbsp;</th>
	        <th width="101" align="left" nowrap scope="row"><img src="admin/pictures/<?php echo $r2['picture'] ?>" width="101" height="84"></th>
	        <th width="263" align="left" valign="top" nowrap>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $r2['platform'] ?></th>
	        <th width="2" align="left" nowrap>&nbsp;</th>
          </tr>
	      <tr>
	        <th colspan="4" align="left" nowrap scope="row" style="border-bottom-style:groove" ><blockquote>
	          <?php 
	  if($rj['Limit']==1)
	  {
	  ?>
	          <input name="candidate[]" type="radio" value="<?php echo $r2['name'] ?>">
	          <?php echo $r2['name'] ?>
	          <input name="total[]" type="hidden" value="<?php echo $r2['votecount'] ?>">
	          </blockquote></th>
          </tr>
	      <?php 
	  } else {
	   ?>
	      <input type="checkbox" name="candidate[]" value="<?php echo $r2['name'] ?>" onClick="setChecks(this)">
	      <?php echo $r2['name']; ?>
	      <input name="total[]" type="hidden" value="<?php echo $r2['votecount'] ?>">
	      <tr>
	        <td><th width="101" align="left" nowrap>&nbsp;</th>
	        <td height="10"><?php
	} 
	}
	  ?>
	          <?php 
//echo   $_SESSION["Admin_UserLogon"];
  echo $r2['name'] ?>
	          
          <tr>
            <th nowrap scope="row"> <input name="cat" type="hidden" class="button" value="<?php echo $category ?>">
              <?php echo $button ?><input name="close" type="submit" class="button" onClick="MM_goToURL('parent','category.php');return document.MM_returnValue" value="QUIT">
	              
        </form>
	    
	    <th colspan="2" nowrap>&nbsp;</th>
	      </tr>
	    <?php 
 		//$t = $_POST['total'] + 1;
		
		if(isset($_POST['vote']))
		{
		
		$can = $_POST['candidate'];
		
		
			//if($_GET['cat'] == "Councilors")
			//{
			
				foreach ($can as $one_can) 
				{  
				$source .= $one_can."";  
				$candidate = substr($source, 0, -2);
			
				$vote1 = mysql_query("update candidate set votecount = votecount + 1 where position = '$_POST[cat]' and name = '".$one_can."'");
				echo $_SESSION["Admin_UserLogon"];
				}
				 if(!$vote1)
					{
					echo "vote not accounted for";
					} else {
					$sqlin = mysql_query("INSERT INTO votecount set Result = '1', studid = '".$_SESSION["Admin_UserLogon"]."', Position='".$_POST['cat']."'");
					$admin="<meta http-equiv=\"Refresh\" content=\"0;url=./category.php\">";
					echo($admin); 
				}	
	
	}
	?>
</table>
</div>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
</div>
</div>
<div id="footer">
	<p>Copyright &copy; 2019 Designed by <a href="http://www.charlesmbuvi.com" class="link1">Charles Mbuvi</a></p>
</div>
</body>
</html>
<?php
}
?>