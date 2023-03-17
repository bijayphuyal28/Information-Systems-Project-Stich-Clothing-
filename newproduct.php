<?php
// Start the session
session_start();
require 'db.inc.php';
?>
<?php
if(isset($_SESSION['login']))
{

 $login = $_SESSION["login"];
 if($login == "yes")
 {
  	  
 }
 }
 else 
 {
  header("Location: admin.php");
 }
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
<section id="product">	
	
	<div class="container">
	  <?php
		    if(isset($_SESSION['login']))
     {
	    $login = $_SESSION["login"];
        if($login == "yes")
        {
         # $type = $_GET['type'];
           $nm=$_SESSION['uname'];
		  # echo "Welcome  "; 
		 # echo $nm;
		  echo "<div align=\"right\"> Welcome   ".$nm. " <strong><a href=\"logout.php\">  Signout</a></strong></div>";
	     }
	 
     }
		   ?>
		<h1>Add New Product</h1>
		<div class="row">
			<div class="col-md-12" style="overflow:auto">
			
				<form class="prod-form" action="addProduct.php" method="post" enctype="multipart/form-data" st>
				<div class="form-group">
				<?php
		// Create connection
$conn = mysqli_connect(MYSQL_HOST, MYSQL_USER, MYSQL_PASSWORD, MYSQL_DB);
 
if($conn === false){
    die("ERROR: Could not connect. "
                . mysqli_connect_error());
}
#echo "Connected successfully";

$sql = "SELECT categoryId,categoryName from category";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
   
    echo "<tr>
          <td align=left>Select Category   </td><td>";
	
	print("<select name=category id=category  class=inputtext>");
    // output data of each row
    while($row = $result->fetch_assoc()) {
       print("<option value=".$row["categoryId"].">".$row["categoryName"]."</option>"); 
    }
	print("</select></td></tr>");

	}
	?>
				</div>
				<div class="form-group">
				<input type="text" class="form-control" placeholder="Product Name" name="prodname" id ="prodname">
				</div>
				
				<div class="form-group">
				<textarea class="form-control" rows="1" placeholder="Description.." name="description"></textarea>
				</div>
			     <div class="form-group">
				<input type="number" class="form-control" placeholder="Quantity.." name="qty">
				</div>
				<div class="form-group">
				<input type="number" class="form-control" placeholder="Price." name="price">
				</div>
				<div class="form-group">
				<input type="number" class="form-control" placeholder="Rating." name="rating">
				</div>
				<div class="form-group">
				<input type="file" class="form-control" placeholder="Product Image." name="photo">
				</div>
				<button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
			
			
		</div>

	</div>

</section>

<footer id="#footer">
		Copyright &copy; 
	</footer>
</body>
</html>