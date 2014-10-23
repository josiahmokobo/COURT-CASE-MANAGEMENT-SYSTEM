<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
</EM></B><button id="toggle1">ADD A JUDGE</button></EM></B>
</EM></B><button id="toggle2">ADD A PROCECUTOR</button></EM></B>
</EM></B><button id="toggle3">ADD A CLERK</button></EM></B>
</EM></B><button id="toggle4">ADD A NEW COURT</button></EM></B>
</EM></B><button id="toggle6">ADD A LAWYER</button></EM></B>
<div id='forms'>

<div style="display: none;" id="form1">
	<fieldset>
<form action="php/addJudge.php" method="post">
<input type="text" size="70"   name="JudgeId" id="jid" placeholder="enter the judge id"  autocomplete="off"><span id="id"></span>
<br/>
<br/>
<input type="text" size="70"  name="JudgeName" id="jname" placeholder="enter the name of the judge"  autocomplete="off"><span id="name"></span>
<br/>
<br/>
<input type="submit" value="add" name="submit1" id="submit1" onclick="return false";/>
</form>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<span id="results">  </span>
</fieldset>

</div>

<div style="display: none;" id="form2">
		<fieldset>
			
<form action="php/addProsecutor.php" method="post">
<input type="text" size="70"    name="ProIdd" id="ProIdd" placeholder="prosecutor id"  autocomplete="off"><span id="pro"></span>
<br/>
</br>
<input type="text" size="70"  name="ProName" id="ProName" placeholder="prosecutor name"  autocomplete="off"><span id="ProNa"></span>
<br/>
<br/>
<input type="submit" value="add" name="submit2" id="submit2" onclick="return false";/>
</form>
&nbsp;&nbsp;&nbsp;&nbsp;
<span id="result1">  </span>
</fieldset>
</div>

<div style="display: none;" id="form3">
		<fieldset>
		
<form action="php/addClerk.php" method="post">
<input type="text" size="70"   name="ClerkId" id="ClerkId" placeholder="enter the clerk id"  autocomplete="off"><span id="id1"></span>
<br/>
<br/> 
<input type="text" size="70"  name="ClerkName" id="ClerkName" placeholder="enter the name of the clerk"  autocomplete="off"><span id="name1"></span>
<br/> 
<br/>
<input type="submit" value="add" name="submit3" id="submit3" onclick="return false";/>
</form>
&nbsp;&nbsp;&nbsp;&nbsp;
<span id="result3">  </span>
</fieldset>
</div>
<div style="display: none;" id="form4">
		<fieldset>
<form action="php/addCourt.php" method="post">
<input type="text" size="70"  name="court_id" id="court_id" placeholder="enter the court id"  autocomplete="off"><span id="courtID"></span>
<br/>
<br/>
<input type="text" size="70"  name="court_name" id="court_name" placeholder="enter the  court"  autocomplete="off"><span id="courtN"></span>
<br/>
<br/>
 <select id="clerk_id"  size="1" style="width:460px; height: 35px;">
       <option value="select clerk">select clerk</option>
       <?php
        include("php/connection.php");
            mysql_select_db("court");
            $sql1=mysql_query("select * from clerk") or die(mysql_error());
            while($row=mysql_fetch_array($sql1)){
		 echo "<option>" .$row['Clerk_id']."</option>";
          }
?>
</select>
<span id="clerk"></span>
<br/>
<br/>
 <select id="judge_id"  size="1" style="width:460px; height: 35px;">
       <option value="select judge">select judge</option>
       <?php
        include("php/connection.php");
            mysql_select_db("court");
            $sql1=mysql_query("select * from judge") or die(mysql_error());
            while($row=mysql_fetch_array($sql1)){
		 echo "<option>" .$row['judge_id']."</option>";
          }
?>
</select> 
<span id="judge"></span>
<br/>
<br/>
 <select id="prosecutor_id"  size="1" style="width:460px; height: 35px;">
       <option value="select prosecutor">select prosecutor</option>
       <?php
        include("php/connection.php");
            mysql_select_db("court");
            $sql1=mysql_query("select * from prosecutor") or die(mysql_error());
            while($row=mysql_fetch_array($sql1)){
		 echo "<option>" .$row['prosecutor_id']."</option>";
          }
?>
</select>
<span id="prosecutor"></span>
<br/>
<br/>
<input type="submit" value="add" name="submit4" id="submit4" onclick="return false";>
</form>
&nbsp;&nbsp;&nbsp;&nbsp;
<span id="result4">  </span>
</fieldset>

</div>
<div style="display: none;" id="form6">
  <fieldset>
<form action="php/addJudge.php" method="post">
<input type="text" size="70"   name="lawyerid" id="lawyerid" placeholder="enter the lawyer's  id"  autocomplete="off"><span id="id2"></span>
<br/>
<br/>
<input type="text" size="70"  name="lawyerName" id="lawyerName" placeholder="enter the name of the lawyer"  autocomplete="off"><span id="name2"></span>
<br/>
<br/>
<input type="submit" value="add" name="submit20" id="submit20" onclick="return false";/>
</form>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<span id="result20">  </span>
</fieldset>

</div>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/toggle.js"></script>
<script type="text/javascript" src="js/judge.js"></script>
<script type="text/javascript" src="js/prosecutor.js"></script>
<script type="text/javascript" src="js/clerk.js"></script>
<script type="text/javascript" src="js/court.js"></script>
<script type="text/javascript" src="js/button.js"></script>
<script type="text/javascript" src="js/lawyer.js"></script>
<div id="footer" align="center">
   BY JOSIAH &trade; &nbsp;  &nbsp; &nbsp;       <?php 
    ?>&copy;<?
echo date('d M y', strtotime('now'));
echo "<br>";
  ?>
</div>
</div>
</body>
</html>