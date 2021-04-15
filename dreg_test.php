
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
$dname=$_POST['dname'];
$demail=$_POST['demail'];
$dpwd=$_POST['dpassword'];
$spec=$_POST['specialisation'];
$hosp=$_POST['hospital'];
$place=$_POST['place'];
$ts1=$_POST['ts1'];
$ts2=$_POST['ts2'];
$ts3=$_POST['ts3'];
$ts4=$_POST['ts4'];
$insert="insert into covid19.doc_reg(name, username, password,Specialisation,hospital,place,time_slot1,time_slot2,time_slot3,time_slot4) values('$dname','$demail','$dpwd','$spec','$hosp','$place','$ts1','$ts2','$ts3','$ts4')";

$select="SELECT username from covid19.doc_reg where username='$demail' Limit 1";
$selectsql=$conn->query($select);
$rowcount=mysqli_num_rows($selectsql);

if($rowcount==0)
{
    $result=$conn->query($insert);
if($result)
{
    
    echo '<script>window.alert("Account created succesfully!");</script>';
    echo '<script>location.href="roletype_login.php"</script>';
}
else
{
    
    echo '<script>window.alert("Account creation failed");</script>';
    echo '<script>location.href="dregister.php"</script>';
}
}
else
{
    echo '<script>window.alert("Doctor with the entered email id already exists, use another email id!");</script>';
    echo '<script>location.href="dregister.php"</script>';
}}
$conn->close();
?>

