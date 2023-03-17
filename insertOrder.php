		<?php
		// Start the session
		session_start();
		require 'db.inc.php';
		?>
		<?php 
		  $orderid = $_POST['orderid']; 
		  $shippingCharge = $_POST['shippingCharge']; 
		  $totalAmt = $_POST['totalAmt'];
		  
		  
		 // Create connection
		$conn = mysqli_connect(MYSQL_HOST, MYSQL_USER, MYSQL_PASSWORD, MYSQL_DB);
		 
		if($conn === false){
			die("ERROR: Could not connect. "
						. mysqli_connect_error());
		}
		
		
		#echo "Connected successfully";
		$date = date('Y-m-d H:i:s');
		$sql = "INSERT INTO `order`(`orderId`, `orderdt`, `shoppingCharge`, `Total`, `createdAt`) VALUES".
		       "('$orderid','$date','$shippingCharge','$totalAmt','$date')";
		   
		   if (mysqli_query($conn, $sql)) {
	   echo "<div align=\"center\">New Order Added successfully</div>";
	} else {
		echo "<div align=\"center\">Error: " . $sql . "<br>" . mysqli_error($conn)."</div>";
	}
	echo "<div align=\"center\"><strong><a href=\"index.php\">  Back</a></strong></div>";
		 ?>