		<?php
		// Start the session
		session_start();
		require 'db.inc.php';
		?>
		<?php 
		  $orderid = $_POST['orderid']; 
		  $sname = $_POST['sname']; 
		  $semail = $_POST['semail'];
		  $scity = $_POST['scity'];
		  $szip = $_POST['szip'];
		  $scountry = $_POST['scountry'];
		  $sadd = $_POST['sadd'];
		 // Create connection
		$conn = mysqli_connect(MYSQL_HOST, MYSQL_USER, MYSQL_PASSWORD, MYSQL_DB);
		 
		if($conn === false){
			die("ERROR: Could not connect. "
						. mysqli_connect_error());
		}
		
		
		#echo "Connected successfully";
		$date = date('Y-m-d H:i:s');
		$sql = "INSERT INTO `shipping`(`orderId`, `name`, `email`, `city`, `address`, `zipcode`, `country`) VALUES".
		       "('$orderid','$sname','$semail','$scity','$sadd','$szip','$scountry')";
		   
		   if (mysqli_query($conn, $sql)) {
	   echo "<div align=\"center\">New Order Shipping Details  Added successfully</div>";
	} else {
		echo "<div align=\"center\">Error: " . $sql . "<br>" . mysqli_error($conn)."</div>";
	}
	echo "<div align=\"center\"><strong><a href=\"index.php\">  Back</a></strong></div>";
		 ?>