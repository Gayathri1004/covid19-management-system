<?php 
if(!isset($_SESSION)) { session_start(); }


include("dbconnection.php");
if($_SESSION[randnumber]  == $_POST[randnumber])
{
if(isset($_POST[submit]))
{
		$sql ="UPDATE covid19.patient_reg SET date_in='$_POST[date_in]', date_out='$_POST[date_out]' WHERE pat_id='$_SESSION[pat_id]' and p_type='in'";
		if(!mysqli_query($con,$sql))
		{
			echo "Error in mysqli query";
		}
		else
		{
			echo '<script>window.alert("Admission and discharge dates added successfully !");</script>';
            echo '<script>location.href="in_patient.php"</script>';
			
		}
}
}
$randnumber = rand();
$_SESSION[randnumber] = $randnumber;
if(isset($_SESSION[id]))
{
	$sql = "SELECT * FROM covid19.patient_reg WHERE pat_id='$_SESSION[pat_id]'";
	$qsql = mysqli_query($con,$sql);
	$rsedit = mysqli_fetch_array($qsql);



}
?>