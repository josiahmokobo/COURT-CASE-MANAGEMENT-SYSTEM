
<?php
session_start();
$national_id= $_SESSION["national_id"];
include("connection.php");
mysql_select_db("court");
$date=date('d M y',strtotime("now"));
$sql1=mysql_query("select * from case_details");
if(mysql_num_rows($sql1)==0)
{
		?>
<img src="img/exclamation-red.png"> <?
echo "no records found please try again";
}
else
{
	?>
    <span id="deleted">

    </span>
	<div >
   
	 <table class="table table-hover" width="600px" style="overflow:scroll; font-family: Candaria; font-size: 15; border: 1px solid lightgray;">
	  <thead>
       <tr>
		<th>CASE NO</th>
		<th>JUDGE</th>
		<th>DATE</th>
		<th>CLERK</th>
		<th>PROSECUTOR</th>
		<th>ACCUSSED</th>
		<th>ACCUSSOR</th>
		<th>STATUS</th>
		<th>CHARGES</th>
        <th>JUDGEMENT</th>	
        <th>COURT</th>
		<th>GET CASE</th>
		</tr>
        </thead>
        <tbody>
	<?
$sql=mysql_query("select * from case_details where caseDate='$date' and status !='closed' and (Clerk_id='$national_id' or prosecutor='$national_id') ");	
  $num=mysql_num_rows($sql);
    echo "<font color='green'><b>you have $num case(s) for you today</b></font>";
while($row=mysql_fetch_array($sql))

{     $_SESSION["ids"]=$row['case_id'];

	?>

	<tr class="danger" id="table">
	<td> 
	<?php
    echo $row['case_id'];
$_SESSION["idz"]=$row['case_id'];
     ?>
    </td>
    <td>
    <?php
    $sqlr=mysql_query("select judge_name from judge where judge_id='$row[judge]'");
    $row2=mysql_fetch_array($sqlr);
    echo $row2['judge_name'];
     ?>
    </td>
    <td>
    <?php
    echo $row['caseDate'];
     ?>
    </td>
    <td>
    <?php
    $sqlr=mysql_query("select Clerk_name from clerk where Clerk_id='$row[Clerk_id]'");
    $row2=mysql_fetch_array($sqlr);
    echo $row2['Clerk_name'];
     ?>
    </td>
    <td>
    <?php
    $sqlr=mysql_query("select prosecutor_name from prosecutor where prosecutor_id='$row[prosecutor]'");
    $row2=mysql_fetch_array($sqlr);
    echo $row2['prosecutor_name'];
     ?>
    </td>
    <td>
    <?php
    $sqlr=mysql_query("select Accused_name from accused where Accused_id='$row[accused]'");
    $row2=mysql_fetch_array($sqlr);
    echo ($row2['Accused_name']);
    ?>
    </td>
    <td>
    <?php
    $sqlr=mysql_query("select Accusor_name from accusor where Accusor_id='$row[accusor]'");
    $row2=mysql_fetch_array($sqlr);
    echo $row2['Accusor_name'];
	  ?>
    </td>
    <td>
    <?php
    echo $row['status'];
	  ?>
    </td>
     <td>
    <?php
    echo $row['charges'];
      ?>
    </td>
    <td>
     <button  title="<?php  if($row['judgement']!=""){echo $row['judgement'];} else echo "case yet to be heard"; ?>">show details</button>	
     <span   id="show1" style="display: none">show details</span>   
     </td>
      <td>
    <?php
    $sqlr=mysql_query("select * from court where court_id='$row[court_id]'") or die(mysql_error());
    $row2=mysql_fetch_array($sqlr);
    echo ($row2['court_name']);
    ?>
    </td>
	<td>
    <?php $id= $row["case_id"];?>
    <a href="getCase.php? case_id=<?php echo $id ?>"><button id="addTo">GET CASE</button></td>
	<div style="display: none;">
	
   </div>
    </tr>
 
    <?php
}
}
?>
</tbody>
</table>

</div>
<script type="text/javascript" src="js/jquery.js"></script>