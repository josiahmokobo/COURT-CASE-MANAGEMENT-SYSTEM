<?php
include('con_db.php');
 global $db;
 //$db->debug=1;
?>
<script type="text/javascript" src="bin/js/jquery.min.js"></script>
<script type="text/javascript" src="bin/js/jquery-ui.min.js"></script>
<table class="gridtable" width="90%" style="margin:10px;">
<thead>
<tr>
 <th>#</th>
 <th>Batch Name</th>
 <th>Created By</th>
 <th>Date Created</th>
 <th>Document Count</th>
 <th>Page Count</th>
 <th>Image Count</th>
</tr>
</thead>
<?php
 $i = 0;
 $DocC =0;
 $ImageC = 0;
 $PageC = 0;

 $tblname = "scanreport";

 $from = date('Y-m-d',strtotime($_POST['from']));
 $to = date('Y-m-d',strtotime($_POST['to']));
 $from2 = date('D jS M Y',strtotime($_POST['from']));
 $to2 = date('D jS M Y',strtotime($_POST['to']));
		
$getdata = $db->Execute("select * from $tblname where date(CreatedDate) between '$from' and '$to' order by CreatedDate");
$viewinxsl = "<a href=\"reportexcel.php/?from=$from&tbl=$tblname&to=$to\"><img src=\"./img/xls.png\" width=\"32px\" height=\"32px\" title=\"View Document In PDF\"></a>";

echo "<span style='font-size:13px; margin:10px 10px 5px 50px;'>Scanning Report as From: <b>{$from2} </b>To: <b>{$to2}</b> </span>";
	  while(!$getdata->EOF)
	  {
	  	$rand = sha1($i*rand());
	    if($i%2)
    {
    $crl ='alt';
    }
    else
    {
    $crl ='';
    } 
 $BatchName = $getdata->fields["BatchName"];
 $CreatedBy = $getdata->fields["CreatedBy"];
 $CreatedDate = $getdata->fields["CreatedDate"];
 $DocumentCount  = $getdata->fields["DocumentCount"];
 $PageCount = $getdata->fields["PageCount"];
 $ImageCount = $getdata->fields["ImageCount"];
    
  $ImageC = $ImageC + $ImageCount;
  $DocC = $DocC + $DocumentCount;
  $PageC = $PageC + $PageCount;
echo "<tr class='$crl'>";
 $i +=1;
echo "<td>{$i}</td>";
echo "<td>$BatchName</td>";
echo "<td>$CreatedBy</td>";
echo "<td>$CreatedDate</td>";
echo "<td>$DocumentCount</td>";
echo "<td>$PageCount</td>";
echo "<td>$ImageCount</td>";
echo "<tr>";
 $getdata->MoveNext();
	 
	  }
?>
<tr>
<td colspan="4" align="center">
<b>Total</b>
</td>
<td align="center"><b><?php echo $DocC; ?></b></td>
<td align="center"><b><?php echo $PageC; ?></b></td>
<td align="center"><b><?php echo $ImageC; ?></b></td>
</tr>
</table>
