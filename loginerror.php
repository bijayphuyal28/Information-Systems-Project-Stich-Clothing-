<?php
// Start the session
session_start();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Welcome - Student Registration And Performance Tracker.com/Authentication Error!</title>
<link href="mystyle.css" rel="stylesheet" type="text/css" />
</head>
<body>
<table align="center" width="700" bgcolor="#FFFFFF">
<tr><td height="70">&nbsp;</td></tr>
<tr><td height="70"><?php include 'header.php';?></td></tr>
<tr><td>
<?php include 'menu.php';?>
</td></tr>
<tr><td height="300" align="center" valign="top"><p>&nbsp;</p>
<div align="center">
<div class="errortext">You are not authrized to view this page.</div><br/> 
Your have been logged as some other type of User. <br /> Re-Login after <a href="logout.jsp">Logout</a></div>
<p><img src="images/bug.jpg" width="134" height="74" /></p></td></tr>
<tr><td ><div align="center" class="greysmall"><hr />
Design & Developed by Students Group </div></td></tr>
</table>
</body>
</html>
