<?php
// Start the session
session_start();
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
<?php
$category=$_POST['category'];
$prodname=$_POST['prodname'];
$description=$_POST['description'];
$qty=$_POST['qty'];
$price=$_POST['price'];
$rating=$_POST['rating'];

if(isset($_FILES["photo"]["error"])){
    if($_FILES["photo"]["error"] > 0){
        echo "Error: " . $_FILES["photo"]["error"] . "<br>";
    } else{
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        $filename = $_FILES["photo"]["name"];
        $filetype = $_FILES["photo"]["type"];
        $filesize = $_FILES["photo"]["size"];
		$upl  = $filename;
    
        // Verify file extension
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");
    
        // Verify file size - 5MB maximum
        $maxsize = 5 * 1024 * 1024;
        if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");
    
        // Verify MYME type of the file
        if(in_array($filetype, $allowed)){
            // Check whether file exists before uploading it
            if(file_exists("upload/" . $_FILES["photo"]["name"])){
                echo $_FILES["photo"]["name"] . " is already exists.";
            } else{
                move_uploaded_file($_FILES["photo"]["tmp_name"], "images/" . $_FILES["photo"]["name"]);
				echo "Your file was uploaded successfully.";

 } 
        } else{
            echo "Error: There was a problem uploading your file - please try again."; 
        }
    }
} else{
    echo "Error: Invalid parameters - please contact your server administrator.";
}
// Create connection
$conn = mysqli_connect(MYSQL_HOST, MYSQL_USER, MYSQL_PASSWORD, MYSQL_DB);
 
if($conn === false){
    die("ERROR: Could not connect. "
                . mysqli_connect_error());
}


#echo "Connected successfully";

$query = 'SELECT max(productId) as id FROM Products';
$id_get = mysqli_query($conn,$query);

$id = mysqli_fetch_array($id_get);

$uid = $id['id'];

$uid=$uid+1;
$date = date('Y-m-d H:i:s');
$sql = "INSERT INTO `products`(`productId`, `productname`, `description`, `image`, `categoryId`, `quantity`, `price`, `rating`, `isAvailable`, `createdAt`) VALUES".
       "('$uid','$prodname','$description','$filename','$category','$qty','$price','$rating',1,'$date')";
	   
?>
<div class="container">
		
		<div class="row">
		  <div class="col-md-12">
		   
		 
<?php	   
if (mysqli_query($conn, $sql)) {
   echo "<div align=\"center\">New Product Added Added successfully</div>";
} else {
    echo "<div align=\"center\">Error: " . $sql . "<br>" . mysqli_error($conn)."</div>";
}
echo "<div align=\"center\"><strong><a href=\"admin.php\">  Back</a></strong></div>";
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