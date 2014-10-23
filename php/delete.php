<?php
include("connection.php");
$delete1=$_POST["delete1"];

mysql_select_db("court");
$sql1=mysql_query("select Name from user where national_id='$delete1'");
$row=mysql_fetch_array($sql1);
$name= $row['Name'];
$sql=mysql_query("delete from user where national_id='$delete1' ");
if(!$sql){
	?>
<img src="img/exclamation-red.png"> <?
echo "something went wrong";
}
else
{
echo "<b>".$name. "</b>";
?><img src="img/tick-circle.png"> <?
echo "successifully deleted";
}

