<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>NIT TRICHY</title>
<link rel="shortcut icon" href="images/logo.png"/>
<style>
table
{
	width:500px;
	border-spacing:0px;
	}
	td{
		padding-left:20px;}
		
a
{
	text-decoration:none;
	color:#000040;
	display:block;
	float:left;
	margin-left:20px;
	font-size:30px;
	}
	a:hover
	{
		color:#2D6097;
		}
	#link
	{
		margin-left:540px;}
</style>
</head>
<body>
<?php
session_start();
include('conn.php');
$rollno=$_SESSION['rollno'];
$sql =  "select * from tdata where rollno = '$rollno'";
$result = mysql_query($sql) or die(mysql_error());
$row = mysql_fetch_assoc($result);
//echo $row['name'];
echo '<center><h1>National Institute of Technology,Tiruchirappalli<br><h2>Receipt</h2></h1><table  border="2" cellpadding="8" ><tr><td>Date</td><td>'.$row['apply_date'].'</td></tr><tr><td>Recipt no</td><td>'.$row['recpt'].'</td></tr><tr><td>Name</td><td>'.$row['name'].'</td></tr><tr><td>Programme</td><td>'.$row['prog'].'</td></tr><tr><td>Roll no</td><td>'.$row['rollno'].'</td></tr><tr><td>Department</td><td>'.$row['dept'].'</td></tr><tr><td>Semester</td><td>'.$row['sem'].'</td></tr><tr><td>Year</td><td>'.$row['year'].'</td></tr><tr><td>Specification</td><td>'.$row['spec'].'</td></tr><tr><td>Transcript</td><td>'.$row['tras_type'].'</td></tr><tr><td>Fees</td><td>'.$row['fees'].'</td></tr><tr><td>No. of Transcript</td><td>'.$row['no_trans'].'</td></tr><tr><td>Address</td><td>'.$row['add'].'</td></tr><tr><td>Total</td><td>'.$row['total'].'</td></tr></table><br><br><div id="link"><a href="javascript:window.print()"><button>PRINT</button></a><a href="front.php"><button>HOME</button></a></div></center>' ;
session_destroy();
/*
echo '<table><tr><td>Recipt no</td><td>'.mysql_result($result,"recpt").'</td></tr><tr><td>Name</td><td>'.mysql_result($result,"name").'</td></tr><tr><td>Programme</td><td>'.mysql_result($result,"prog").'</td></tr><tr><td>Roll no</td><td>'.mysql_result($result,"rollno").'</td></tr><tr><td>dept</td><td>'.mysql_result($result,"dept").'</td></tr><tr><td>Semester</td><td>'.mysql_result($result,"sem").'</td></tr><tr><td>Year</td><td>'.mysql_result($result,"year").'</td></tr><tr><td>specification</td><td>'.mysql_result($result,"spec").'</td></tr><tr><td>Transcript</td><td>'.mysql_result($result,"tras_type").'</td></tr><tr><td>Fees</td><td>'.mysql_result($result,"fees").'</td></tr><tr><td>No. of Transcript</td><td>'.mysql_result($result,"no_trans").'</td></tr><tr><td>Address</td><td>'.mysql_result($result,"add").'</td></tr><tr><td>Total</td><td>'.mysql_result($result,"total").'</td></tr>' ;*/

?>

</body>