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

$err_string = "";

@session_start();

@ob_start();
if (isset($_POST["act"])) {
    $userlevel = 0;

    $sql = "";
$sql .= "  SELECT `studid` , `password` , `leve` , `leve` FROM `students`\n";
    $sql .= " WHERE ";
    $sql .= " `studid` = '".qsrequest("User"). "'" ;
    $sql .= " AND `password` = '" .qsrequest("Password"). "'";
if(!$result = @mysql_query($sql)){
    $err_string .= "<strong>Error:</strong> while connecting to database<br>" . mysql_error();
}else{
    $num_rows = mysql_num_rows($result);
    $row = mysql_fetch_array($result);
}
if ($err_string != "") {
    print "<Center><Table Border=\"0\" Cellspacing=\"1\" bgcolor=\"#CCCCCC\" >";
    print "<tr>";
    print "<td height=\"80\" align=\"Default\" bgcolor=\"#FFFFFF\">";
    print "<font color=\"#000099\" size=\"2\">";
    print $err_string;
    print "</font>";
    print "</td>";
    print "</tr>";
    print "</Table></Center>";
    exit;
}
    if ($num_rows >0) {
        $userlevel = $row[2];
    }
    if ($result > 0) {mysql_free_result($result);}

    if ($userlevel > 0) {
        $_SESSION["Admin_Logon"] = "TRUE";
        $_SESSION["Admin_UserLogon"] = qsrequest("User");
        $_SESSION["Admin_UserLevel"] = $userlevel;
        $RedirectURL = qssession("Admin_RedirectURL");
        if ($RedirectURL == "") {
          $RedirectURL = "./category.php";
        }
        if (qssession("firstredirecturl") == "") {
          $_SESSION["firstredirecturl"] = $RedirectURL;
        }
        header ("Location: $RedirectURL");

        @ob_end_flush();
        exit;
    } else {
        $err_string = "Login failed";
    }

} else{
    if ((qssession("Admin_UserLogon") != "") && (qssession("Admin_Logon") == "FALSE")) {
        $err_string = "Permission failed";
    }
}
?>


<script type="text/javascript" src="PHP/js/yahoo-min.js" ></script>
<script type="text/javascript" src="PHP/js/dom-min.js" ></script>
<script type="text/javascript" src="PHP/js/event-min.js" ></script>

<script type="text/javascript">

   YAHOO.util.Event.onDOMReady( function() { qsPageOnLoadController(); } );  

</script>


	<link rel="stylesheet" type="text/css" href="PHP/css/ContentLayout.css"></link>


<script type="text/javascript">

var qsPageItemsCount = 3
var _Studid                                   = 0;
var _Password                                 = 1;
var _Leve                                     = 2;

// Declare Fields Prompts
var fieldPrompts = [];
fieldPrompts[_Studid] = "Studid";
fieldPrompts[_Password] = "Password";
fieldPrompts[_Leve] = "Leve";

// Declare Fields Technical Names
var fieldTechNames = [];
fieldTechNames[_Studid] = "Studid";
fieldTechNames[_Password] = "Password";
fieldTechNames[_Leve] = "Leve";

// This function dynamically assigns element 'ID' attributes to all relevant elements
function qsAssignElementIDs() {

  // STEP 1: Assign an ID to all field PROMPTS (TD captions)
  // Scan all table TD tags for those that match field prompts
  var TDs = document.getElementsByTagName("td");
  for (var i=0; i < TDs.length; i++) {
    var element = TDs[i];
    // Check if the TD found is one of the Page Items header
    // This can only be an approximation as some TDs other than the actual field prompts
    // may contain the same caption. In that case all TDs found will carry the same ID.
    if (element.className == "ThRows" || element.className == "TrOdd") {
      for (var f=0; f < qsPageItemsCount; f++) {
        if (element.innerHTML == fieldPrompts[f]) {
            element.id = fieldTechNames[f] + "_caption_cell";
          element.innerHTML = "<div id='" + fieldTechNames[f] + "_caption_div'>" + element.innerHTML + "</div>";
        }
      }
    }
  }

  // STEP 2: Assign an ID to all Input controls on the form
  document.getElementsByName("4")[0].id = fieldTechNames[_Studid];
  document.getElementsByName("5")[0].id = fieldTechNames[_Password];
}

