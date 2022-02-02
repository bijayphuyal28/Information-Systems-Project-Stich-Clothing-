<?php
// Start the session
session_start();
?>

<?php
require 'db.inc.php';
$nm=$_POST['loginid'];
$pwd=$_POST['password'];
$type=$_REQUEST['type'];

// Create connection
$conn = mysqli_connect(MYSQL_HOST, MYSQL_USER, MYSQL_PASSWORD, MYSQL_DB);
 
if($conn === false){
    die("ERROR: Could not connect. "
                . mysqli_connect_error());
}


echo "Connected successfully";
$sql = "SELECT * FROM users where username = '$nm'  and password = '$pwd' and type = '$type' and approve = 1";
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