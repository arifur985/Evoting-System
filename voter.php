
<html>
	    <head>
		<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
		<link href="css/bootstrap.min.css" rel="stylesheet">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title></title>

        <!-- Bootstrap Core CSS -->
        <link href="../css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="../css/metisMenu.min.css" rel="stylesheet">

        <!-- Timeline CSS -->
        <link href="../css/timeline.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="../css/startmin.css" rel="stylesheet">

        <!-- Morris Charts CSS -->
        <link href="../css/morris.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
	
	
	
	
	
	
    <body style="background:#FF8D1B">
	
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
		echo "<script> alert('wrong sign in details');window.location='index.html'</script>";
	}

?>
	
	
    <section id="page">
        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="navbar-header">
                    <h3>your details</h3>
                </div>
		</div><br><br>
	<table border="1" class="table table-hover">                     
    <div>
        <thead>
            <tr style="font-family: Lucida Calligraphy">
              <th>ID NUMBER</th>
              <th>FIRST NAME</th>
              <th>MIDDLE NAME</th>
              <th>LAST NAME</th>
               <th>COUNTY</th>
               <th>PASSWfghjORD</th>
               <th>D.O.B</th>
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
