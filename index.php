<?php
// Start the session
session_start();
require 'db.inc.php';
?>
<!DOCTYPE html>
<html>
<head>
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
<script language="javascript" type="text/javascript">
$(document).ready(function () { 
  $("#product").click(function () {    
	alert("click ");    
  });
}); 
</script>
</head>

<body>

<section id="nav-bar">
		<nav class="navbar navbar-expand-lg navbar-light">
		<?php include 'menu.php';?>
		</nav>
</section>

	<div class="slider">
		<div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
	<div class="carousel-item active" data-interval="10000">
	  <img src="images/fjjs.jpg" class="d-block w-100" alt="..." style="width:auto;height:800px;">
	</div>
	<div class="carousel-item" data-interval="2000">
	  <img src="images/fashion.jpg" class="d-block w-100" alt="..." style="width:auto;height:800px;">
	</div>
	<div class="carousel-item">
	  <img src="images/fs.jpg" class="d-block w-100" alt="..." style="width:auto;height:800px;">
	</div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
	<span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
	<span class="carousel-control-next-icon" aria-hidden="true"></span>
	<span class="sr-only">Next</span>
  </a>
</div>
	</div>
		




	<!------Featured Categories----->
	<section class="featured-categories">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
				<img src="images/grlss.jpg">
				</div>
				<div class="col-md-3">
				<img src="images/Blazer.jpg">
				</div>
				<div class="col-md-3">
				<img src="images/Set.jpg">
				</div>
				<div class="col-md-3">
				<img src="images/Smart.jpg">
				</div>
				
			
			</div>
		
		</div>
	</section>
	
	
