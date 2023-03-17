<?php
// Start the session
session_start();
?>
<?php
if($_SESSION['login'] == "yes")
 {
   # $type = $_GET['type'];
   # $type=$_SESSION['type'];
	
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
<div class="container">
		
		<div class="row">
		  <div class="col-md-12">
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
		  </div>
		</div>
</div>
<section id="user">	
	
	<div class="container">
		<h1><p>As a Customer you can</p></h1>
		<div class="row">
			<div class="col-md-6">
				<table width=100% align="center">
      <tr>
        <td bgcolor="#F2F2F2" height="25" align="right"><a href="index.php">Go For Shopping </a></td>
      </tr>
     <tr>
        <td bgcolor="#F2F2F2" height="25" align="right"><div align="right"><a href="vieworders.php">My Orders</a></div></td>
      </tr>
     </table>
			</div>
			<div class="col-md-6 user-menu">
				
      <ul>
        <li>Go For Shopping</li>
        <li>My Orders </li>
      </ul>
			</div>
			
		</div>

	</div>

</section>
<footer id="site-info">
		Copyright &copy; 
	</footer>
</body>
</html>
