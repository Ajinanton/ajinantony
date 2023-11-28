<?php
require("connection.php");
$id=$_REQUEST["del"];
$res=$con->query("select*from `tb_user` where `id`='$id'");
$count=$res->num_rows;
if($count>0)
$res=$con->query("delete from `tb_user` where `id`='$id'");
$count=mysqli_affected_rows($con);
if($count>0)
{
	header("location:visitor.php");
}
else
{
	header("location:visitor.php");
}