<?php
session_start();
if($_SESSION['type']!="judge")
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
</EM></B><button id="toggle1">JUDGEMENT</button></EM></B>
</div>
<div id='forms'>

<div style="display: none;" id="form1">
<fieldset>
<form>
<input type="text" size="70"    name="srch" id="srch" placeholder="enter your case number to search the case"  autocomplete="off"/><span id="good"></span>
<br>
<br>
<input type="submit" value="search the case here" name="judgement" id="judgement" onclick="return false";/>
</form>
<br/>	
	&nbsp;&nbsp;&nbsp;&nbsp;
<span id="result8"> 

</div>


 </span>
</fieldset>
</div>

</div>
</div>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/toggle.js"></script>
<script type="text/javascript" src="js/button.js"></script>
<script type="text/javascript" src="js/judgement.js"></script>

<div id="footer" align="center">
   BY JOSIAH &trade; &nbsp;  &nbsp; &nbsp;       <?php 
    ?>&copy;<? echo date(' F D jS Y ');
   ?>
</div>
</div>
</body>
</html>