<?php
	$servername="localhost";
	$username="root";
	$password= "root";
	$connect=mysqli_connect($servername,$username,$password);
	//checking connection
	if(!$connect)  die("Error"); //else echo "connected";
	session_start();  // make sure to start session
		$sql = 
		"INSERT INTO laundry.schedule (UserId, Date, Slot)
	VALUES ('".$_SESSION['UserId']."', '".$_SESSION['Schedule']."','".$_SESSION['TimeSlot']."')";

$result = mysqli_query($connect, $sql); 
	// Send the query to the database
	if($result)
	{
		echo "You have been Schedule for: ".$_SESSION['Schedule']." at ".$_SESSION['TimeSlot']." ";
	}
	else
	{
				echo "ERROR";
	}














		
?>
