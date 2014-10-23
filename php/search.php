
<?php
session_start();
include("connection.php");
$search =$_POST["search"];
mysql_select_db("court");
$sql1=mysql_query("select * from user where national_id='$search'");
if(mysql_num_rows($sql1)==0)
{
		?>
<img src="img/exclamation-red.png"> <?
echo "no records found please try again".mysql_error();
}
else
{
	?>
    <span id="deleted">

    </span>
	<div >
	 <table class="table table-hover">
	  <thead>
       <tr>
		<th>COUNT</th>
		<th>NAME</th>
		<th>LOCATION</th>
		<th>TYPE</th>
		<th>USERNAME</th>
		<th>PASSWORD</th>
		<th>NATIONAL ID</th>
		<th>PHONE NUMBER</th>
		<th>delete</th>	
		</tr>
        </thead>
        <tbody>
	<?
$sql=mysql_query("select * from user where national_id='$search'");	
while($row=mysql_fetch_array($sql))

{
	$_SESSION['josiah']= $row['national_id'];
	?>

	<tr class="danger" id="table">
	<td> 
	<?php
    echo $row['Count'];
     ?>
    </td>
    <td>
    <?php
    echo $row['Name'];
     ?>
    </td>
    <td>
    <?php
    echo $row['Location'];
     ?>
    </td>
    <td>
    <?php
    echo $row['type'];
     ?>
    </td>
    <td>
    <?php
    echo $row['username'];
     ?>
    </td>
    <td>
    <?php
    echo crypt($row['password'],"we");
    ?>
    </td>
    <td>
    <?php
    echo $row['national_id'];
	  ?>
    </td>
    <td>
    <?php
    echo $row['phone_number'];
	  ?>
    </td>
    <td>
     	<span style="display: none;" >
     	<input type="text" id="txt" value=" <? echo $_SESSION['josiah'];?>" />
     	</span>
     	<button id="delete">delete</button>
      </td>
    </tr>
     <script type="text/javascript">
     $('#delete').click(function(){
       var delete1 = $('#txt').val();
       console.log(delete1);
       $("#table").css('background','white').css('color','gray');
       $('#table').fadeOut(5000);
       $.post("php/delete.php",{check:"Insert",delete1:delete1},
       function(result){
       var f = result;
       $('#deleted').html(result);
       });
   });
    </script>
   
    
    <?php
}
}
?>
</tbody>
</table>

</div>

<script type="text/javascript" src="js/jquery.js"></script>