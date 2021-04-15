<?php 
if(!isset($_SESSION)) { 
	session_start(); 
}


include("dbconnection.php");

$_SESSION[randnumber] = $randnumber;
if(isset($_SESSION[pat_id]))
{
	$sql = "SELECT * FROM covid19.patient_reg WHERE pat_id='$_SESSION[pat_id]'";
	$qsql = mysqli_query($con,$sql);
	$rsedit = mysqli_fetch_array($qsql);
}
?>