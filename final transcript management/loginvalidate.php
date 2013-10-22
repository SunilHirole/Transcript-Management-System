<?php
session_start();
$id = $_REQUEST["id"];
$pass = $_REQUEST["pass"];
include("conn.php");
$rs = mysql_query("select * from login where id='$id' and pass='$pass'");
//$_SESSION["success"]=true;
if(mysql_num_rows($rs)){
	$_SESSION["success"]="ok";
	header('Location: front.php');
	}else{
		$_SESSION["success"]='nok';
		header('Location: index.php');
		}
?>
