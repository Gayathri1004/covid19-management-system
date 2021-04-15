
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
$date=$_POST['date'];
$medi=$_POST['medi'];
$comor=$_POST['comor'];
$doubts=$_POST['ques'];
$insert="insert into covid19.health_status_in(pat_id, date, medi,comor,doubts) values('$_SESSION[pat_id]','$date','$medi','$comor','$doubts')";
$result=$conn->query($insert);
if($result)
{
    echo '<script>window.alert("Health status entered successfully !");</script>';
    echo '<script>location.href="health_status_in.php"</script>';
}
else{
    echo "Error in mysqli query";
}
}

else
{
    echo '<script>window.alert("Enter all values!!");</script>';
}
$conn->close();
?>

