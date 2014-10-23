<?php
include("connection.php");
$charges=$_POST["charges"];
$judge=$_POST["judge"];
$prosecutor=$_POST["prosecutor"];
$clerk=$_POST["clerk"];
$accused=$_POST["accused"];
$accusor=$_POST["accusor"];
$court=$_POST["court"];
$caseDate= date('d M y',strtotime("now + 14 days")); 
mysql_select_db("court") or die(mysql_error());
$case_id=rand(1000,100000000);
$sql4=mysql_query("select * from  case_details where case_id='$case_id' "); 
if(mysql_num_rows($sql4)>0)
{
$case_id=rand(1,100000000);
}
else
{
$sql8=mysql_query("select * from  case_details where judge='$judge' and status='pending' and charges='$charges' and judge='$judge' and prosecutor='$prosecutor' and Clerk_id='$clerk' and 
accused='$accused' and accusor='$accusor' and court_id='$court' ");
$countz= mysql_num_rows($sql8);
$row=mysql_fetch_array($sql8);
$caseI= $row['case_id'];
$sql1=mysql_query("select * from  case_details where judge='$judge' and status='pending' ");
if(mysql_num_rows($sql1)>3)
{
?>
<img src="img/exclamation-red.png"> <?php
echo "<b>$judge </b> already assigned maximum number of cases";
}
else if($countz==1)
{
?>
<img src="img/exclamation-red.png"> <?php
echo "The above case is already registered and its case number is <font color='red'><i>$caseI</i></font>";
}
else{
$sql1=mysql_query("insert into case_details Values('67','$case_id','$judge','$caseDate','$clerk','$prosecutor','$charges','$accused','$accusor','pending','',$court,'')");
if(!$sql1){
	?>
<img src="img/exclamation-red.png"> <?
echo "something went wrong try again";
}
else
{
$sql4=mysql_query("select * from  case_details where judge='$judge'");
$row =mysql_fetch_array($sql4);
echo "<b>".$charges. " case </b>";	
?><img src="img/tick-circle.png"> <?
echo "successfully added and the case number is <b>".$row['case_id']. " </b>" ;
?>
<br/><br/>
<span><a href="pdf/index.php?case_id=<?php echo $row['case_id'] ?>"> <button>print for accused </button></a></span>
<!--<span> <a href="pdf/index0.php? case_id=<?php echo $row['case_id'] ?>"> <button>print for the accusor</button></a></span>
--><br/>
<?php
}}
}
?>