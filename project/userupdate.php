<?php
require("connection.php");
$n=$_REQUEST["name"];
$mal=$_REQUEST["mail"];
$mbl=$_REQUEST["number"];
$cun=$_REQUEST["countries"];
$sat=$_REQUEST["state"];
$id=$_REQUEST["id"];
$res=$con->query("update `tb_user` set `user_name`='$n',`email`='$mal',`mbl.no`='$mbl',`country`='$cun',`state`='$sat' where `id`='$id'");
	$count=mysqli_affected_rows($con);
header("location:visitor.php");

?>