<?php
$servername='localhost';
$username='root';
$password='root';

$connect=mysqli_connect($servername, $username, $password);
if(!$connect) die ('ERROR');

$sql="INSERT INTO laundry.credentials (Apartment, Password,Email,Phone) 
		VALUES ('".$_REQUEST['Apartment']."','".$_REQUEST['Password']."','".$_REQUEST['EMail']."','".$_REQUEST['PNum']."')";

$result = mysqli_query($connect, $sql); 	// Send the query to the database
		if($result)
		{
			header('Location: login.html');
			echo "Registration completed";
		}
		else
			//echo "STUDENT NOT INSERTED";
		echo "Info Not Inserted:".mysqli_error($connect);//mysqli_error... displays error that occurs



?>