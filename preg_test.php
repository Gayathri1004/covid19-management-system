
<?php
session_start();
$servername="localhost";
$username="root";
$password="";
$dbname="covid19";
$conn=new mysqli($servername,$username,$password,$dbname);
if (!$conn)
{
die('Could not connect: ' . mysql_error());
}
if(isset($_POST['submit']))
{
$pname=$_POST['pname'];
$pgender=$_POST['pgender'];
$page=$_POST['page'];
$pmobile=$_POST['pmobile'];
$paddress=$_POST['paddress'];
$pcity=$_POST['pcity'];
$pemail=$_POST['pemail'];
$pwd=$_POST['password'];
$insert="INSERT into covid19.patient_reg(name, gender, age, mobile_no, address, city,  username, password) values('$pname','$pgender','$page','$pmobile','$paddress','$pcity','$pemail','$pwd')";
$select="SELECT username from covid19.patient_reg where username='$pemail' Limit 1";
$selectsql=$conn->query($select);
$rowcount=mysqli_num_rows($selectsql);

if($rowcount==0)
{
$result=$conn->query($insert);

if($result)
{
    
    echo '<script>window.alert("Account created succesfully!");</script>';
    echo '<script>location.href="plogin.php"</script>';
}
else
{
    
    echo '<script>window.alert("Account creation failed");</script>';
    echo '<script>location.href="pregister.php"</script>';
}
}
else 
{
    echo '<script>window.alert("Patient with the entered email id already exists, use another email id!");</script>';
    echo '<script>location.href="pregister.php"</script>';
}
}
$conn->close();
?>