<section class="new-arrivals">
<div id="site">
	<div class="container">
		<div class="title-box">
		<h2>Boys</h2>
		</div>
		<div class="row">
			<div class="col-md-3">
			<div class="product-top" >
				<img src="images/boy-1.jpg">
				<div class="overlay-right">
				</div>
			</div>
			
			
			<div class="product-bottom text-center">
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star-half-o"></i>
			<h3>Mens Set 1</h3>
			<div id="product" class="product-description" data-name="Mens Set" data-price="140">
				
				<p class="product-price">&dollar; 140</p>
				<form class="add-to-cart" action="cart.php" method="post">
							<div>
								<label for="qty-2">Quantity</label>
								<input type="text" name="qty-2" id="qty-2" class="qty" value="1" />
							</div>
							<p><input type="submit" value="Add to cart" class="btn" /></p>
						</form>
						
			</div>
			</div>
			</div>

			
			<div class="col-md-3">
			<div class="product-top">
				<img src="images/boy-2.jpg">
				<div class="overlay-right">
				</div>
			</div>
			
			
			<div class="product-bottom text-center">
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star-half-o"></i>
			<h3>Mens Set 2</h3>
			<div id="product" class="product-description" data-name="Mens Set" data-price="120">
				
				<p class="product-price">&dollar; 120</p>
				<form class="add-to-cart" action="cart.php" method="post">
							<div>
								<label for="qty-2">Quantity</label>
								<input type="text" name="qty-2" id="qty-2" class="qty" value="1" />
							</div>
							<p><input type="submit" value="Add to cart" class="btn" /></p>
						</form>
						
			</div>
			</div>
			</div>



			<div class="col-md-3">
			<div class="product-top">
				<img src="images/boy-3.jpg">
				<div class="overlay-right">
				</div>
			</div>
			
			
			<div class="product-bottom text-center">
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star-half-o"></i>
			<h3>Mens Set 3</h3>
			<div class="product-description" data-name="Mens set" data-price="128">
				
				<p class="product-price">&dollar; 128</p>
				<form class="add-to-cart" action="cart.php" method="post">
							<div>
								<label for="qty-2">Quantity</label>
								<input type="text" name="qty-2" id="qty-2" class="qty" value="1" />
							</div>
							<p><input type="submit" value="Add to cart" class="btn" /></p>
						</form>
						
			</div>
			</div>
			</div>



			<div class="col-md-3">
			<div class="product-top">
				<img src="images/boy-4.jpg">
				<div class="overlay-right">
				</div>
			</div>
			
			
			<div class="product-bottom text-center">
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star-half-o"></i>
			<h3>Mens Set 4</h3>
			<div class="product-description" data-name="Mens set" data-price="100">
				
				<p class="product-price">&dollar; 100</p>
				<form class="add-to-cart" action="cart.php" method="post">
							<div>
								<label for="qty-2">Quantity</label>
								<input type="text" name="qty-2" id="qty-2" class="qty" value="1" />
							</div>
							<p><input type="submit" value="Add to cart" class="btn" /></p>
						</form>
						
			</div>
			</div>
			</div>			

		</div>



	<div class="row">
			<div class="col-md-3">
			<div class="product-top">
				<img src="images/boy-5.jpg">
				<div class="overlay-right">
				</div>
			</div>
			
			
			<div class="product-bottom text-center">
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star-half-o"></i>
			<h3>Mens Set 5</h3>
			<div class="product-description" data-name="Mens wear" data-price="131">
				
				<p class="product-price">&dollar; 131</p>
				<form class="add-to-cart" action="cart.php" method="post">
							<div>
								<label for="qty-2">Quantity</label>
								<input type="text" name="qty-2" id="qty-2" class="qty" value="1" />
							</div>
							<p><input type="submit" value="Add to cart" class="btn" /></p>
						</form>
						
			</div>
			</div>
			</div>

			
			<div class="col-md-3">
			<div class="product-top">
				<img src="images/6.jpg">
				<div class="overlay-right">
				</div>
			</div>
			
			
			<div class="product-bottom text-center">
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star-half-o"></i>
			<h3>Mens Set 6</h3>
			<div class="product-description" data-name="Mens Wear" data-price="150">
				
				<p class="product-price">&dollar; 150</p>
				<form class="add-to-cart" action="cart.php" method="post">
							<div>
								<label for="qty-2">Quantity</label>
								<input type="text" name="qty-2" id="qty-2" class="qty" value="1" />
							</div>
							<p><input type="submit" value="Add to cart" class="btn" /></p>
						</form>
						
			</div>
			</div>
			</div>



			<div class="col-md-3">
			<div class="product-top">
				<img src="images/boys-7.jpg">
				<div class="overlay-right">
				</div>
			</div>
			
			
			<div class="product-bottom text-center">
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star-half-o"></i>
			<h3>Mens Set 7</h3>
			<div class="product-description" data-name="Mens Clothes" data-price="160">
				
				<p class="product-price">&dollar; 160</p>
				<form class="add-to-cart" action="cart.php" method="post">
							<div>
								<label for="qty-2">Quantity</label>
								<input type="text" name="qty-2" id="qty-2" class="qty" value="1" />
							</div>
							<p><input type="submit" value="Add to cart" class="btn" /></p>
						</form>
						
			</div>
			</div>
			</div>



			<div class="col-md-3">
			<div class="product-top">
				<img src="images/boys-8.jpg">
				<div class="overlay-right">
				</div>
			</div>
			
			
			<div class="product-bottom text-center">
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star-half-o"></i>
			<h3>Mens Set 8</h3>
			<div class="product-description" data-name="mensset" data-price="70">
				
				<p class="product-price">&dollar; 70</p>
				<form class="add-to-cart" action="cart.php" method="post">
							<div>
								<label for="qty-2">Quantity</label>
								<input type="text" name="qty-2" id="qty-2" class="qty" value="1" />
							</div>
							<p><input type="submit" value="Add to cart" class="btn" /></p>
						</form>
						
			</div>
			</div>
			</div>	
		</div>






	</div>



		<div class="title-box">
		<h2>Girls</h2>
		</div>
		<div class="row">
			<div class="col-md-3">
			<div class="product-top">
				<img src="images/grlss.jpg">
				<div class="overlay-right">
				</div>
			</div>
			
			
			<div class="product-bottom text-center">
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star-half-o"></i>
			<h3>Girls Set 1</h3>
			<div class="product-description" data-name="girls" data-price="78">
				
				<p class="product-price">&dollar; 78</p>
				<form class="add-to-cart" action="cart.php" method="post">
							<div>
								<label for="qty-2">Quantity</label>
								<input type="text" name="qty-2" id="qty-2" class="qty" value="1" />
							</div>
							<p><input type="submit" value="Add to cart" class="btn" /></p>
						</form>
						
			</div>
			</div>
			</div>

			
			<div class="col-md-3">
			<div class="product-top">
				<img src="images/grls-2.jpg">
				<div class="overlay-right">
				</div>
			</div>
			
			
			<div class="product-bottom text-center">
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star-half-o"></i>
			<h3>Girls Set 2</h3>
			
			<div class="product-description" data-name="girls" data-price="84">
				
				<p class="product-price">&dollar; 84</p>
				<form class="add-to-cart" action="cart.php" method="post">
							<div>
								<label for="qty-2">Quantity</label>
								<input type="text" name="qty-2" id="qty-2" class="qty" value="1" />
							</div>
							<p><input type="submit" value="Add to cart" class="btn" /></p>
						</form>
						
			</div>
			</div>
			</div>



			<div class="col-md-3">
			<div class="product-top">
				<img src="images/grls-3.jpg">
				<div class="overlay-right">
				</div>
			</div>
			
			
			<div class="product-bottom text-center">
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star-half-o"></i>
			<h3>Girls Set 3</h3>
			<div class="product-description" data-name="girls" data-price="120">
				
				<p class="product-price">&dollar; 120</p>
				<form class="add-to-cart" action="cart.php" method="post">
							<div>
								<label for="qty-2">Quantity</label>
								<input type="text" name="qty-2" id="qty-2" class="qty" value="1" />
							</div>
							<p><input type="submit" value="Add to cart" class="btn" /></p>
						</form>
						
			</div>
			</div>
			</div>



			<div class="col-md-3">
			<div class="product-top">
				<img src="images/grls-4.jpg">
				<div class="overlay-right">
				</div>
			</div>
			
			
			<div class="product-bottom text-center">
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star-half-o"></i>
			<h3>Girls Set 4</h3>
			<div class="product-description" data-name="Girls" data-price="160">
				
				<p class="product-price">&dollar; 160</p>
				<form class="add-to-cart" action="cart.php" method="post">
							<div>
								<label for="qty-2">Quantity</label>
								<input type="text" name="qty-2" id="qty-2" class="qty" value="1" />
							</div>
							<p><input type="submit" value="Add to cart" class="btn" /></p>
						</form>
						
			</div>
			</div>
			</div>			

		</div>



	<div class="row">
			<div class="col-md-3">
			<div class="product-top">
				<img src="images/grls-5.jpg">
				<div class="overlay-right">
				</div>
			</div>
			
			
			<div class="product-bottom text-center">
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star-half-o"></i>
			<h3>Girls Set 5</h3>
			<div class="product-description" data-name="girls" data-price="175">
				
				<p class="product-price">&dollar; 175</p>
				<form class="add-to-cart" action="cart.php" method="post">
							<div>
								<label for="qty-2">Quantity</label>
								<input type="text" name="qty-2" id="qty-2" class="qty" value="1" />
							</div>
							<p><input type="submit" value="Add to cart" class="btn" /></p>
						</form>
						
			</div>
			</div>
			</div>

			
			<div class="col-md-3">
			<div class="product-top">
				<img src="images/grls-6.jpg">
				<div class="overlay-right">
				</div>
			</div>
			
			
			<div class="product-bottom text-center">
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star-half-o"></i>
			<h3>Girls Set 6</h3>
			<div class="product-description" data-name="girls" data-price="58">
				
				<p class="product-price">&dollar; 58</p>
				<form class="add-to-cart" action="cart.php" method="post">
							<div>
								<label for="qty-2">Quantity</label>
								<input type="text" name="qty-2" id="qty-2" class="qty" value="1" />
							</div>
							<p><input type="submit" value="Add to cart" class="btn" /></p>
						</form>
						
			</div>
			</div>
			</div>



			<div class="col-md-3">
			<div class="product-top">
				<img src="images/grls-7.jpg">
				<div class="overlay-right">
				</div>
			</div>
			
			
			<div class="product-bottom text-center">
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star-half-o"></i>
			<h3>Girls Set 7</h3>
			<div class="product-description" data-name="Goods File" data-price="51">
				
				<p class="product-price">&dollar; 51</p>
				<form class="add-to-cart" action="cart.php" method="post">
							<div>
								<label for="qty-2">Quantity</label>
								<input type="text" name="qty-2" id="qty-2" class="qty" value="1" />
							</div>
							<p><input type="submit" value="Add to cart" class="btn" /></p>
						</form>
						
			</div>
			</div>
			</div>



			<div class="col-md-3">
			<div class="product-top">
				<img src="images/grls-8.jpg">
				<div class="overlay-right">
				</div>
			</div>
			
			
			<div class="product-bottom text-center">
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star-half-o"></i>
			<h3>Girls Set 8</h3>
			
			<div class="product-description" data-name="new wears" data-price="65">
				
				<p class="product-price">&dollar; 65</p>
				<form class="add-to-cart" action="cart.php" method="post">
							<div>
								<label for="qty-2">Quantity</label>
								<input type="text" name="qty-2" id="qty-2" class="qty" value="1" />
							</div>
							<p><input type="submit" value="Add to cart" class="btn" /></p>
						</form>
						
			</div>
			</div>
			</div>	
		</div>


