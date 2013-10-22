
<?php
session_start();

$name=$_POST['name'];
$prog=$_POST['prog'];
$rollno=$_POST['rollno'];
$dept=$_POST['dept'];
$sem=$_POST['sem'];
$year=$_POST['year'];
$spec=$_POST['spec'];
$dupid_type=$_POST['fee'];
$fees=$_POST['fee1'];
$add=$_POST['add'];
$total=$_POST['tot1'];
//$recpt=rand()%100;
include('conn.php');

$query= "insert into dupid values(NUll,'$name','$prog','$rollno','$dept','$sem','$year','$spec','$dupid_type','$fees','$add','$total',NULL)";
 
  mysql_query($query) or die(mysql_error());
  $_SESSION['rollno']=$rollno;
	header('location:disp_dupid.php');
?>