<?php
// Start the session
session_start();
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
<?php
require 'db.inc.php';
$nm=$_POST['loginid'];
$pwd=$_POST['password'];
$type='Admin'; #$_REQUEST['type'];

// Create connection
$conn = mysqli_connect(MYSQL_HOST, MYSQL_USER, MYSQL_PASSWORD, MYSQL_DB);
 
if($conn === false){
    die("ERROR: Could not connect. "
                . mysqli_connect_error());
}


echo "Connected successfully";
$sql = "SELECT * FROM users where username = '$nm'  and password = '$pwd' and approve = 1";
if($res = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($res) > 0){
       
        while($row = mysqli_fetch_array($res)){
            $_SESSION['uid'] = $row['userid'];
			$_SESSION['uname'] = $row['username'];
			$_SESSION['type'] = $row['type'];
			$_SESSION['login'] = "yes";
			$_SESSION['email'] = $row['email'];
			$type1 = $_SESSION['type'];
			if($type1 == "Admin")
			   header("Location: admin.php");
			else if($type1 == "User")
			   header("Location: user.php");
			
        }#while
       
        mysqli_free_result($res);
    } #if num_rows
	else
	{
        echo "No Matching records are found.";
		header("Location: login.php?msg=loginerror&type=".$type);
    }
} #if query
else
{

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

?>

