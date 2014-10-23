<?php
include("connection.php");
$witness_id=$_POST["witness_id"];
$witness_name=$_POST["witness_name"];
$caseId=$_POST["caseId"];
$side=$_POST["side"];
mysql_select_db("court");
$sql1=mysql_query("select * from witness where ID_NUMBER='$witness_id'");
if(mysql_num_rows($sql1)>0)
{
	?>

<img src="img/exclamation-red.png"> <?
echo " <b> The witness is already registered</b>";
}
else{
$sql=mysql_query("insert into witness Values('','$witness_id','$witness_name','$caseId','$side')");
if(!$sql){
	?>
<img src="img/exclamation-red.png"> <?
echo "something went wrong";
}
else
{
echo "<b>".$witness_name. "</b>";
?><img src="img/tick-circle.png"> <?
echo "successfully added";
}}


?>