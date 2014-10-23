<?php
session_start();

include("connection.php");
$National_id=$_POST["National_id"];
$Name=$_POST["Name"];
$phoneNumber=$_POST["phoneNumber"];
$Location=$_POST["location"];
$type=$_POST["type"];
$username=$_POST["username"];
mysql_select_db("court");
$sql1=mysql_query("select * from user where national_id='$National_id'");
if(mysql_num_rows($sql1)>0)
{
	?>

<img src="img/exclamation-red.png"> <?
echo " <b> The national id number is already registered</b>";
}
else{
$sql=mysql_query("insert into user Values('','$National_id','$Name','$phoneNumber','$Location','$type','$username','password','offline')");
if(!$sql){
	?>
<img src="img/exclamation-red.png"> <?
echo "something went wrong".mysql_error();
}
else
{
echo "<b>".$Name. "</b>";
?><img src="img/tick-circle.png"> <?
echo " successfully added";
}}


?>