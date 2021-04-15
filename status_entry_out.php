
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
$body_temp=$_POST['body_temp'];
$o2=$_POST['o2'];
$pulse_rate=$_POST['pulse_rate'];
$body_pain=$_POST['body_pain'];
$cough_cold=$_POST['cough_cold'];
$smell_taste=$_POST['smell_taste'];
$breath=$_POST['breath'];
$comorbities=$_POST['comorbities'];
$doubts=$_POST['ques'];
$insert="insert into covid19.health_status_out(pat_id, date, body_temp,o2,pulse_rate,body_pain,cough_cold,smell_taste,breath,comorbities,doubts) values('$_SESSION[pat_id]','$date','$body_temp','$o2','$pulse_rate','$body_pain','$cough_cold','$smell_taste','$breath','$comorbities','$doubts')";
$result=$conn->query($insert);
if($result)
{
    echo '<script>window.alert("Health status entered successfully !");</script>';
    echo '<script>location.href="health_status.php"</script>';
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

