<?php
session_start();
if($_SESSION['type']=='USER')
{

	$name =$_SESSION["name"];
	$phone =$_SESSION["phone"];
	$national_id= $_SESSION["national_id"];	
	$type =$_SESSION["type"];
	
}
else
{
	header("location:login.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>CASE</title> 


</script>
<link rel="stylesheet" type="text/css" media="screen" href="bin/css/main.css" />
<link rel="st
var jname=$("#jname").val();ylesheet" type="text/css" media="screen" href="bin/css/jquery-ui-1.8.14.custom.css" />
<link rel="stylesheet" href="bin/header/style.css" type="text/css" /><style>._css3m{display:none}</style>

</head>
<body>
<div id="container">
<div id="header">
<img src="img/hi.png" height="50" >
<span align="center" style="font-family: verdana; font-size:34;clear:both;">GOVERNMENT OF KENYA </span>
		</a><span style="width: 200px; float: right;">hello <?php echo $_SESSION["name"]; ?>&nbsp;&nbsp;&nbsp;&nbsp; <a href="http://localhost/case/php/kill.php"><span>logout</span></a> </span><span style="float:right;font-size:12px;">
<span>
</div>
<div id="photo" align="center">
<img src="img/header.jpg" alt="napenda kenya ">
</div>
<hr> 
<div align="center">
<a href="homepage.php"><span align="center"><button id="employess">add case details</button></span></a>
&nbsp;&nbsp; 
<a href="index.php"><span align="center"><button id="employess">add employess</button></span></a>
</div>
<?php
$per_page = 2;
include 'config.php';
$link=mysql_connect("$hostname","$username","$password")or 
die('Could not connect: ' . mysql_error());
if(mysql_select_db("$dbname",$link)) 
{
$count=mysql_query("select count(*) from $tablename") or die(mysql_error());
$row2 = mysql_fetch_row($count);
   $total=$row2[0];
$pages = ceil($total/$per_page);
}
?>
<div align="left" id='content2'>
		<div class="search-background">
			<label><img src="loader.gif" alt="" /></label>
		</div>
		<div id="content">
		&nbsp;
		</div>
<table id="paging_button" align="center" style='margin-left: 375px; display: none;'>
<tr><td>
		<ul>
		<?php
		//Show page links
		for($i=1; $i<=$pages; $i++)
		{
			echo '<li id="'.$i.'">'.$i.'</li>';
		}?>
		</ul>
	</td>
	</tr>
	</table>
</div>
<div align=center style='font-size: 10px; color: magenta;'></div>

<input style="display: none;" type="text" value="<?php echo $_SESSION["ids"]?>" id="ids">
<span style="display: none;" >
<p class="error_box"></p>
        </span>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/button.js"></script>
<script type="text/javascript" src="js/refresh.js"></script>
<script type="text/javascript" src="js/pagination.js"></script>
<script type="text/javascript" src="js/addemp.js"></script>


<div id="footer" align="center">
   BY JOSIAH &trade; &nbsp;  &nbsp; &nbsp;       <?php 
    ?>&copy;<? echo date(' F D jS Y ');
   ?>
</div>
</div>
</body>
</html>