<?php
// Create connection
$conn = mysqli_connect(MYSQL_HOST, MYSQL_USER, MYSQL_PASSWORD, MYSQL_DB);
 
if($conn === false){
    die("ERROR: Could not connect. "
                . mysqli_connect_error());
}


#echo "Connected successfully";

$sql = "SELECT `productId`, `productname`, `image`, `categoryName`, `quantity`, `price`, `rating` FROM `products`,`category` where products.productId = category.categoryId ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $count = 1;
   
    // output data of each row
    while($row = $result->fetch_assoc()) {
	    if($count == 1) {
		   echo '<div class="row">';
		
		}
		  $c = $row["rating"];
		  echo '<div class="col-md-3">
			<div class="product-top">
				<img src=images/'.$row["image"].'>
				<div class="overlay-right">
				</div>
			</div>
			
			
			<div class="product-bottom text-center">';
			for($i = 1;$i <= $c; $i++) {
			   echo '<i class="fa fa-star"></i>';
			} 
			echo "<h3>".$row["categoryName"]."</h3>";
			echo '<div id="product" class="product-description" data-name='.$row["productname"].' data-price='.$row["price"].'>';
			echo '<p class="product-price">&dollar; '. $row["price"].'</p>';
			echo '<form class="add-to-cart" action="cart.php" method="post">
							<div>
								<label for="qty-2">Quantity</label>
								<input type="text" name="qty-2" id="qty-2" class="qty" value="1" />
							</div>
							<p><input type="submit" value="Add to cart" class="btn" /></p>
						</form>
						
			</div>
			</div>
			</div>';
		if($count <= 4)
		  $count = $count + 1;
		 else {
		    $count = 1; 
			echo "</div>";
			}
       
    }
} else {
    echo "<div align=\"center\">No Available Products</div>";
}
$conn->close();



