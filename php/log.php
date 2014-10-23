<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>CASE</title> 
<link rel="stylesheet" type="text/css" media="screen" href="bin/css/main.css" />
<link rel="st
var jname=$("#jname").val();ylesheet" type="text/css" media="screen" href="bin/css/jquery-ui-1.8.14.custom.css" />
<link rel="stylesheet" href="bin/header/style.css" type="text/css" /><style>._css3m{display:none}</style>
</head>
<body>
<?php
include("connection.php");
mysql_select_db("court");
$pass=$_POST["pass"];
$usertext=$_POST['usertext'];
$sql1=mysql_query("select * from user where username='$usertext' and password='$pass'");
$row=mysql_fetch_array($sql1);
$name=$row['Name'];
$phone=$row['phone_number'];
$type=$row['type'];
$national_id=$row['national_id'];

if(mysql_num_rows($sql1)==0){
	?>
<img src="img/exclamation-red.png"> <?
echo "password or username is wrong";
}
else
{
$_SESSION["name"]=$name;
$_SESSION["type"]=$type;
$_SESSION["national_id"]=$national_id;
$_SESSION["phone"]=$phone;
mysql_query("update user set status='online' where national_id='$national_id'");
?>
<script type="text/javascript">
$('#form0').hide();
$('#page').hide();
$('#img2').hide();
</script>
<?
?>
<div style="border: 2px solid white; margin-bottom: 0px; border-radius: .78em; width: 700px; height: 400px; margin-top: 0px;" >
<?
echo "hello $name your successfully logged into your account please click the link to log to homepage <br/>";
?>
<?php
if($type=="USER")
{
	$_SESSION["national_id"]=$national_id;
	 echo $_SESSION["national_id"];
?>
<p><a href="http://localhost/case/user.php"><button>go to homepage</button></a></p>
<p style="border: 2px solid white; border-radius: .78em; width: 400px;"><img src="img/hi.jpg" height="200" width="400" ></p>

<?
}
else if ($type=="ADMIN")
{   $_SESSION["national_id"]=$national_id;
	?>
<p><a href="http://localhost/case/userAdd.php"><button>go to homepage</button></a></p>
<p style="border: 2px solid white; border-radius: .78em; width: 400px;"><img src="img/hi.jpg" height="200" width="400" ></p>

<?
}
else if ($type=="judge")
{   $_SESSION["national_id"]=$national_id;
     echo $_SESSION["national_id"];
	?>
<p><a href="http://localhost/case/judgement.php"><button>go to homepage</button></a></p>
<p style="border: 2px solid white; border-radius: .78em; width: 400px;"><img src="img/hi.jpg" height="200" width="400" ></p>
<?
}
else if ($type=="clerk")
{     $_SESSION["national_id"]=$national_id;
       echo $_SESSION["national_id"];
	?>
<p><a href="http://localhost/case/index0.php"><button>go to homepage</button></a></p>
<p style="border: 2px solid white; border-radius: .78em; width: 400px;"><img src="img/hi.jpg" height="200" width="400" ></p>
<?
}
else if ($type=="prosecutor")
{     $_SESSION["national_id"]=$national_id;
     echo $_SESSION["national_id"];
	?>
<p><a href="http://localhost/case/index0.php"><button>go to homepage</button></a></p>
<p style="border: 2px solid white; border-radius: .78em; width: 400px;"><img src="img/hi.jpg" height="200" width="400" ></p>
<?
}
?>
</div>
<?
}
?>

<script type="text/javascript" src="js/jquery.js"></script>