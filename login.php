<?php
// Start the session
session_start();
?>
<?php
if(isset($_SESSION['login']))
{

 $login = $_SESSION["login"];
 if($login == "yes")
 {
   # $type = $_GET['type'];
   $type=$_SESSION['type'];
	if($type == 'Admin')
	   header("Location: admin.php");
	else if($type == 'User')
	   header("Location: user.php");
	  
 }
 }
 else 
 {
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
<section id="login">	
	
	<div class="container">
		<h1>Login Here</h1>
		<div class="row">
			<div class="col-md-6">
			<?php
		   if(isset($_GET['msg']))
		   {
		     $msg = $_GET['msg'];
		     if($msg == 'loginerror')
		      print("<div class=errortext align=center>Invalid Login ID or Password Or Awaiting Approval</div>");
		   }  
		?> 
				<form class="contact-form" action="check.php" method="post">
				<div class="form-group">
				<input type="text" class="form-control" placeholder="User Name.." name="loginid" id ="loginid">
				</div>
				<div class="form-group">
				<input type="password" class="form-control" placeholder="password." name="password">
				</div>
				<div class="form-group">
				 				</div>
				
			
				<button type="submit" class="btn btn-primary">Login</button>
				</form>
			</div>
			<div class="col-md-6 contact-info">
				<div class="follow"><b><i class="fa fa-map-marker"></i>  </b>9/13 West street hurstville</div>
				<div class="follow"><b><i class="fa fa-mobile"></i>  </b>+6145247719</div>
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

</section>
<footer id="site-info">
		Copyright &copy; 
	</footer>
</body>
</html>