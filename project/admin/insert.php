<?php
require("connection.php");
$n=$_REQUEST["name"];
$pri=$_REQUEST["price"];
$dis=$_REQUEST["discount"];
$war=$_REQUEST["warranty"];
$img=$_FILES["image"]["name"];
$res=$con->query("insert into `tb_product`(`name`,`price`,`discount`,`warranty`,`image`)values('$n','$pri','$dis','$war','$img')");
 $count=mysqli_affected_rows($con); 
move_uploaded_file($_FILES["image"]["tmp_name"],"images/".$img);
header("location:view.php");
?>