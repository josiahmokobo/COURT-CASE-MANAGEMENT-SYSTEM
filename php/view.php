<link href="style.css" rel="stylesheet" type="text/css" />
<?php
include("config.php");
$per_page = 2;
$link=mysql_connect("$hostname","$username","$password")or 
die('Could not connect: ' . mysql_error());
if(mysql_select_db("$dbname",$link)) 
{
$sql_content = "show columns from user";
$get_res = mysql_query($sql_content);
$cols = mysql_num_rows($get_res);
$page = $_REQUEST['page'];
$start = ($page-1)*2;
$sql_content1 = "select * from user limit $start,$per_page";
$query = mysql_query($sql_content1);
?>

      <table class="table table-condensed" width="800" style="font-weight: bold;  font-family: candara;">
     <thead>
       <tr>
        <th>NAME</th>
        <th>LOCATION</th>
        <th>TYPE</th>
        <th>USERNAME</th>
        <th>PASSWORD</th>
        <th>NATIONAL ID</th>
        <th>PHONE NUMBER</th>
        <th>STATUS</th> 
        </tr>
        </thead>
        <tbody>
<?php
$j=0;


while($row=mysql_fetch_array($query))


{     $_SESSION["ids"]=$row['national_id'];

    ?>

  <tr class="danger">
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
     <?php
     $sqlme=mysql_query("select * from user where status='online' and national_id='$row[national_id]'");
        if(mysql_num_rows($sqlme)==1)
     {
            ?>
         <img src="img/status.png"> <?
                           
     }
     if(mysql_num_rows($sqlme)!=1)
     {
    
            ?>
             <img src="img/status-away.png"> <?
     
     }
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