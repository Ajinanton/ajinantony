<?php
require("connection.php");
$mail=$_REQUEST["Email"];
$pass=$_REQUEST["Password"];
$res=$con->query("select*from `tb_login` where `Email`='$mail' AND `Password`='$pass'");
$count=$res->num_rows;
if($count>0)
{
header("location:dashboard.php");
}
else
{
   echo "<script>alert('Invalid email or wrong password'); window.location.href='index.php';</script>";
}
?>