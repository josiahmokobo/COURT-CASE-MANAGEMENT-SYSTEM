<div align="center" style="margin-top: 25px;">
<?php
include("connection.php");
mysql_select_db("court");
$delete= $_POST["delete2"];
$val=$delete*5;
$val1= $val/5;

$sql=mysql_query("select * from case_details where case_id='$val1'") or mysql_error();
while($row=mysql_fetch_array($sql))
{
?>
<p align="center" style="color: green; font-weight: bold;">PLEASE YOU CAN WRITE YOUR VERDICT ON CASE NUMBER <font color="red"><?php echo $delete;?> </font>ON <?php echo date(' F D jS Y ');?></p>
<p><font color="blue">Where the accusor, <font color="red"><?echo $row["accusor"];?></font> presented the <font color="red"><?echo $row["charges"];?></font> case of accussing the accussor, <font color="red"><?echo $row["accusor"];?></font> for the law breaking</font></p>
<textarea id="report" cols="120" style="height: 200px;">
	
</textarea>
</div>
<span style="display:none;">
<input type="text" id="yt" value='<?php echo $row['case_id'];?>' />
<?}?>
</span>
<br/>
<div align="center">
  <script type="text/javascript">
     $('#add').click(function(){
      var delet = $('#yt').val();
      var report=$('#report').val();
  var spinner = $("<img src='img/loader.gif' id='spinner' />").insertAfter("#add"); 
$("#add").attr('value', 'loading......');
  $.post("php/sub.php",{check:"Insert", delet:delet,report:report},
function(result){
    $("#add").attr('value', 'submit');
   spinner.remove();
var f = result;
$('#result90').html(result);
});
      });
    </script>
	<button id="add">submit</button>
	<span id="result90">
     </span>
	

<div align="center">
</div>
<script type="text/javascript" src="js/jquery.js"></script>
 