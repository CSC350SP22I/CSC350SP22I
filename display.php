<?php

$servername="localhost";
$username="root";
$password= "root";
$connect=mysqli_connect($servername,$username,$password);
if(!$connect)  die("Error"); //else echo "connected";

session_start(); 
$sql = "SELECT * FROM laundry.schedule WHERE Apartment='".$_SESSION['Apartment']."'";

$result = mysqli_query($connect, $sql); 	// Send the query to the database
if (mysqli_num_rows($result) > 0) 			// If there are rows present
{
		echo "<table border='1'><tr><td>Apartment</td><td>Slot</td><td>Date</td>";
		while($row = mysqli_fetch_assoc($result)) 									// fetch next row
		{ 																			// display the data
			echo "<tr> <td>".$row["Apartment"]." </td><td>". $row["Slot"]."</td><td>". $row["Date"]."</td>";
			//output data of the row
		}
		echo "</table>";
}
else
{
header('Location: ')

}

?>















/*if (mysqli_num_rows($result) > 0) 			// If there are rows present
{
		echo "<table border='1'><tr><td>EMAIL</td><td>FIRSTNAME</td><td>LASTNAME</td><td>SEX</td><td>SCHEDULE</td><td>INTEREST</td><td>SKILL</td><td>TOOLS</td></tr>";
		while($row = mysqli_fetch_assoc($result)) 									// fetch next row
		{ 																			// display the data
			echo "<tr> <td>".$row["StudentEMail"]." </td><td>". $row["StudentFname"]."</td><td>". $row["StudentLname"]."</td><td>".$row["StudentSex"]."</td>
			<td>".$row["StudentSchedule"]."</td><td>".$row["StudentInterest"]."</td><td>".$row["StudentSkill"]."</td><td>".$row["StudentTools"]."</td></tr>";
			//output data of the row
		}
		echo "</table>";
}*/