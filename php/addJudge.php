<?php
include("connection.php");
$judgeid=$_POST["jid"];
$JudgeName=$_POST["jname"];
mysql_select_db("court");
$sql=mysql_query("insert into judge Values('','$judgeid','$JudgeName')") or die(mysql_error());
if(!$sql){
	?>
<img src="img/exclamation-red.png"> <?
echo "something went wrong";
}
else
{
echo "<b>".$_POST["jname"]. "</b>";
?><img src="img/tick-circle.png"> <?
echo "successfully added";
}


?>
 