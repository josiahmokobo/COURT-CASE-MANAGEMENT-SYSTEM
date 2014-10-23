<?php
session_start();
?>
</div>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>CASE</title> 
<link rel="stylesheet" type="text/css" media="screen" href="bin/css/main.css" />
<link rel="st
var jname=$("#jname").val();ylesheet" type="text/css" media="screen" href="bin/css/jquery-ui-1.8.14.custom.css" />
<link rel="stylesheet" href="bin/header/style.css" type="text/css" /><style>._css3m{display:none}</style>
<div id="header">
<img src="img/hi.png" height="50" >
<span align="center" style="font-family: verdana; font-size:34;clear:both;">GOVERNMENT OF KENYA </span>
		</a>
<span>
</div></head>
<body>

<div style="background: purple; color: white; height: 450px; display: none; border-radius: .2em; margin-top: 0px; " id="top">
<p align="center" id="page"><b><i>YOU MUST LOGIN IN FIRST:::</i></b></p>
<b><div id="resultL" align="center" >LOGIN PAGE</div></b>

</p>
 
<span id='img2' ><img src="img/login (2).jpg" width="250"> </span>
<div id="form0">
<form action="" method="post">
<span><input type="text" size="40"   name="username" id="username" placeholder="Enter your username here"  autocomplete="off"><span id="usernam"></span></span>
<br/>
<br/>
<br/>
<span><input type="password" size="40"  name="password" id="password" placeholder="Enter your password here"  autocomplete="off"><span id="pass"></span></span>
<br/>
<span id="me" align="right"><input type="submit" value="submit" name="submitL" id="submitL" onclick="return false";/></span>
<div id="resultL" style="margin-left:300px; width:300px;"></div>
</form>

</div>
</div>

<div style="background: lightblue; color: white; height: 50px; display: none; border-radius: .2em;" id="bottom">
<div id="footer" align="center">
   BY JOSIAH &trade; &nbsp;  &nbsp; &nbsp;       <?php 
    ?>&copy;<? echo date(' F D jS Y ');
   ?>
</div>
</div>


<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/hide.js"></script>
<script type="text/javascript" src="js/login.js"></script>
<script type="text/javascript" src="js/doc.js"></script>

</body>
</html>