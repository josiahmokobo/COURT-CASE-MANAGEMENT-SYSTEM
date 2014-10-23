
<?php
include("connection.php");
mysql_select_db("court");
$sql1=mysql_query("select * from case_details where case_id='$_POST[data]'  ");
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
	 <table class="table table-condensed" width="600px" style="overflow:scroll ;font-family: candara; font-size: 17; border: 1px solid lightgray; ">
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
        <th>HEARING</th>
		</tr>
        </thead>
        <tbody>
	<?
$sql=mysql_query("select * from case_details where case_id='$_POST[data] '");	
while($row=mysql_fetch_array($sql))

{    

	?>

	<tr class="warning" id="table">
	<td> 
	<?php
    echo $row['case_id'];
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
    <td><?php
        echo $row['hearing']; ?> 
    </td>
    </tr>
    
    <?php
}
}
?>
</tbody>
</table>

</div>
<script type="text/javascript" src="js/jquery.js"></script>