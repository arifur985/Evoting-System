<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>|| VOTING SYSTEM ||</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
<link href="default.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="../candidate.css">
<script type="text/javascript" src="./js/yahoo-min.js" ></script>
<script type="text/javascript" src="./js/dom-min.js" ></script>
<script type="text/javascript" src="./js/event-min.js" ></script>

<script type="text/javascript">

  // Invoke dbQwikSite Page OnLoad controller as soon as the page is ready 
  // This should always happen first, any user custom-code should run after
  YAHOO.util.Event.onDOMReady( function() { qsPageOnLoadController(); } );  

</script>

<!-- END OF STD-Loader.txt -->

<!-- The code section below is extracted from [dbQwikSiteInstallPath\Data\Includes\STD-Loader.txt] file -->   
<!-- This file is included in all generated pages, right after Javascript basic initialization -->   

<!-- You may write JS File Includes, CSS includes or inline JavaScript code as needed. -->   
<!-- This file is included in generated code BEFORE the 'ClientIncludes' Custom Code insertion point. -->

<!-- Add all your customization below -->

	<link rel="stylesheet" type="text/css" href="./css/ContentLayout.css"></link>


<!-- END OF STD-Loader.txt -->


<script type="text/javascript">

// Declares all constants and arrays
// for all page items used on the page

// Declare Field Indexes for all page items
var qsPageItemsCount = 3
var _Username                                 = 0;
var _Password                                 = 1;
var _Leve                                     = 2;

// Declare Fields Prompts
var fieldPrompts = [];
fieldPrompts[_Username] = "Username";
fieldPrompts[_Password] = "Password";
fieldPrompts[_Leve] = "Leve";

// Declare Fields Technical Names
var fieldTechNames = [];
fieldTechNames[_Username] = "Username";
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
  document.getElementsByName("4")[0].id = fieldTechNames[_Username];
  document.getElementsByName("5")[0].id = fieldTechNames[_Password];
}

// This function defines object names for all page items used on the page.
// You can refer to these objects in your JavaScript code and avoid getElementById().
// Entry Fields (when present) are accessible via their technical names.
// The prompts of Entry Fields (when present) are accessible using SomeItemName_Prompt object names.
// 
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




<!-- >> START OF "Login To Admin -> Client Includes" [clientincludes] [PAGEEVENT] [START] [JS] [DF9ADF82-F417-43A2-B171-95A29A082613]-->
<!-- << END OF "Login To Admin -> Client Includes" [clientincludes] [PAGEEVENT] [START] [JS] [DF9ADF82-F417-43A2-B171-95A29A082613]-->




<script>

function usrEvent__Login_To_Admin__onload() {
  // >> START OF "Login To Admin -> On Load" [onload] [PAGEEVENT] [START] [JS] [DF9ADF82-F417-43A2-B171-95A29A082613]
  // << END OF "Login To Admin -> On Load" [onload] [PAGEEVENT] [START] [JS] [DF9ADF82-F417-43A2-B171-95A29A082613]
}



function usrEvent__Login_To_Admin__onunload() {
  // >> START OF "Login To Admin -> On Unload" [onunload] [PAGEEVENT] [START] [JS] [DF9ADF82-F417-43A2-B171-95A29A082613]
  // << END OF "Login To Admin -> On Unload" [onunload] [PAGEEVENT] [START] [JS] [DF9ADF82-F417-43A2-B171-95A29A082613]
}



function usrEvent__Login_To_Admin__onresize() {
  // >> START OF "Login To Admin -> On Resize" [onresize] [PAGEEVENT] [START] [JS] [DF9ADF82-F417-43A2-B171-95A29A082613]
  // << END OF "Login To Admin -> On Resize" [onresize] [PAGEEVENT] [START] [JS] [DF9ADF82-F417-43A2-B171-95A29A082613]
}



// This function controls the OnUnload event dispatching
function qsPageOnUnloadController() {   
}



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






function usrEvent__Login_To_Admin__onsubmit(frm) {
  // >> START OF "Login To Admin -> On Submit" [onsubmit] [PAGEEVENT] [START] [JS] [DF9ADF82-F417-43A2-B171-95A29A082613]
  // << END OF "Login To Admin -> On Submit" [onsubmit] [PAGEEVENT] [START] [JS] [DF9ADF82-F417-43A2-B171-95A29A082613]
}



