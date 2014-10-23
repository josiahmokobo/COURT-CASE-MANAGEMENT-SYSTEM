<?php
include("connection.php");
$court_id=$_POST["court_id"];
$court_name=$_POST["court_name"];
$clerk_id=$_POST["clerk_id"];
$judge_id=$_POST["judge_id"];
$prosecutor_id=$_POST["prosecutor_id"];
mysql_select_db("court");
$sql=mysql_query("insert into court Values('','$court_id','$court_name','$clerk_id','$judge_id','$prosecutor_id')") or die(mysql_error());
if(!$sql){
	?>
<img src="img/exclamation-red.png"> <?
echo "something went wrong";
}
else
{
echo "<b>".$court_name. "</b>";	
?><img src="img/tick-circle.png"> <?
echo "successfully added";
}


?>