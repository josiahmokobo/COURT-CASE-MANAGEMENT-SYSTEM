
<?php
session_start();
include("connection.php");
$judge =$_POST["judge"];
mysql_select_db("court");
$sql1=mysql_query("select * from case_details where case_id='$judge'");
if(mysql_num_rows($sql1)==0)
{
?>
<img src="img/exclamation-red.png"> <?
echo "no records found please try again".mysql_error();
}
else
{
$sql3=mysql_query("select * from case_details where case_id='$judge' and status='pending'");	
if(mysql_num_rows($sql3)==0)
{
?>
<img src="img/exclamation-red.png"> <?
echo "the case has already been closed".mysql_error();
}	
else
{

	?>
    <span id="deleted">

    </span>
	<div>
	 <table class="table table-hover">
	   <thead>
	   <tr>
		<th>CASE ID</th>
		<th>JUDGE</th>
		<th>CASE DATE</th>
		<th>CLERK_ID</th>
		<th>PROSECUTOR</th>
		<th>CHARGES</th>
		<th>ACCUSED ID</th>
		<th>ACCUSSOR</th>
		<th>STATUS</th>	
        <th>HEARING</th> 
		</tr>
		</thead>
         <tbody>
	<?

$sql=mysql_query("select * from case_details where case_id='$judge'");	
while($row=mysql_fetch_array($sql))

{
	$_SESSION['josiah']= $row['case_id'];
	?>
  
	<tr <tr class="danger">
	<td> 
	<?php
    echo $row['case_id'];
     ?>
    </td>
    <td>
    <?php
    echo $row['judge'];
     ?>
    </td>
    <td>
    <?php
    echo $row['caseDate'];
     ?>
    </td>
    <td>
    <?php
    echo $row['Clerk_id'];
     ?>
    </td>
    <td>
    <?php
    echo $row['prosecutor'];
     ?>
    </td>
    <td>
    <?php
    echo $row['charges'];
    ?>
    </td>
    <td>
    <?php
    echo $row['accused'];
	  ?>
    </td>
    <td>
    <?php
    echo $row['accusor'];
	  ?>
    </td>
    <td>
    <?
    echo $row['status'];
    ?>
   </td>
      <td>
    <?
    echo $row['hearing'];
    ?>
   </td>

     <p>
     	<span style="display: none;" >
     	<input type="text" id="txt1" value=" <? echo $_SESSION['josiah'];?>" />
     	</span >
     	
     </p>
     

     <script type="text/javascript">
     $('#delete1').click(function(){
     var delete2 = $('#txt1').val();
      $('#table1').hide(0);
var spinner = $("<img src='img/loader.gif' id='spinner' />").insertAfter("#delete1"); 
$("#delete1").attr('value', 'loading......');
     $.post("php/heal.php",{check:"Insert", delete2:delete2 },
	function(result)
	{
    $("#delete1").attr('value', 'view');
     spinner.remove();
    var f=result;
    $('#result9').html(result);
     });
     });
    </script>
    </tr>
   
    <?php
}
}}
?>
 </tbody>
</table>
<div align="center" id="get">
<button id="delete1">view</button>
<div align="center">
<div><font color="magenta"><i>or suspend the case  here </i></font></div>
<select id="sussyz">
<option value="days">select number of days</option>
 <?php
// repeat continuously until counter becomes 10
// output:
for ($x=1; $x<1000; $x++) {
    ?>
<option ><?php echo "$x ";?> </option>
<?}?>

</select>
<span><input type="submit" value="suspend" id="submis"></span>
   <script type="text/javascript">
     $('#submis').click(function(){
    var sussy= $('#sussyz').val();
    if(sussy=="days")
    {
    $('#returns').html("<font color='green'><b>please choose the time of differement</b></font>"); 
    }
    else{
var spinner = $("<img src='img/loader.gif' id='spinner' />").insertAfter("#submis"); 
$("#submis").attr('value', 'loading......');
    $.post('php/update.php',{check:"Insert",sussy:sussy},
        function(result)
        {
$("#submis").attr('value', 'suspend');
 spinner.remove();  
         $('#returns').html(result);   
        });
}
     });
    </script>
    <br/>
    <br/>
<span id="returns"></span>
</div>
</div>
</div>
<div id="result9">
     </div>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/projudgement.js"></script>
