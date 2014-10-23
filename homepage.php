<?php session_start(); 
if($_SESSION['type']!='USER')
{
  header("location:login.php");
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
include("php/connection.php");
//include("php/addCase.php");
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
</EM></B><button id="toggle1">ACCUSED</button></EM></B>
</EM></B><button id="toggle2">ACCUSOR</button></EM></B>
</EM></B><button id="toggle3">CASE</button></EM></B>
</EM></B><button id="toggle4">WITNESSES</button></EM></B>

<div id='forms'>

<div style="display: none;" id="form1">
	<fieldset>
<form action="" method="post">
<input type="text" size="70"   name="AccussorId" id="AccussorId" placeholder="enter the accused id number"  autocomplete="off"><span id="s"></span>
<br/>
<br/>
<input type="text" size="70"  name="AccussorName" id="AccussorName" placeholder="enter the name of the Accused"  autocomplete="off"><span id="si"></span>
<br/>
<br/>
  <select id="caseId"  size="1" style="width:450px; height: 35px;">
            <option value="case number">select case number</option>
            <?php
            mysql_select_db("court");
            $sql1=mysql_query("select * from case_details") or die(mysql_error());
             while($row=mysql_fetch_array($sql1))
            { 
    
     echo "<option>" .$row['case_id']."</option>";
    }
       ?>
              </select>
              <span id="s1">  </span>
<br/>
<br>
  <select id="lawyer_id2"  size="1" style="width:450px; height: 35px;">
            <option>lawyer_name</option>
            <?php
            mysql_select_db("court");
            $sql1=mysql_query("select * from lawyer") or die(mysql_error());
             while($row=mysql_fetch_array($sql1))
            { 
    
     echo "<option>" .$row['lawyer_id']."</option>";
    }
       ?>
       
              </select>
              <span id="s2"></span>
<br/>
<br/>
<input type="submit" value="add" name="submit5" id="submit5" onclick="return false";/>
</form> 
&nbsp;&nbsp;&nbsp;&nbsp;
<span id="result5">  </span>
</fieldset>

</div>

<div style="display: none;" id="form2" align="center">
		<fieldset>
			
<form action="php/addAccused.php" method="post">
<input type="text" size="70"    name="AccusedId" id="AccusedId" placeholder="enter the Accusors id number"  autocomplete="off"><span id="w"></span>
<br/>
<br/>
<input type="text" size="70"  name="AccusedName" id="AccusedName" placeholder="enter the accussors name"  autocomplete="off"><span id="wi"></span>
<br/>
<br/>
  <select id="caseme"  size="1" style="width:450px; height: 35px;">
            <option>case number</option>
            <?php
            mysql_select_db("court");
            $sql1=mysql_query("select * from case_details") or die(mysql_error());
             while($row=mysql_fetch_array($sql1))
            { 
    
     echo "<option>" .$row['case_id']."</option>";
    }
       ?>
              </select>
              <span id="result9">  </span>
<br/>
<br/>
  <select id="rawyer"  size="1" style="width:450px; height: 35px;">
            <option>lawyer_name</option>
            <?php
            mysql_select_db("court");
            $sql1=mysql_query("select * from lawyer") or die(mysql_error());
             while($row=mysql_fetch_array($sql1))
            { 
    
     echo "<option>" .$row['lawyer_id']."</option>";
    }
       ?>
     
              </select>
              <span id="m0"></span>
<br/>
<br/>
<input type="submit" value="add" name="submit7" id="submit7" onclick="return false";/>
</form>
&nbsp;&nbsp;&nbsp;&nbsp;
<span id="result6">  </span>
</fieldset>
</div>

<div style="display: none;" id="form3" align="center">
		<fieldset>
		
<form action="" method="post">
<textarea id="textarea"  cols="81"  name="charges"  placeholder="enter the name of the charges"></textarea><span id="charges1"></span></p>
<br/>
<br/>
  <select id="judge"  size="1" style="width:450px; height: 35px;">
            <option value="select judge">select judge</option>
            <?php
            mysql_select_db("court");
            $sql1=mysql_query("select * from judge") or die(mysql_error());
            while($row=mysql_fetch_array($sql1))
            { 
 		
		 echo "<option>" .$row['judge_id']."</option>";
    }
			 ?>
              </select>
              <span id="judge1"></span>
              
<br/>
<br/>
 
  <select id="prosecutor"  size="1" style="width:450px; height: 35px;">
            <option value="select prosecutor">select prosecutor</option>
            <?php
            mysql_select_db("court");
            $sql1=mysql_query("select * from prosecutor") or die(mysql_error());
             while($row=mysql_fetch_array($sql1))
            { 
 		
		 echo "<option>" .$row['prosecutor_id']."</option>";
    }
			 ?>
              </select>
              <span id="prosecutor1"></span>
               
<br/>
<br/>
 
  <select id="clerk"  size="1" style="width:450px; height: 35px;">
            <option id="select clerk">select clerk</option>
            <?php
            mysql_select_db("court");
            $sql1=mysql_query("select * from clerk") or die(mysql_error());
           while($row=mysql_fetch_array($sql1))
           	{		
		 echo "<option>" .$row['Clerk_id']."</option>";
		}
			 ?>
              </select>
              <span id="clerk1"></span>
               

<br/>
<br/>

  <select id="accused"  size="1" style="width:450px; height: 35px;">
            <option id="select Accused">select Accused</option>
            <?php
            mysql_select_db("court");
            $sql1=mysql_query("select * from accused") or die(mysql_error());
           while($row=mysql_fetch_array($sql1))
           	{		
		 echo "<option>" .$row['Accused_id']."</option>";
		}
			 ?>
              </select>
              <span id="accused1"></span>
               
<br/>
<br/>
  <select id="accusor"  size="1" style="width:450px; height: 35px;">
            <option id="select Accussor">select Accussor</option>
            <?php
            mysql_select_db("court");
            $sql1=mysql_query("select * from accusor") or die(mysql_error());
           while($row=mysql_fetch_array($sql1))
           	{		
		 echo "<option>" .$row['Accusor_id']."</option>";
		}
			 ?>
              </select>
              <span id="accusor1"></span>
<br/>
<br/>


  <select id="court"  size="1" style="width:450px; height: 35px;">
            <option id="select court">select court</option>
            <?php
            mysql_select_db("court");
            $sql1=mysql_query("select * from court") or die(mysql_error());
           while($row=mysql_fetch_array($sql1))
            {   
     echo "<option>" .$row['court_id']."</option>";
    }
       ?>
              </select>
              <span id="court1"></span>
               

<br/>
<br/>             
<input type="submit" value="add" name="submitz" id="submitz" onclick="return false";/>
</form>
<span id="resultz"></span>
</fieldset>
</div>
<div style="display: none;" id="form4">
		<fieldset>
<form action="php/addWitness.php" method="post">
<input type="text" size="70"  name="witness_id" id="witness_id" placeholder="enter the witness id number"  autocomplete="off"><span id="m"></span>
<br/>
<br/>
<input type="text" size="70"  name="witness_name" id="witness_name" placeholder="enter the name of the witness"  autocomplete="off"><span id="mi"></span>
<br/>
<br/>
  <select id="caseId4"  size="1" style="width:460px; height: 35px;">
            <option>case number</option>
            <?php
            mysql_select_db("court");
            $sql1=mysql_query("select * from case_details") or die(mysql_error());
             while($row=mysql_fetch_array($sql1))
            { 
    
         echo "<option>" .$row['case_id']."</option>";
             }
           ?>
              </select>
              <span id="mo"></span>
<br/>
<br/>
<select id="SIDE"  size="1" style="width:460px; height: 35px;">
            <option >CHOOSE THE WITNESS SIDE</option>        
            <option >ACCUSOR</option> 
            <option >ACCUSED</option> 
              </select>
              <span id="mu"></span>
<br/>
<br/>   
<input type="submit" value="add" name="submit100" id="submit100" onclick="return false";>
</form> 

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<span id="result100">  </span>
</fieldset>
</div>
</div>

<script type="text/javascript" src="js/refreshi.js"></script>
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
<script type="text/javascript" src="js/case.js"></script>
<div id="footer" align="center">
   BY JOSIAH &trade; &nbsp;  &nbsp; &nbsp;       <?php 
    ?>&copy;<? echo date(' F D jS Y ');
   ?>
</div>
</div>
</body>
</html>