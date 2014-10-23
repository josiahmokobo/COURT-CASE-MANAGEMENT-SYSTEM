<?php
include("connection.php");
$AccussorId=$_POST["AccussorId"];
$AccussorName=$_POST["AccussorName"];
$caseId=$_POST["caseId"];
$lawyer_id2=$_POST['lawyer_id2'];
mysql_select_db("court");
$sql1=mysql_query("select * from accused where Accused_id='$AccussorId'") or mysql_error();
if(mysql_num_rows($sql1)>0)
{
	?>

<img src="img/exclamation-red.png"> <?
echo " <b> The accussed is already registered</b>";
}
else{
$sql=mysql_query("insert into accused Values('','$AccussorId','$AccussorName','$caseId',$lawyer_id2)") or mysql_error();
if(!$sql){
	?>
<img src="img/exclamation-red.png"> <?
echo "something went wrong".mysql_error();
}
else
{
echo "<b>".$AccussorName. "</b>";
?><img src="img/tick-circle.png"> <?
echo "successfully added";
}}


?>