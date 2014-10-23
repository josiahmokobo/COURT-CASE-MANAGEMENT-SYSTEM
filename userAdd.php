<?php
session_start();
if($_SESSION['type']=='ADMIN')
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
</EM></B><button id="toggle1">ADD USER</button></EM></B>
</EM></B><button id="toggle2">DELETE USER</button></EM></B>
</EM></B><button id="toggle4">RESET USERS PASSWORD</button></EM></B>
</EM></B><button id="toggle5">VIEW ALL USERS </button></EM></B>
<div id='forms'>

<div style="display: none;" id="form1">
	<fieldset>
<form action="" method="post">
<input type="tel" size="70"   name="National_id" id="National_id" placeholder="enter the users national id number"  autocomplete="off">
<span id="National_ida"></span>
<br/>
<br/>
<input type="text" size="70"  name="Name" id="Name" placeholder="enter the name of the user"  autocomplete="off">
<span id="Namea"></span>
<br/>
<br/>
<input type="text" size="70"  name="phoneNumber" id="phoneNumber" placeholder="enter the phone number of user"  autocomplete="off"/>
<span id="phoneNumbera"></span>
<br/>
<br/>
<input type="text" size="70"  name="Location" id="Location" placeholder="enter the Location" autocomplete="off"/>
<span id="Locationa"></span>
<br/>
<br/>

<select id="type" size="1" style="width:460px; height: 35px;">
<option>choose user type</option>	
<option>JUDGE</option>
<option>PROSECUTOR</option>
<option>CLERK</option>
<option>USER</option>
<option>ADMIN</option>
</select>
<span id="typea"></span>
<br/>
<br/>
<input type="text" size="70"  name="username" id="username" placeholder="enter the username"  autocomplete="off"/>
<span id="usernamea"></span>
<br/>
<br/>
<input type="submit" value="add" name="submitu" id="submitu" onclick="return false";/>
&nbsp;&nbsp;&nbsp;&nbsp;
<span id="resultu">  </span>
</form>

</fieldset>

</div>
<div style="display: none;" id="form2">
<fieldset>
<form>
<input type="text" size="70"    name="srch" id="srch" placeholder="enter your search here"  autocomplete="off"/><span id="searcha"></span>
<br>
<br>
<input type="submit" value="search by id number" name="search" id="search" onclick="return false";/>
</form>	
<br/>
<br/>	
	<div align="center"><span id="resultb">  </span></div>
</fieldset>
</div>
<div>

</div>
<div style="display: none;" id="form4">
<fieldset>
<form>
<input type="text" size="70"    name="srchme" id="srchme" placeholder="enter your search here"  autocomplete="off"/>
	<span id="searchb"></span>
	<br/>	
	<br/>
	<input type="submit" value="reset password" name="searchs" id="searchs" onclick="return false";/>
</form>
	&nbsp;&nbsp;&nbsp;&nbsp;
<span id="resultd">  </span>
</fieldset>
</div>

<div style="display: none;" id="form5">
<fieldset>
<input type="submit" value="view all users" name="view" id="view" onclick="return false";/>
<?php
$per_page = 2;
include 'config.php';
$link=mysql_connect("localhost","root","")or 
die('Could not connect: ' . mysql_error());
if(mysql_select_db("court")) 
{
$count=mysql_query("select * from user") or die(mysql_error());
$row2 = mysql_fetch_row($count);
   $total=mysql_num_rows($count);
$pages = ceil($total/$per_page);

}
?>
<div align="left" id='content1' style="font-family: gabriola; font-size: 17;">
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
		//echo $pages;
		for($i=1; $i<=$pages; $i++)
		{
			echo '<li id="'.$i.'">'.$i.'</li>';
		}?>
		</ul>
	</td>
	</tr>
	</table>
</fieldset>
</div>

</div>
</div>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/toggle.js"></script>
<script type="text/javascript" src="js/judge.js"></script>
<script type="text/javascript" src="js/prosecutor.js"></script>
<script type="text/javascript" src="js/clerk.js"></script>
<script type="text/javascript" src="js/court.js"></script>
<script type="text/javascript" src="js/button.js"></script>
<script type="text/javascript" src="js/accussor.js"></script>
<script type="text/javascript" src="js/Accused.js"></script>
<script type="text/javascript" src="js/witness.js"></script>
<script type="text/javascript" src="js/user.js"></script>
<script type="text/javascript" src="js/search.js"></script>
<script type="text/javascript" src="js/delete.js"></script>
<script type="text/javascript" src="js/searchs.js"></script>
<script type="text/javascript" src="js/view.js"></script>

<div id="footer" align="center">
   BY JOSIAH &trade; &nbsp;  &nbsp; &nbsp;       <?php 
    ?>&copy;<? echo date(' F D jS Y ');
   ?>
</div>
</div>
</body>
</html>