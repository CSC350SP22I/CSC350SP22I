<?php

$servername="localhost";
$username="root";
$password= "root";
$connect=mysqli_connect($servername,$username,$password);
if(!$connect)  die("Error"); //else echo "connected";

session_start();
$sql = "SELECT *FROM laundry.schedule WHERE UserId='".$_SESSION['UserId']."'"; 

$result = mysqli_query($connect, $sql); 	// Send the query to the database


	if (mysqli_num_rows($result) > 0) 			// If there are rows present
	{
		echo "This is your slot "; 
		echo "<table border='1'><tr><td>Date</td><td>Slot</td>";
		while($row = mysqli_fetch_assoc($result)) 									// fetch next row
		{ 																			// display the data
			echo "<tr><td>". $row["Date"]."</td><td>". $row["Slot"]."</td></tr>";
			//output data of the row
		}
		echo "</table>"; 
	}
	else
	{
		
		header('Location:schedule.html');
	}



?>