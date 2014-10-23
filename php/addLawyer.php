<?php
include("connection.php");
$lawyerid=$_POST["lawyerid"];
$lawyerName=$_POST["lawyerName"];
mysql_select_db("court");
$sql=mysql_query("insert into lawyer Values('','$lawyerid','$lawyerName')") or die(mysql_error());
if(!$sql){
	?>
<img src="img/exclamation-red.png"> <?
echo "something went wrong";
}
else
{
echo "<b>".$_POST["lawyerName"]. "</b>";
?><img src="img/tick-circle.png"> <?
echo "successfully added";
}


?>