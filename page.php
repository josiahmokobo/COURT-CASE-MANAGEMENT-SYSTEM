<link href="style.css" rel="stylesheet" type="text/css" />
<?php
include("config.php");
$per_page = 5;
$link=mysql_connect("$hostname","$username","$password")or 
die('Could not connect: ' . mysql_error());
if(mysql_select_db("$dbname",$link)) 
{
$sql_content = "show columns from case_details";
$get_res = mysql_query($sql_content);
$cols = mysql_num_rows($get_res);
$page = $_REQUEST['page'];
$start = ($page-1)*2;
$sql_content1 = "select * from case_details limit $start,$per_page";
$query = mysql_query($sql_content1);
?>

	 <table class="table table-hover" width="600px" style="overflow:scroll; font-family: Candara; border: 1px solid magenta; font-weight: normal;">
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
<?php
$j=0;
while($row=mysql_fetch_array($query))

{     $_SESSION["ids"]=$row['case_id'];

	?>

	<tr class="danger" id="table">
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
    <td>
    <?php
      echo $row['hearing'];   
      ?>
    </td>
    </tr>
    <?php
$j++;
}
}?>
</tbody>
</table>
<script type="text/javascript">
$(document).ready(function(){
 	$('div.shopp:eq(' + selecter + ')').slideUp(500).delay(10000).fadeIn(400);	
});
</script>