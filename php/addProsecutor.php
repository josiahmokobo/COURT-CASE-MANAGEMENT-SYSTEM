<?php
include("connection.php");
$ProIdd=$_POST["ProIdd"];
$ProName=$_POST["ProName"];
mysql_select_db("court");
$sql=mysql_query("insert into prosecutor Values('','$ProIdd','$ProName')") or die(mysql_error());
if(!$sql){
	?>
<img src="img/exclamation-red.png"> <?
echo "something went wrong";
}
else
{
echo "<b>".$ProName. "</b>";
?><span><img src="img/tick-circle.png"></span> <?
echo "successfully added";
}


?>