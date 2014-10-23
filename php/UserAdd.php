<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
//include("bin/con_db.php");
include("php/addCase.php");
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
<a href="./" class="aheader"><h2>CASE FILES REGISTRATION CENTER</h2></a>
		<span style="float:right;font-size:12px;">
<span>
</div>
<div id="photo" align="center">
<img src="img/header.jpg" alt="napenda kenya ">
</div>
<hr> 
</EM></B><button id="toggle1">ACCUSED</button></EM></B>
</EM></B><button id="toggle2">ACCUSOR</button></EM></B>
</EM></B><button id="toggle3">CASE</button></EM></B>
</EM></B><button id="toggle4">WITNESSES</button></EM></B>

<div id='forms'>

<div style="display: none;" id="form1">
	<fieldset>
<form action="php/addAccussor.php" method="post">
<input type="text" size="70"   name="AccussorId" id="AccussorId" placeholder="enter the accused id number"  autocomplete="off">
<br/>
<input type="text" size="70"  name="AccussorName" id="AccussorName" placeholder="enter the name of the Accused"  autocomplete="off">
<br/>
<input type="text" size="70"  name="caseId" id="caseId" placeholder="enter the case id"  autocomplete="off"/>
<br/>
<input type="submit" value="add" name="submit5" id="submit5" onclick="return false";/>
<br/>
</form>
<br/>
<br/> 
&nbsp;&nbsp;&nbsp;&nbsp;
<span id="result5">  </span>
</fieldset>

</div>

<div style="display: none;" id="form2">
		<fieldset>
			
<form action="php/addAccused.php" method="post">
<input type="text" size="70"    name="AccusedId" id="AccusedId" placeholder="enter the Accusors id number"  autocomplete="off">
<br/>
<input type="text" size="70"  name="AccusedName" id="AccusedName" placeholder="enter the accussors name"  autocomplete="off">
<br/>
<input type="text" size="70"  name="CaseId" id="CaseId" placeholder="enter the case id"  autocomplete="off"/>
<br/>
<input type="submit" value="add" name="submit6" id="submit6" onclick="return false";/>
<br/>
</form>
<br/> 
<br/> 
&nbsp;&nbsp;&nbsp;&nbsp;
<span id="result6">  </span>
</fieldset>
</div>

<div style="display: none;" id="form3">
		<fieldset>
		
<form action="php/addClerk.php" method="post">
<input type="text" size="70"   name="ClerkId" id="ClerkId" placeholder="enter the clerk id"  autocomplete="off">
<br/> 
<input type="text" size="70"  name="ClerkName" id="ClerkName" placeholder="enter the name of the clerk"  autocomplete="off">
<br/> 
<input type="text" size="70"  name="accusedName" id="senderN" placeholder="enter the name of the accused"  autocomplete="off"/>
<br/>
<input type="text" size="70"  name="accusedName" id="senderN" placeholder="enter the name of the accused"  autocomplete="off"/>
<br/>
<input type="text" size="70"  name="accusedName" id="senderN" placeholder="enter the name of the accused"  autocomplete="off"/>
<br/>
<input type="text" size="70"  name="accusedName" id="senderN" placeholder="enter the name of the accused"  autocomplete="off"/>
<br/>
<input type="text" size="70"  name="accusedName" id="senderN" placeholder="enter the name of the accused"  autocomplete="off"/>
<br/>
<input type="text" size="70"  name="accusedName" id="senderN" placeholder="enter the name of the accused"  autocomplete="off"/>
<br/>
<input type="text" size="70"  name="accusedName" id="senderN" placeholder="enter the name of the accused"  autocomplete="off"/>
<br/>
<input type="text" size="70"  name="accusedName" id="senderN" placeholder="enter the name of the accused"  autocomplete="off"/>
<br/>
<input type="text" size="70"  name="accusedName" id="senderN" placeholder="enter the name of the accused"  autocomplete="off"/>
<br/>
<input
<input type="submit" value="add" name="submit3" id="submit3" onclick="return false";/>
<br/>
</form>
<br/>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;
<span id="result3">  </span>
</fieldset>
</div>
<div style="display: none;" id="form4">
		<fieldset>
<form action="php/addWitness.php" method="post">
<input type="text" size="70"  name="witness_id" id="witness_id" placeholder="enter the witness id number"  autocomplete="off">
<br/>
<input type="text" size="70"  name="witness_name" id="witness_name" placeholder="enter the name of the witness"  autocomplete="off">
<br/>
<input type="text" size="70"  name="case_id" id="case_id" placeholder="enter the case id"  autocomplete="off"/>
<br/>
<input type="submit" value="add" name="submit7" id="submit7" onclick="return false";>
<br/>
</form>
<br/>
<br/> 
&nbsp;&nbsp;&nbsp;&nbsp;
<span id="result7">  </span>
</fieldset>

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

<div id="footer" align="center">
   BY JOSIAH &trade; &nbsp;  &nbsp; &nbsp;       <?php 
    ?>&copy;<? echo date(' F D jS Y ');
   ?>
</div>
</div>
</body>
</html>                