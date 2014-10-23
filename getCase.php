<?php
session_start();
if($_SESSION['type']=='clerk' || $_SESSION['type']=='prosecutor')
{

    $name =$_SESSION["name"];
    $phone =$_SESSION["phone"];
    $national_id= $_SESSION["national_id"]; 
    $type =$_SESSION["type"];
    $case=$_REQUEST['case_id'];



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

<div "today">
<p align="center" class="error_box" id="loading">case of the day on <font color="blue"> <?php echo date(' F D jS Y '); ?></font></p>
<?php
mysql_connect("localhost","root","");
mysql_select_db("court");
$date=date('d M y',strtotime("now")); 
$sql1=mysql_query("select * from case_details where caseDate='$date' and  status !='closed' and case_id='$case' limit 1 ") or die(mysql_error());
$row=mysql_fetch_array($sql1);
$sql0=mysql_query("select court_name from court where court_id='$row[court_id]' limit 1");
$row1=mysql_fetch_array($sql0);
$court=$row1["court_name"];
$sql1=mysql_query("select judge_name from judge where judge_id='$row[judge]'");
$row2=mysql_fetch_array($sql1);
$judge=$row2["judge_name"];
$sql2=mysql_query("select prosecutor_name from prosecutor where prosecutor_id='$row[prosecutor]' limit 1");
$row3=mysql_fetch_array($sql2);
$prosecutor=$row3["prosecutor_name"];
$sql3=mysql_query("select Clerk_name from clerk where Clerk_id='$row[Clerk_id]' limit 1");
$row4=mysql_fetch_array($sql3);
$clerk=$row4["Clerk_name"];

 ?>
<div align="center" style="font-family: serif;"><span id="head1">HAPPENING</span> <span id="header0">NOW:<font color="blue"><i><?php echo $row['hearing']+1; ?> </i></font> hearing of  case number <font color="blue"><i> <?php echo $row['case_id']; ?> </i></font> at the <font color="blue"><i> <?php echo $court ?> </i></font> court headed by judge <i> <font color="blue"><?php echo $judge; ?> </font></i>
with prosecutor <font color="blue"><i> <?php echo  $prosecutor ?></font> </i>  and clerk <font color="blue"><i><?php echo $clerk; ?></font></i> </span></div>
</div>
<div id="resultb">
<div>
<side id="accusor1">
ACCUSED'S SIDE
 <table class="table table-condensed" style="Border: 1px solid magenta; font-family: Gabriola; font-size:17;" width="300" >
       <thead>
       <tr>
        <th>ACCUSED'S NAME</th>
        <th>ACCUSED OF</th>
        <th>LAWYER</th> 
        <th>WITNESESS</th>
        </tr>
        </thead>

<?php
mysql_connect("localhost","root","");
mysql_select_db("court");
$date=date('d M y',strtotime("now")); 

$sql1=mysql_query("select * from case_details where caseDate='$date' and status !='closed' and case_id='$case' and (Clerk_id='$national_id' or prosecutor='$national_id')");
 echo mysql_num_rows($sql1);
 $row=mysql_fetch_array($sql1);
 ?>
 <tr class="danger">
  <td>
 <?
 $sql6=mysql_query("select * from accused where Accused_id='$row[accused]' ");
 $row7=mysql_fetch_array($sql6);
echo  $row7['Accused_name'];
 ?>
</td>
 <td>
 <?
echo  $row['charges'];
 ?>
 </td>
 <td>
 <?
  $sql4=mysql_query("select * from accused where Accused_id='$row[accused]' ") or die(mysql_error());
 $row4=mysql_fetch_array($sql4);
  $sql6=mysql_query("  select lawyer.lawyer_name from lawyer,accused where
   accused.lawyer_id=lawyer.lawyer_id and accused.lawyer_id='$row4[lawyer_id]'
 ");
 $row9=mysql_fetch_array($sql6);
echo  $row9['lawyer_name'];
 ?>
</td>
 <td>
 <?
 $sql0=mysql_query("select * from witness where case_id='$row[case_id]' and SIDE='ACCUSOR' ") or die(mysql_error());
 ?>
    <ol>
    <?
 while($row0=mysql_fetch_array($sql0))
 {
    
    echo "<li>". $row0["WITNESS_NAME"]."</li>";
 }

 ?>
 </ol>
</td>


 
 </tr>
  <tbody>
  </tbody>
   </table>
</side>
<side id="center">
ACCUSOR'S SIDE
 <table class="table table-condensed" style="Border: 1px solid magenta; font-family: Gabriola; font-size:15;" width="300" >
       <thead>
       <tr>
        <th>ACCUSOR'S NAME</th>
        <th>ACCUSE OF</th>
        <th>LAWYER</th> 
        <th>WITNESESS</th>
        </tr>
        </thead>

<?php
mysql_connect("localhost","root","");
mysql_select_db("court");
$date=date('d M y',strtotime("now")); 

$sql1=mysql_query("select * from case_details where caseDate='$date' and status !='closed' and case_id='$case' and (Clerk_id='$national_id' or prosecutor='$national_id') ");
 $row=mysql_fetch_array($sql1);
 ?>
 <tr class="danger">
  <td>
 <?
 $sql6=mysql_query("select * from accusor where Accusor_id='$row[accusor]' ");
 $row7=mysql_fetch_array($sql6);
echo  $row7['Accusor_name'];
 ?>
</td>
 <td>
 <?
echo  $row['charges'];
 ?>
 </td>
 <td>
 <?
  $sql4=mysql_query("select * from accusor where Accusor_id='$row[accusor]' ") or die(mysql_error());
 $row4=mysql_fetch_array($sql4);
  $sql6=mysql_query("  select lawyer.lawyer_name from lawyer,accusor where
   accusor.lawyer_id=lawyer.lawyer_id and accusor.lawyer_id='$row4[lawyer_id]'
 ");
 $row9=mysql_fetch_array($sql6);
echo  $row9['lawyer_name'];
 ?>
</td>
 <td>
 <?
 $sql0=mysql_query("select * from witness where case_id='$row[case_id]' and SIDE='ACCUSED' ") or die(mysql_error());
 ?>
    <ol>
    <?
 while($row0=mysql_fetch_array($sql0))
 {
    
    echo "<li>". $row0["WITNESS_NAME"]."</li>";
 }

 ?>
 </ol>
</td>
 </tr>
  <tbody>
  </tbody>
   </table>
<button id="see">see all cases today</button>
<button id="inquire">inquiries</button>
</side>

<side id="accused1">
<img src="img/header.jpg" alt="napenda kenya " width="300">
</side>



<input style="display: none;" type="text" value="<?php echo $_SESSION["ids"]?>" id="ids">
<span style="display: none;" >
<p class="error_box"></p>
        </span>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/button.js"></script>
<script type="text/javascript" src="js/happening.js"></script>
<script type="text/javascript" src="js/inquiry.js"></script>
<script type="text/javascript" src="js/refreshi.js"></script>


</div>
<br/>
<br/><br/><br/><br/><br/><br/><br/>
 <div id="span">
    
</div>  
 <div id="span0" style="display: none; border: 1px solid lightgray;" align="center">
 <br>
    <p><input type="text" id="getData" placeholder="please enter case name for search" size="87" />
    </p>
    <span id="spann"></span>
    <br>
    <p><input type="submit" id="submit" value="submit"/></p>
    <br>    
<p>  <span id="spann1"></span></p>
</div> 
 <script type="text/javascript">
$('#submit').click(function() {
var data=$('#getData').val();
if(data=="")
{
    $('#spann').css('color','red').css('font-weight','bold').html('* required');
}
else
{
    var spinner = $("<img src='img/loader.gif' id='spinner' />").insertAfter("#submit"); 
$("#submit").attr('value', 'searching......');
    $.post("php/data.php",{check:"Insert", data:data},
        function(result) 
        {
     $("#submit").attr('value', 'submit');
     spinner.remove();
        var f= result;
        $('#spann1').html(result);
        })
}
});


 </script>

 <div id="spann1"></div>
 </div>
<div id="footer" align="center">
   BY JOSIAH &trade; &nbsp;  &nbsp; &nbsp;       <?php 
    ?>&copy;<? echo date(' F D jS Y ');
   ?>
</div>

    <script type="text/javascript" src="js/jquery"></script>
</div>
</body>
</html>