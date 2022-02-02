<?php
// Start the session
session_start();

if($login == "yes")
 {
   # $type = $_GET['type'];
    $type=$_SESSION['type'];
	if($type == 'Admin')
	   header("Location: admin.php");
	else 
	   header("Location: login.php?type=Admin"); 
 }

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Stich Clothing.com/Administrator</title>
<link href="mystyle.css" rel="stylesheet" type="text/css" />
</head>
<body>
<table align="center" width="85%" bgcolor="#FFFFFF">
<tr><td height="70">&nbsp;</td></tr>
<tr><td height="70"><?php include 'header.php';?></td></tr>
<tr><td>
<?php include 'menu.php';?>
</td></tr>
<tr><td height="300" valign="top">
<table width="100%" align="center">
  <tr>
    <td width="" valign="top">
	<p>&nbsp;</p>
	<table width=150 align="center">
      <tr>
        <td bgcolor="#F2F2F2" height="25" align="right"><a href="viewusers.php">View Userss </a></td>
      </tr>
      <tr>
	   <tr>
        <td bgcolor="#F2F2F2" height="25" align="right"><a href="approveusers.php">Approve Users </a></td>
      </tr>
     
        <td bgcolor="#F2F2F2" height="25" align="right"><div align="right"><a href="newproduct.php">Add New Product </a></div></td>
      </tr>
     <tr>
        <td bgcolor="#F2F2F2" height="25" align="right"><div align="right"><a href="newCategory.php">Add New Category</a></div></td>
      </tr>
      <tr>
        <td bgcolor="#F2F2F2" height="25">&nbsp;</td>
      </tr>
    </table></td>
    <td><p>As an Administrator you can</p>
      <ul>
        <li>View all all Registered Userss</li>
        <li>Approve Users  </li>
        <li>Manage Users</li>
        <li>Add New Product </li>
        <li>Add New Category</li>
      </ul></td>
  </tr>
  <tr>
    <td valign="top">&nbsp;</td>
    <td><div align="right"><img src="images/hsp8.jpg" alt="admin" width="275" height="183" /></div></td>
  </tr>
</table>
</td></tr>
<tr><td ><div align="center" class="greysmall"><hr />
NIT6150 Assessment Specification</div></td></tr>
</table>
</body>
</html>
