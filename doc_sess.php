<?php 
if(!isset($_SESSION)) { 
	session_start(); 
}


include("dbconnection.php");

$_SESSION[randnumber] = $randnumber;
if(isset($_SESSION[doc_id]))
{
	$sql1 = "SELECT * FROM covid19.doc_reg WHERE doc_id='$_SESSION[doc_id]'";
	$qsql1 = mysqli_query($con,$sql1);
	$rsedit1 = mysqli_fetch_array($qsql1);
}
?>