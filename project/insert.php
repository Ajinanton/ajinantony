<?php
require("connection.php");
$n=$_REQUEST["name"];
$id=$_REQUEST["mail"];
$num=$_REQUEST["number"];
$cun=$_REQUEST["countries"];
$sta=$_REQUEST["state"];
$res=$con->query("insert into `tb_user`(`user_name`,`email`,`mbl.no`,`country`,`state`)values('$n','$id','$num','$cun','$sta')");
 $count=mysqli_affected_rows($con); 
header("location:form.php");
?>