function qsPageItemsAbstraction() {
  qs_form                                  = document.getElementsByName("qs_login_form")[0];   //Define Form Object by Name.



}

</script>



<script type="text/javascript">

// This function dynamically assigns custom events
// to page item controls on this page
function qsAssignPageItemEvents() {
}

</script>





<link href="admin/candidate.css" rel="stylesheet" type="text/css">

</style>
 
<script>

function usrEvent__Login_To_Admin__onload() { }
function usrEvent__Login_To_Admin__onunload() { }
function usrEvent__Login_To_Admin__onresize() { }

// This function controls the OnUnload event dispatching
function qsPageOnUnloadController() { }

// This function controls the OnResize event dispatching
function qsPageOnResizeController() {   
   var lastResult = false                              
   return true;                                        
}                                                      

// This function controls the OnLoad events dispatching
function qsPageOnLoadController() {   
   var lastResult = false                              

   // Invoke the technical field names abstraction initialization
   qsPageItemsAbstraction();

   // Invoke the Element IDs assignment function
   qsAssignElementIDs();

   // Invoke the Page Items custom events assignments
   qsAssignPageItemEvents();
   // Assign Event Handlers for page-level events
   YAHOO.util.Event.addListener(window, "beforeunload", qsPageOnUnloadController);
   YAHOO.util.Event.addListener(window, "resize", qsPageOnResizeController);
   // Set focus on first enterable page item available
  document.getElementsByName("User")[0].focus(); 
   return true;                                        
}                                                      

function usrEvent__Login_To_Admin__onsubmit(frm) { }
function usrEvent__Login_To_Admin__onreset() { }

// This function controls the OnSubmit event dispatching
function qsFormOnSubmitController(frm) {                 
   var lastResult = false                              
   return true;                                        
}                                                      

// This function controls the OnReset event dispatching
function qsPageOnResetController() {   
   var lastResult = false                              
   return true;                                        
}                                                      


</script>


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

<div id="content">
<div align="left">
<img src="images/logo.jpg" width="20%" height="100px">

</div>
	<div align="left" font="forte">
	<div align="right">
	<a  href="admin/index.php">ADMIN -----></a>
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



<Form name="qs_login_form" method="post" action="user_login.php" onSubmit="return qsFormOnSubmitController(this)"  onReset="return qsPageOnResetController(this)" >

<Table Border="0" Cellpadding="2" Cellspacing="1" BgColor="#D4D4D4">

<?php
$css_class = "\"TrOdd\"";
?>
<tr>
<td colspan="2" class="ThRows">Login To Vote </td>
</tr>
<?php
if ($err_string != "") {
    print "<tr>";
    print "<td class=\"ThRows\"><Strong>Error:</Strong></td>";
    print "<td class=" . $css_class . " align=Default>" . $err_string . "</td>";
    print "</tr>";
}
?>
<tr>
<td class="ThRows">ID No:</td>
<td class="TrOdd" align=Default><input name="User" type="text"></td>
</tr>
<tr>
<td class="ThRows">Password:</td>
<td class="TrOdd" align=Default><input name="Password" type="password"></td>
</tr>
<tr>
<td class="ThRows">&nbsp;</td>
<td class="TrOdd" align=Default>
<input type="hidden" name="act" value="n">
<input name="QS_Submit" type="submit" class="button" value="Submit">
&nbsp;&nbsp;
<A href="index.html" class="button" value="Reset" >REGISTER</A>
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

	<div id="right">
		
	</div>
</div>
<div id="footer">
	<p>Copyright &copy; 2019</p>

</div>
</body>
</html>
