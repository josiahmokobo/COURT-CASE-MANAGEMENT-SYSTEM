<!DOCTYPE html>
<html>
<head>
<meta http-equiv="refresh" content="5">
	<title></title>
</head>
<body>
<?php
mysql_connect("localhost","root","");
mysql_select_db("court");
$date=date('d M y',strtotime("now"));
$date2=date('d M y',strtotime("now + 1 day"));
$sql=mysql_query("select * from case_details where status !='closed' and caseDate < '$date' ");
if(mysql_num_rows($sql)> 0)
{
while($row=mysql_fetch_array($sql))
{
$sql3=mysql_query("update case_details set caseDate = '$date2' where case_id='$row[case_id]' ");

}

}
?>
</body>
</html>