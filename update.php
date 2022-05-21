<?php
	$servername="localhost";
	$username="root";
	$password= "root";
	$connect=mysqli_connect($servername,$username,$password);
	if(!$connect)  die("Error"); //else echo "connected";
	session_start();  // make sure to start session
		$sql = 
		"UPDATE laundry.schedule SET Apartment='".$_SESSION['Apartment']."', Slot='".$_REQUEST['TimeSlot']."', 
		Date='".$_REQUEST['Schedule']."'";
		//echo $sql;
		
		$result = mysqli_query($connect, $sql); 	// Send the query to the database
		if($result)
		{
		echo "You have been Schedule for: ".$_REQUEST['Schedule']." at ".$_REQUEST['TimeSlot']." ";
		}
		else
		echo "Schedule Not UPDATED:".mysqli_error($connect);//mysqli_error... displays error that occurs
?>
