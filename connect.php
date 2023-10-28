<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "voting";


$link = mysql_connect("localhost", "root", "")

        or die("Could not connect");

$db = mysql_select_db($dbname, $link)
		or die("Could not select database");

?>
