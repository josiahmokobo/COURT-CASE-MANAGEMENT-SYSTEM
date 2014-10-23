<?php
session_start();
$id=$_SESSION["national_id"];
echo $id;
include("connection.php");
mysql_select_db("court");
mysql_query("update user set status='offline' where national_id='$id'");
session_destroy();
 header("location:http://localhost/case/login.php");
?>