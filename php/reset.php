<?php
include("connection.php");
$reset=$_POST["search"];
mysql_select_db("court");
$sql1= mysql_query("select * from user where national_id='$reset'");
if(mysql_num_rows($sql1)==0)
{
	?>
<img src="img/exclamation-red.png"> <?
echo "no record found for <b>$reset</b>";

}
else{
$row=mysql_fetch_array($sql1);
$name=$row['Name'];
$sql=mysql_query("update user set password='password' where national_id='$reset' ");
if(!$sql){
	?>
<img src="img/exclamation-red.png"> <?
echo "something went wrong";
}
else
{
?><img src="img/tick-circle.png"> <?
echo "\t successifully reset <b> $name  </b>'s password";
}}
?>