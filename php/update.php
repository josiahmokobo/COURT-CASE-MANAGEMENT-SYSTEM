<?php
session_start();
include("connection.php");
$date=$_POST["sussy"];
$mdate=$caseDate= date('d M y',strtotime("now + $date days"));
$case_id=$_SESSION['josiah'];
mysql_select_db("court");
$sql4=mysql_query("select * from case_details where case_id='$case_id'  ");
$row=mysql_fetch_array($sql4);
$hearing0= $row['hearing']+1;
$sql1=mysql_query("update  case_details set caseDate='$mdate', hearing='$hearing0' where case_id='$case_id' ");
echo "<b><font color='blue'>The case has been differed for $date days upto <font color='red'>$mdate </font></font><b>";
?>