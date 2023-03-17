<?php
$name=$_POST['name'];
$city=$_POST['city'];
echo $name;
echo json_encode(array("statusCode"=>200));
?>