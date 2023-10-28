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
<div id="content">
	<div id="left">
    <p style="text-align:center; color:#F8941D;"><strong>YOUR DETAILS.<br />

	<?php

$gottenid=$_POST["id"];

$hostname="localhost";
$username="root";
$password="";
$dbname="voting";
$connection=mysqli_connect($hostname,$username,$password,$dbname);

    $query="SELECT * FROM students WHERE studid ='$gottenid'";
    $run=mysqli_query($connection,$query);

    if(mysqli_num_rows($run)>0) 
	{		
		echo "<script> alert(here are your details');window.location='#'  data-section='page' </script>";
	}
	else
	{
		echo "<script> alert('wrong id');window.location='idconf.php'</script>";
	}

?>
	
	
    <section id="page">
        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="navbar-header">
                </div>
		</div><br><br>
	<table border="1" class="table table-hover">                     
    <div align="center">
        <thead>
            <tr style="font-family: Mongolian Baiti">
              <th>___ID Number___</th>
              <th>___First Name___</th>
              <th>___Middle Name___</th>
              <th>___Last Name___ </th>
               <th>___County___ </th>
               <th>___Password___</th>
               <th>___D.O.B___</th>
            </tr>
        </thead>
        <tbody>
<?php

	$hostname="localhost";
	$username="root";
	$password="";
	$dbname="voting";
	$connection=mysqli_connect($hostname,$username,$password,$dbname);

    $query="SELECT * FROM students WHERE studid ='$gottenid'";
    $run=mysqli_query($connection,$query);
	while($row = mysqli_fetch_array($run))
	
        echo 
				'<tr style="font-family: Times New Roman;">
                  <td scope="row" style="border: 1px solid black;">' . $row["studid"]. '</td>
                  <td style="border: 1px solid black;">' . $row["name"] .'</td>
                  <td style="border: 1px solid black;"> '.$row["course"] .'</td>
                  <td style="border: 1px solid black;"> '.$row["year"] .'</td>
                  <td style="border: 1px solid black;"> '.$row["sec"] .'</td>
                  <td style="border: 1px solid black;"> '.$row["password"] .'</td>
                  <td style="border: 1px solid black;"> '.$row["sy"] .'</td>
                </tr>';

    
?>
		 
		</section>
       </tbody>
    </div>
</table>


  </div>
  
</div>
</div>
<div id="footer">
<p>Copyright &copy; 2019</p>

</div>
</body>
</html>