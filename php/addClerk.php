<?php
include("connection.php");
$ClerkId=$_POST["ClerkId"];
$ClerkName=$_POST["ClerkName"];
mysql_select_db("court");
$sql=mysql_query("insert into clerk Values('','$ClerkId','$ClerkName')") or die(mysql_error());
if(!$sql){
	?>
<img src="img/exclamation-red.png"> <?
echo "something went wrong";
}
else
{
echo "<b>".$ClerkName. "</b>";
?><img src="img/tick-circle.png"> <?
echo "successfully added";
}


?>