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
	else if($type == 'Doctor')
	   header("Location: doctor.php");
	else if($type == 'Receptionist')
	   header("Location: receptionist.php");
	else if($type == 'Patient')
	   header("Location: patient.php");
   else if($type == 'Donor')
	   header("Location: donor.php");   
 }
 }
 else 
  {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Welcome - Efficient Doctor Patient Web Portal.com/Login</title>
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
<table width="99%">
  <tr>
    <td valign="middle" align="center">
	  <div align="center"></div>
	  <table width="80%" cellspacing="5">
	<?php
	if($_GET['type'] == "Admin"){
	print("<tr><td bgcolor=#F2F2F2 height=25 align=center><b>Sign In As Administrator</b></td></tr>");
	print("<tr><td><p align=justify>An Administrator can manage Doctors, Receptionists and Donors.</td></tr>");
	print("<tr><td bgcolor=#F2F2F2 height=25>Admin can Approve Donors,View Feedbacks</td></tr>");
	}
	else if($_GET['type'] =="Doctor"){
	print("<tr><td bgcolor=#F2F2F2 height=25 align=center><b>Sign In As a Doctor</b></td></tr>");
	print("<tr><td><p align=justify>A Doctor can check Appointments Of Patients, View Patient Medical History,Update Treatment.</td></tr>");
	print("<tr><td bgcolor=#F2F2F2 height=25>New Doctors Please Contact Hospital Admin To Join Us</td></tr>");
	}
	else if($_GET['type'] =="Receptionist"){
	print("<tr><td bgcolor=#F2F2F2 height=25 align=center><b>Sign In As a Receptionist</b></td></tr>");
	print("<tr><td><p align=justify>A Receptionist can Login to View Appointment Request, Confirm Patients Requests For Appointment.</td></tr>");
	print("<tr><td bgcolor=#F2F2F2 height=25>New Receptionist  Please contact Hospital Admin To Join Us</td></tr>");
	}
	else if($_GET['type'] =="Patient"){
	print("<tr><td bgcolor=#F2F2F2 height=25 align=center><b>Sign In As a Patient</b></td></tr>");
	print("<tr><td><p align=justify>A Patient can Login to make an  Appointment Request, View Medical Treatment.</td></tr>");
	print("<tr><td bgcolor=#F2F2F2 height=25>New Patient can Sign Hospital Portal To Get Our Services <a href=signup.php?type=Patient>Signup</a></td></tr>");
	}
	else if($_GET['type'] =="Donor"){
	print("<tr><td bgcolor=#F2F2F2 height=25 align=center><b>Sign In As a Donor</b></td></tr>");
	print("<tr><td><p align=justify>Anyone can register as a donor: young, old, large or small, ill or healthy.</td></tr>");
	print("<tr><td><p align=justify>A Donor can Login to make request for donating Organs.</td></tr>");
	print("<tr><td bgcolor=#F2F2F2 height=25>New Donor  Please Sign First To Join us <a href=signup.php?type=Donor>Signup</a></td></tr>");
	}	
	?>
	</table>	
	  <div align="center"></div></td>
    <td width="20%" align="right"><form id="form" name="form" method="post" action="check.php"><br /><br />
	 <?php
		   if(isset($_GET['msg']))
		   {
		     $msg = $_GET['msg'];
		     if($msg == 'loginerror')
		      print("<div class=errortext align=center>Invalid Login ID or Password Or Awaiting Approval</div>");
		   }  
		?> 
      <table width="200" bgcolor="#F2F2F2" cellpadding="3">
	   <tr>
          <td colspan="2" align="center" bgcolor="#0063C6" height="20" class="whitehead">Login</td>
        </tr>
        <tr>
          <td>Login ID </td>
          <td><input type="text" name="loginid" class="inputtext"/></td>
        </tr>
        <tr>
          <td><div align="justify">Password</div></td>
          <td><input type="password" name="password" class="inputtext"/></td>
        </tr>
        <tr>
          <td>Type</td>
          <td><?php 
		     echo $_GET['type'];
		     $_SESSION['type'] = $_GET['type'];
		   ?></td>
		  <input type="hidden" name="type" value= <?php echo $_GET['type'] ?> />        </tr>
		<tr>
          <td colspan="2" >&nbsp;</td>
          </tr>
        <tr>
          <td colspan="2" align="center">
		  <input type="submit" name="Submit" value="Submit" class="inputtext" />
		  <input type="reset" name="Reset" value="Reset" class="inputtext"/>		  </td>
          </tr>
      </table>
        </form>
      <p>&nbsp;</p>      </td>
  </tr>
  <tr>
    <td><div align="left"><img src="images/hosp6.jpg" width="428" height="120" /></div></td>
    <td><div align="right"><img src="images/login.jpg" width="230" height="120" /></div></td>
  </tr>
</table>
</td>
</tr>
<tr><td ><div align="center" class="greysmall"><hr />
NIT6150 Assessment Specification</div></td></tr>
</table>
</body>
</html>
<?php } ?>
