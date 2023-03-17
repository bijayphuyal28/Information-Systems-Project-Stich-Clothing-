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
		<h1>New Customer Sign Up</h1>
		<?php
if(isset($_GET['msg']))
{
    $msg = $_GET['msg'];
if( $msg == "blank")
    print("<div class=errortext>Field Blank | Password and Re-Enter Password mismatch.</div>");
 else if( $msg == "error")
  print("<div class=errortext>Login Already exists.</div>");
  }
?>
		<div class="row">
			<div class="col-md-12">
			
				<form class="signup-form" action="processsignup.php" method="post">
				<div class="form-group">
				<input type="text" class="form-control" placeholder="Login Id.." name="loginid" id ="loginid">
				</div>
				<div class="form-group">
				<input type="password" class="form-control" placeholder="password." name="password">
				</div>
				<div class="form-group">
				<input type="password" class="form-control" placeholder="Confirm password." name="repassword">
				</div>
				<div class="form-group">
				<input type="text" class="form-control" placeholder="Name" name="name">
				</div>
				<div class="form-group">
				<input type="email" class="form-control" placeholder="Email" name="email">
				</div>
				<div class="form-group">
				<input type="text" class="form-control" placeholder="Contact No." name="contactno">
				</div>
			
				<button type="submit" class="btn btn-primary">Sign Up</button>
				</form>
			</div>
			
			
		</div>

	</div>

</section>
<footer id="site-info">
		Copyright &copy; 
	</footer>
</body>
</html>