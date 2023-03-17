<div align="left">
	<?php 
	 #$todaydate = date('d/m/Y'); 
	 
	 #echo "| $todaydate  | ";
	if(isset($_SESSION['login']))
     {
	    $login = $_SESSION["login"];
        if($login == "yes")
        {
         # $type = $_GET['type'];
           $nm=$_SESSION['uname'];
		   echo "Welcome  "; 
		  echo $nm;
		  echo "<div align=\"right\"><strong><a href=\"logout.php\">Signout</a></strong></div>";
	     }
	 
     }
	
	?>
	
</div>
<table bgcolor="#E9E9E9" align="center" width="100%">
<tr><td height="60">
<div align="center" class="head"><marquee behavior="alternate">Stich Clothing Web Portal</marquee></div></td></tr></table>