?>

</section>
	
<!------About Section------->	
	<section id="about">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
			<h2>About Us</h2>
				<div class="about-content">
				Welcome to the STICH CLOTHING STORE. We provide the quality products of cloths for both mens and women. The customer can order the product and item can be purchased easily. 
				We make it easy for you to find what you like, trust it will fit and come in as a perfect gift, because quality and value are at the heart of all we do.

				</div>

			
			</div>
			<div class="col-md-6 skills-bar">
			<p>Delivery Rate</p>
			<div class="progress">
			<div class="progress-bar" style="width:85%;">85%</div>
			</div>
			
			<p>Customer Growth</p>
			<div class="progress">
			<div class="progress-bar" style="width:75%;">75%</div>
			</div>
			
			<p>Happy Employee</p>
			<div class="progress">
			<div class="progress-bar" style="width:90%;">90%</div>
			</div>
			
			</div>
		</div>
		
	</div>	
		
<!------Services Section------->		
	<section id="services">
	
		<div class="container">
			<h1>Our Services</h1>
			<div class="row services" >
				<div class= "col-md-4 text-center">
					<div class="icon">
					<i class="fa fa-phone"></i>
					</div>
					<h3> 24/7 Support</h3>
					<p>on order related queries</p>
				</div>
			
				<div class="col-md-4 text-center">
					<div class="icon">
					<i class="fa fa-shopping-cart"></i>
					</div>
					<h3> Return within 30 days</h3>
					<p>of receiving your order</p>
				</div>
			
				<div class="col-md-4 text-center">
					<div class="icon">
					<i class="fa fa-truck"></i>
					</div>
					<h3>Get free delivery</h3>
					<p>on orders above $ 1000</p>
				</div>
			</div>
		</div>
	
	</section>
	




<!------COntact------------>	
<section id="contact">	
	
	<div class="container">
		<h1>Get In Touch</h1>
		<div class="row">
			<div class="col-md-6">
				<form class="contact-form" action="contact.php" method="post">
				<div class="form-group">
				<input type="text" class="form-control" placeholder="First Name Last Name" name="name" id ="name">
				</div>
				<div class="form-group">
				<input type="number" class="form-control" placeholder="Phone Number" name="phoneno">
				</div>
				<div class="form-group">
				<input type="email" class="form-control" placeholder="Email" name="email">
				</div>
				<div class="form-group">
				<textarea class="form-control" rows="4" placeholder="Type Your Message Here" name="message"></textarea>
				</div>
			
				<button type="submit" class="btn btn-primary">Submit</button>
				</form>
				<a href="signup.php">New Customer Signup</a> | <a href="login.php">Customer Login</a>
			</div>
			<div class="col-md-6 contact-info">
				<div class="follow"><b><i class="fa fa-map-marker"></i>  </b>Kathmandu,NEPAL</div>
				<div class="follow"><b><i class="fa fa-mobile"></i>  </b>+9779805689102</div>
				<div class="follow"><b><i class="fa fa-envelope"></i>  </b>stichclothes@gmail.com</div>
				
				
				<div class="follow"><label><b>Get Social </b></label>
				<a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
				<a href="https://www.youtube.com/"><i class="fa fa-youtube-play"></i></a>
				<a href="https://twitter.com/login"><i class="fa fa-twitter"></i></a>
				<a href="https://myaccount.google.com/"><i class="fa fa-google-plus"></i></a>
				
				</div>

			</div>
			
		</div>

	</div>


</body>
</html>	
