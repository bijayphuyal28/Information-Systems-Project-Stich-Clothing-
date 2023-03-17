		<?php
		// Start the session
		session_start();
		require 'db.inc.php';
		?>
		<?php 
		  $orderid = $_POST['orderid']; 
		  $bname = $_POST['bname']; 
		  $bemail = $_POST['bemail'];
		  $bcity = $_POST['bcity'];
		  $bzip = $_POST['bzip'];
		  $bcountry = $_POST['bcountry'];
		  $badd = $_POST['badd'];
		 // Create connection
		$conn = mysqli_connect(MYSQL_HOST, MYSQL_USER, MYSQL_PASSWORD, MYSQL_DB);
		 
		if($conn === false){
			die("ERROR: Could not connect. "
						. mysqli_connect_error());
		}
		
		
		#echo "Connected successfully";
		$date = date('Y-m-d H:i:s');
		$sql = "INSERT INTO `billing`(`orderId`, `name`, `email`, `city`, `address`, `zipcode`, `country`) VALUES".
		       "('$orderid','$bname','$bemail','$bcity','$badd','$bzip','$bcountry')";
		   
		   if (mysqli_query($conn, $sql)) {
	   echo "<div align=\"center\">New Order Billing Details  Added successfully</div>";
	} else {
		echo "<div align=\"center\">Error: " . $sql . "<br>" . mysqli_error($conn)."</div>";
	}
	echo "<div align=\"center\"><strong><a href=\"index.php\">  Back</a></strong></div>";
		 ?>