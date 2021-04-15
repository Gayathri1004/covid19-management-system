<?php 
if(!isset($_SESSION)) { session_start(); }


include("dbconnection.php");
if($_SESSION[randnumber]  == $_POST[randnumber])
{
if(isset($_POST[submit]))
{
		$sql ="UPDATE covid19.patient_reg SET name='$_POST[name]', gender='$_POST[gender]',age='$_POST[age]',p_type='$_POST[p_type]' WHERE pat_id='$_SESSION[pat_id]'";
		if(!mysqli_query($con,$sql))
		{
			echo "Error in mysqli query";
		}
		else
		{
			echo '<script>window.alert("Patient account updated successfully !");</script>';
            if ($_POST[p_type]=="In")
            {
                echo '<script>location.href="in_patient.php"</script>';
            }
            else if($_POST[p_type]=="Out")
            {
                echo '<script>location.href="out_patient.php"</script>';
            }
			
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