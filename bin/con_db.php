
<?php
include('adodb/adodb.inc.php');
include('adodb/adodb-active-record.inc.php');

		 /* $db = ADONewConnection('odbc_mssql');

     $dsn = "Driver={SQL Server};Server=VOKEN-PC\SQLEXPRESS;Database=KMA;";

       $db->Connect($dsn,'dmsadmin','casemanager');*/
     
     //$dsn = "Driver={SQL Server};Server=EDMS1\SQLEXPRESS;Database=Case360DB;";

       //$db->Connect($dsn,'sa','P@$$w0rd@123');
	
		$db = ADONewConnection('mysql');
  	$db->Connect('localhost', 'root', '', 'capturepro');
    ADOdb_Active_Record::SetDatabaseAdapter($db);
       ADOdb_Active_Record::SetDatabaseAdapter($db);
         
    
    class ORM extends ADODB_Active_Record {} 
	
	
	function safehtml($s)
{
    $s=str_replace("&", "&amp;", $s);
    $s=str_replace("<", "&lt;", $s);
    $s=str_replace(">", "&gt;", $s);
    $s=str_replace("'", "&apos;", $s);
    $s=str_replace("\"", "&quot;", $s);
    return $s;
}
function wekapesa($str)
{
    $num= preg_replace('[\D]', '', $str);
    return $num;
}
function pesa($number, $fractional=false) {
    if ($fractional) {
        $number = sprintf('%.2f', $number);
    }
    while (true) {
        $replaced = preg_replace('/(-?\d+)(\d\d\d)/', '$1,$2', $number);
        if ($replaced != $number) {
            $number = $replaced;
        } else {
            break;
        }
    }
    return "Ksh ".$number;
} 

function log_action($user,$operation)
   {
   global $db;
    
   $insert_advertcontacts = $db->Execute("INSERT INTO audit_trail (operation,opuser) values ('$operation','$user')");
   }
   
 
 /******** Get date Difference ****************************/

  // Set timezone
  date_default_timezone_set("UTC");
 
  // Time format is UNIX timestamp or
  // PHP strtotime compatible strings
  function dateDiff($time1, $time2, $precision = 6) {
    // If not numeric then convert texts to unix timestamps
    if (!is_int($time1)) {
      $time1 = strtotime($time1);
    }
    if (!is_int($time2)) {
      $time2 = strtotime($time2);
    }
 
    // If time1 is bigger than time2
    // Then swap time1 and time2
    if ($time1 > $time2) {
      $ttime = $time1;
      $time1 = $time2;
      $time2 = $ttime;
    }
 
    // Set up intervals and diffs arrays
    $intervals = array('year','month','day','hour','minute','second');
    $diffs = array();
 
    // Loop thru all intervals
    foreach ($intervals as $interval) {
      // Set default diff to 0
      $diffs[$interval] = 0;
      // Create temp time from time1 and interval
      $ttime = strtotime("+1 " . $interval, $time1);
      // Loop until temp time is smaller than time2
      while ($time2 >= $ttime) {
	$time1 = $ttime;
	$diffs[$interval]++;
	// Create new temp time from time1 and interval
	$ttime = strtotime("+1 " . $interval, $time1);
      }
    }
 
    $count = 0;
    $times = array();
    // Loop thru all diffs
    foreach ($diffs as $interval => $value) {
      // Break if we have needed precission
      if ($count >= $precision) {
	break;
      }
      // Add value and interval 
      // if value is bigger than 0
      if ($value > 0) {
	// Add s if value is not 1
	if ($value != 1) {
	  $interval .= "s";
	}
	// Add value and interval to times array
	$times[] = $value . " " . $interval;
	$count++;
      }
    }
 
    // Return string with times
    return implode(", ", $times);
  }
 /******************************************/
 function GenerateWord()
{
    //Get a random word
    $nb=rand(3, 10);
    $w='';
    for($i=1;$i<=$nb;$i++)
        $w.=chr(rand(ord('a'), ord('z')));
    return $w;
}

function GenerateSentence()
{
    //Get a random sentence
    $nb=rand(1, 10);
    $s='';
    for($i=1;$i<=$nb;$i++)
        $s.=GenerateWord().' ';
    return substr($s, 0, -1);
}
?>