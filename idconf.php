<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>|| MZALENDO SYSTEM ||</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
<link href="default.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="../candidate.css">
</head>
<?php
#----get back url page----
  $backurl = "index.php?";
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
	</ul>
</div>
<!--
</div>
<div id="content">
	<div id="left">
    <p align="center" style="text-align:center; color:#F8941D;"><strong>Please confirm your ID Number.<br />
	<form action="voter2.php" method="POST">
	<input type="text" placeholder="confirm id please" size="20" name="id"><br>
	<input type="submit" value="confirm">
	</form>
 </div>
  -->
<div id="content">
<div align="left">
<img src="images/logo.jpg" width="20%" height="100px">

</div>
	<div align="left" font="forte">
	<div align="right">
	</div>
    <A NAME=top></A>
    <table id="QS_Content_Layout_1_Table" align="center">
  <tr id="QS_Content_Layout_1_TopRow">
    <td id="QS_Content_Layout_1_NorthWest">
            <div id="QS_Content_Layout_1_NorthWestDiv">
        </div>
    </td>
    <td id="QS_Content_Layout_1_North">
            <div id="QS_Content_Layout_1_NorthDiv">
        </div>
    </td>
    <td id="QS_Content_Layout_1_NorthEast">
            <div id="QS_Content_Layout_1_NorthEastDiv">

        </div>
    </td>
  </tr>
  <tr id="QS_Content_Layout_1_MiddleRow">
    <td id="QS_Content_Layout_1_West">
            <div id="QS_Content_Layout_1_WestDiv">

        </div>
    </td>
    <td id="QS_Content_Layout_1_Center">
            <div id="QS_Content_Layout_1_CenterDiv">



<Form method="post" action="voter2.php"  >

<Table Border="0" Cellpadding="2" Cellspacing="1" BgColor="#D4D4D4">

<?php
$css_class = "\"TrOdd\"";
?>
<tr>
<td colspan="2" class="ThRows">Pease Confirm Your ID Number</td>
</tr>
<tr>
<td class="ThRows">ID Number:</td>
<td class="TrOdd" align=Default><input name="id" type="text"></td>
</tr>
<tr>
<td class="ThRows">&nbsp;</td>
<td class="TrOdd" align=Default>
<input type="hidden" name="act" value="n">
<input type="submit" class="button" value="Submit">
&nbsp;&nbsp;
<A href="#" class="button" value="Reset" >back</A>
</td>
</tr>
</Table><br>
<A HREF="PHP/admin_password.php"></A>

</Form>
        </div>
    </td>
    <td id="QS_Content_Layout_1_East">
            <div id="QS_Content_Layout_1_EastDiv">
        </div>
    </td>
  </tr>
  <tr id="QS_Content_Layout_1_BottomRow">
    <td id="QS_Content_Layout_1_SouthWest">
            <div id="QS_Content_Layout_1_SouthWestDiv">
        </div>
    </td>
    <td id="QS_Content_Layout_1_South">
            <div id="QS_Content_Layout_1_SouthDiv">
        </div>
    </td>
    <td id="QS_Content_Layout_1_SouthEast">
            <div id="QS_Content_Layout_1_SouthEastDiv">
        </div>
    </td>
  </tr>
</table>
<A NAME=bottom></A>
  </div>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
</div>
<div id="footer">
	<p>Copyright &copy; 2019 Designed by <a href="http://www.charlesmbuvi.com" class="link1">Charles Mbuvi</a></p>
</div>
</body>
</html>
