	<?php
	// Start the session
	session_start();
	require 'db.inc.php';
	?>
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>Stich Clothing</title>
	<meta charset="utf-8" />
	<meta name="viewpoint" content="width=device-width,initial-scal=1.0">
	<meta http-equip="X-UA-compatible" content="ie=edge">
	<link rel="stylesheet" href="style.css" media="screen" type="text/css" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
	<script type="text/javascript" src="jquery.store.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	</head>
	
	<body>
	<section id="nav-bar">
			<nav class="navbar navbar-expand-lg navbar-light">
			<?php include 'menu.php';?>
			</nav>
			</section>
	<section id="info">		
	<?php
	$ifsc=$_POST['ifsc'];
	$dbno=$_POST['dbno'];
	$edt=$_POST['edt'];
	$cvv=$_POST['cvv'];
	$orderid=$_REQUEST['orderid'];
	// Create connection
	$conn = mysqli_connect(MYSQL_HOST, MYSQL_USER, MYSQL_PASSWORD, MYSQL_DB);
	 
	if($conn === false){
		die("ERROR: Could not connect. "
					. mysqli_connect_error());
	}
	
	
	#echo "Connected successfully";
	
	$query = 'SELECT max(paymentId) as id FROM payment';
	$id_get = mysqli_query($conn,$query);
	
	$id = mysqli_fetch_array($id_get);
	
	$uid = $id['id'];
	
	$uid=$uid+1;
	
	$sql = "INSERT INTO `payment`(`paymentId`, `orderid`, `ifsccode`, `debitcardno`, `expirydate`, `cvv`) VALUES ".
		   "('$uid','$orderid','$ifsc','$dbno','$edt','$cvv')";
		   
	?>
	<div class="container">
			
			<div class="row">
			  <div class="col-md-12">
			   
			 
	<?php	   
	if (mysqli_query($conn, $sql)) {
	   echo "<div align=\"center\">Payment Done successfully</div>";
	} else {
		echo "<div align=\"center\">Error: " . $sql . "<br>" . mysqli_error($conn)."</div>";
	}
	
	#echo "<div align=\"center\"><strong><a href=\"order.php?orderid=".$orderid."\">  Back</a></strong></div>";
	?>
	<ul id="shopping-cart-actions">
					
		<li>
			<input type="submit" id="btnpayment" class="btn" value="Home"/>
		</li>
					
	</ul>
	 </div>
			</div>
	</div>
	<section>
	<footer id="site-info">
			Copyright &copy; 
		</footer>
	</body>
	</html>
