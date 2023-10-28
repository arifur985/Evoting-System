<?php
$gottenfirstname=$_POST["fname"];
$gottenmiddlename=$_POST["mname"];
$gottenlastname=$_POST["lname"];
$gottenbday=$_POST["bday"];
$gottencounty=$_POST["county"];
$gottenid=$_POST["id"];
$gottenpassword=$_POST["password"];
$gottenleve=2;


$hostname="localhost";
$username="root";
$password="";
$dbname="voting";
$connection=mysqli_connect($hostname,$username,$password,$dbname);
/*$emailquery="SELECT * FROM citizens WHERE id='$gottenid'";
$results = mysqli_query($connection,$emailquery);
if (mysqli_num_rows($results)>0)
	{
		echo "<script> alert('Sorry, You are not a registered citizen.');window.location='index.html'</script>";
	}
	else
	{*/
		/*the function below connects to the server and takes four variables*/
		$connection=mysqli_connect($hostname,$username,$password,$dbname);
		$sqlQuery="INSERT INTO students(studid,name,course,year,sec,password,leve,sy)VALUES
		('$gottenid','$gottenfirstname','$gottenmiddlename','$gottenlastname','$gottencounty','$gottenpassword','$gottenleve','$gottenbday')
		";
		
		$success=mysqli_query($connection,$sqlQuery)."<br>";
		if ($success)
		{
			echo "<script> alert('Registration Successiful, $gottenfirstname $gottenmiddlename $gottenlastname you are now registered as a voter under Mzalendo E-Voting system, courtesy of Charlaw');window.location='user_login.php'</script>";
		}
		else
		{
			echo "<script> alert('connection to the server failed try again later');window.location='index.php'</script>";
        }
?>