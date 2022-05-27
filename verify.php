<?php
	$servername="localhost";
	$username="root";
	$password= "root";
	$connect=mysqli_connect($servername,$username,$password);
	//checking connection
	if(!$connect)  die("Error"); //else echo "connected";
  // make sure to start session
$check="Select *FROM laundry.schedule WHERE Slot='".$_REQUEST['TimeSlot']."' AND Date='".$_REQUEST['Schedule']."'";
session_start();
$_SESSION['TimeSlot']=$_REQUEST['TimeSlot'];
$_SESSION['Schedule']=$_REQUEST['Schedule'];

$result= mysqli_query($connect, $check);		
		//echo $sql;

if(mysqli_num_rows($result)>0)
{

	echo "Schedule has been taken";//mysqli_error... displays error that occurs
	echo "<a href=schedule.html>\nPlease try again</a>";
	
}		
else
{
	
	header("location:update.php");
}














		
?>
