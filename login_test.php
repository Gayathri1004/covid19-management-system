<?php
session_start();
if($_POST)
{
	$host="localhost";
	$user="root";
	$pass="";
	$db="covid19";
	$email=$_POST['email'];
	$password=$_POST['password'];
	if ($email == 'admin@gmail.com' and $password== 'admin')
	{
        echo '<script>location.href="admin.php"</script>';}
	else
	{
	$conn=mysqli_connect($host,$user,$pass,$db);
	$query1="SELECT * from covid19.patient_reg where username='$email' and password='$password'";
    $query2="SELECT * from covid19.doc_reg where username='$email' and password='$password'";
	$result1=mysqli_query($conn,$query1);
    $result2=mysqli_query($conn,$query2);
    $rowcount1=mysqli_num_rows($result1);
    $rowcount2=mysqli_num_rows($result2);
	if($rowcount1 == 1  )
	{ 
		
	
		$rslogin1 = mysqli_fetch_array($result1);
		$_SESSION['pat_id'] = $rslogin1['pat_id'];
		$_SESSION['pname']= $rslogin1['name'];

    
        
		echo '<script>location.href="patient_home.php"</script>';
	}
    else if($rowcount2 == 1)
    {

		$rslogin2 = mysqli_fetch_array($result2);
		$_SESSION['doc_id'] = $rslogin2['doc_id'];
		$_SESSION['dname']= $rslogin2['name'];

    
        
		echo '<script>location.href="doctor_profile.php"</script>';

    }
	else if($rowcount1==0||$rowcount2==0) {
		echo '<script>window.alert("Incorrect Email or Password !");</script>';
		echo '<script>location.href="roletype_login.php"</script>';
		
	}
	}
}
?>



