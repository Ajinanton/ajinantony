<?php
require("connection.php");
$n=$_REQUEST["name"];
$pri=$_REQUEST["price"];
$dis=$_REQUEST["discount"];
$war=$_REQUEST["warranty"];
$image=$_FILES["image"]["name"];
$id=$_REQUEST["id"];
if(empty($_FILES["Image"]["name"]))
{
$res=$con->query("update `tb_product` set `name`='$n',`price`='$pri',`discount`='$dis',`warranty`='$war' where `id`='$id'");
	$count=mysqli_affected_rows($con);
}
else
{
	$image=$_FILES["image"]["name"];
	$res=$con->query("update `tb_product` set `name`='$n',`price`='$pri',`discount`='$dis',`warranty`='$war',`image`='$image' where `id`='$id'");
	move_uploaded_file($_FILES["Image"]["tmp_name"],"images/".$file);
}
header("location:view.php");

?>