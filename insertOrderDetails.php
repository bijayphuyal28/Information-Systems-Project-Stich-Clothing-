			<?php
			// Start the session
			session_start();
			require 'db.inc.php';
			?>
			<?php 
			  $orderid = $_POST['orderid']; 
			  $pname = $_POST['pname']; 
			  $pqty = $_POST['pqty'];
			   $pprice = $_POST['pprice'];
			  
			 // Create connection
			$conn = mysqli_connect(MYSQL_HOST, MYSQL_USER, MYSQL_PASSWORD, MYSQL_DB);
			 
			if($conn === false){
				die("ERROR: Could not connect. "
							. mysqli_connect_error());
			}
			$query = 'SELECT max(orderDetailsId) as id FROM orderdetails';
	        $id_get = mysqli_query($conn,$query);
	
	        $id = mysqli_fetch_array($id_get);
	
	        $uid = $id['id'];
	
	        $uid=$uid+1;
			
			#echo "Connected successfully";
			$date = date('Y-m-d H:i:s');
			$sql = "INSERT INTO `orderdetails`(`orderDetailsId`, `orderId`, `item`, `quantity`, `price`) VALUES".
				   "('$uid','$orderid','$pname','$pqty','$pprice')";
			   
			   if (mysqli_query($conn, $sql)) {
		   echo "<div align=\"center\">New Message Added successfully</div>";
		} else {
			echo "<div align=\"center\">Error: " . $sql . "<br>" . mysqli_error($conn)."</div>";
		}
		echo "<div align=\"center\"><strong><a href=\"index.php\">  Back</a></strong></div>";
			 ?>