function usrEvent__Login_To_Admin__onreset() {
  // >> START OF "Login To Admin -> On Reset" [onreset] [PAGEEVENT] [START] [JS] [DF9ADF82-F417-43A2-B171-95A29A082613]
  // << END OF "Login To Admin -> On Reset" [onreset] [PAGEEVENT] [START] [JS] [DF9ADF82-F417-43A2-B171-95A29A082613]
}



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

</head>
<?php  require('qs_connection.php');
require_once('admin_users.php');
require_once('qs_functions.php');
$err_string = "";
@session_start();
@ob_start();
if (isset($_POST["act"])) {
    $userlevel = 0;
// >> START OF "before check user login" [SECCHK004] [PRE] [START] [SRV] [DF9ADF82-F417-43A2-B171-95A29A082613] [Login To Admin]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before check user login" [SECCHK004] [PRE] [STOP] [SRV] [DF9ADF82-F417-43A2-B171-95A29A082613] [Login To Admin]
    $sql = "";
$sql .= "  SELECT `username` , `password` , `leve` , `leve` FROM `admin`\n";
    $sql .= " WHERE ";
    $sql .= " `username` = '".qsrequest("User"). "'" ;
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
// >> START OF "after check user login" [SECCHK004] [POST] [START] [SRV] [DF9ADF82-F417-43A2-B171-95A29A082613] [Login To Admin]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after check user login" [SECCHK004] [POST] [STOP] [SRV] [DF9ADF82-F417-43A2-B171-95A29A082613] [Login To Admin]
// >> START OF "before check secure level" [SECCHK003] [PRE] [START] [SRV] [DF9ADF82-F417-43A2-B171-95A29A082613] [Login To Admin]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before check secure level" [SECCHK003] [PRE] [STOP] [SRV] [DF9ADF82-F417-43A2-B171-95A29A082613] [Login To Admin]
    if ($userlevel > 0) {
        $_SESSION["Admin_Logon"] = "TRUE";
        $_SESSION["Admin_UserLogon"] = qsrequest("User");
        $_SESSION["Admin_UserLevel"] = $userlevel;
        $RedirectURL = qssession("Admin_RedirectURL");
        if ($RedirectURL == "") {
          $RedirectURL = "./fresult.php";
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

<body>
<div id="header">
</div>
<div id="menu" align="center">
  <ul>
    <li><a href="index.php">|  Home  |</a></li>
		<li><a href="user_login.php">|  Voting  |</a></li>
		<li><a href="result.php">|  Result  |</a></li>
		<li><a href="admin/index.php">|  Backend  |</a></li>
		<li><a href="contact.php">|  Contact Us  |</a></li>
  </ul>
</div>
<p style="text-align:center; color:#60B7DE;"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><strong>Please 
  enter corrent username and password to login</strong></font></p>
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
</div>
<Form name="qs_login_form" method="post" action="fresult.php" onSubmit="return qsFormOnSubmitController(this)"  onReset="return qsPageOnResetController(this)" >

<Table Border="0" Cellpadding="2" Cellspacing="1" BgColor="#FFFFFF" align="center">

<?php
$css_class = "\"TrOdd\"";
?>
<tr>
<td colspan="2" class="ThRows">&nbsp;</td>
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
<td class="ThRows"><strong>Username:</strong></td>
<td class="TrOdd" align=Default><input name="User" type="text" ></td>
</tr>
<tr>
<td class="ThRows"><strong>Password</strong>:</td>
<td class="TrOdd" align=Default><input name="Password" type="password" ></td>
</tr>
<tr>
<td class="ThRows">&nbsp;</td>
<td class="TrOdd" align=Default>
<input type="hidden" name="act" value="n">
<input name="QS_Submit" type="submit" class="button" value="Submit">&nbsp;&nbsp;
<input name="Reset" type="reset" class="button" value="Reset">
</td>
</tr>
</Table><br>
<A HREF="admin_password.php"></A>
<td id="QS_Content_Layout_1_East">
    <div id="QS_Content_Layout_1_EastDiv">

    </div>
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
  <A NAME=bottom></A></form>
<div id="footer">
  <p>Copyright &copy; 2019</p>

</div>
</body>
</html>
