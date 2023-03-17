<?php
// Start the session
session_start();
$name = $_SESSION['uname'];
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

<div class="container">
		
		<div class="row">
		  <div class="col-md-12">
		   
<?php


// Create connection
$conn = mysqli_connect(MYSQL_HOST, MYSQL_USER, MYSQL_PASSWORD, MYSQL_DB);
 
if($conn === false){
    die("ERROR: Could not connect. "
                . mysqli_connect_error());
}


#echo "Connected successfully";

$sql = "SELECT `order`.`orderId`, `orderdt`, `shoppingCharge`, `Total`, `billing`.`name`, `orderdetails`.`item`,`orderdetails`.`quantity`,`orderdetails`.`price` FROM  `order`,`orderdetails`,`billing` 
where `orderdetails`.`orderId` = `order`.`orderId` and `billing`.`orderId` = `order`.`orderId` and `billing`.`name` ='".$name."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border=1 width=80% align=center><tr><td colspan=5 bgcolor=#0063C6 height=20 class=whitehead><div align=center> Your Orders</div></td></tr><tr><th>Order Id</th><th>Order Date </th><th>Item </th><th>Quantity</th><th>Price</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr align=center><td>".$row["orderId"]."</td><td>".$row["orderdt"]."</td><td>".$row["item"]."</td><td>".$row["quantity"]."</td><td>".$row["price"]."</td></tr>";
		$total = $row["Total"];
    }
    echo "<tr align=center><td align=center colspan =2> Total Amount</td><td colspan = 3>".$total."</td></table>";
} else {
    echo "<div align=\"center\">No Orders</div>";
}
$conn->close();
?>		 
<?php	   

echo "<div align=\"center\"><strong><a href=\"user.php\">  Back</a></strong></div>";
?>
 </div>
		</div>
</div>
<section>
<footer id="site-info">
		Copyright &copy; 
	</footer>
</body>
</html>
