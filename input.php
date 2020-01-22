<?php
$t_name=$_GET['TECHERS_NAME'];
$ch_name=$_GET['CHAPTER_NAME'];
$status=$_GET['status'];
$ststh=$_GET['fromsth'];
$ststm=$_GET['fromstm'];
$stfh=$_GET['tosth'];
$stfm=$_GET['tostm'];
$atsh=$_GET['fromath'];
$atsm=$_GET['fromatm'];
$atfh=$_GET['toath'];
$atfm=$_GET['toatm'];
$dth=$_GET['todh'];
$dtm=$_GET['todm'];
$notes=$_GET['others'];
$servername='localhost';
$username='mtdb';
$password='';
$database='mt';
$conn=mysqli_connect($servername,$username,$password,$database);
if($conn)
{


$sql="insert into adminpro3 (
teacher_name,chapter_name,status,scheduled_time_start_hours,scheduled_time_start_mins,scheduled_time_finish_hours,scheduled_time_finish_mins,actual_time_start_hours,actual_time_start_mins,actual_time_finish_hours,actual_time_finish_mins,deviation_time_hours,deviation_time_mins,notes)values ('$t_name','$ch_name','$status',$ststh,$ststm,$stfh,$stfm,$atsh,$atsm,$atfh,$atfm,$dth,$dtm,'$notes');";

if($conn->query($sql)===true)
{

	echo $teacher_name;
	echo $chapter_name;
	echo $status;
	echo $ststh;
	echo $ststm;
	echo $stfh;
	echo $stfm;
	echo $atsh;
	echo $atsm;
	echo $atfh;
	echo $atfm;
	echo $dth;
	echo $dtm;
	echo $notes;
}
else
{
   echo $conn->error;
}

}
else
{
die("Connection_failed".mysqli_connect_error());
}

?>
