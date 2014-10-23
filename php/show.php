<?php
include("connection.php");
$d=$_POST['d'];
mysql_select_db("court");
$sql1=mysql_query("select judgement from case_details where case_id='$d' ");
while($row=mysql_fetch_array($sql1))

{
	echo $row['judgement'];

}
?>
