<?php
include("connection.php");
mysql_select_db("court");
$delet2=$_POST["delet"];
$report=$_POST['report'];
$sql4=mysql_query("select * from case_details where status !='closed' and case_id='$delet2' ");
if(mysql_num_rows($sql4)==0)
{
?>
<img src="img/exclamation-red.png"> <?
echo "The has already been the closed";
}
else{
$row=mysql_fetch_array($sql4);
$hearing0= $row['hearing'];
$sql1=mysql_query("update  case_details 
	set judgement='$report',status='closed', hearing='$hearing0+1' where case_id='$delet2'   ");
if(!$sql1){
	?>
<img src="img/exclamation-red.png"> <?
echo "something went wrong";
}
else
{
echo "<b>".$delet2. "</b>";
?><img src="img/tick-circle.png"> <?
echo "successifully updated";
}}
