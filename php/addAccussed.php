<?php
include("connection.php");
$AccusedId=$_POST["AccusedId"];
$AccusedName=$_POST["AccusedName"];
$CaseId=$_POST["caseme"];
$lawyer_id1=$_POST['rawyer'];
mysql_select_db("court");
$sql1=mysql_query("select * from accusor where Accusor_id='$AccusedId'");
if(mysql_num_rows($sql1)>0)
{
	?>

<img src="img/exclamation-red.png"> <?
echo " <b> The accussor is already registered</b>";
}
else{
$sql=mysql_query("insert into accusor Values('','$AccusedId','$AccusedName','$CaseId','$lawyer_id1')");
if(!$sql){
	?>
<img src="img/exclamation-red.png"> <?
echo "something went wrong";
}
else
{
echo "<b>".$AccusedName.  "</b>";
?><img src="img/tick-circle.png"> <?
echo "successfully added";
}}


?>