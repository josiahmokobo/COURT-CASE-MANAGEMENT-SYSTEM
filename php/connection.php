<?php
$con= mysql_connect("localhost","root","");
if(!$con)
{
	?> <img src="img/status-offline.png"><?
	
	printf("server offline");
}
else
{
	echo "             ";
	?>

  
	<?

}
?>