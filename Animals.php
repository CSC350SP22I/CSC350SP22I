<?php
	$servername="localhost";
	$username="root";
	$password= "root";
	
	$connect=mysqli_connect($servername,$username,$password);
	if(!$connect)  die("Error");
	$sql="INSERT INTO animals.critter (AnimalType,AnimalHabitat)
	VALUES('".$_REQUEST['Animal']."','".$_REQUEST['Habitat']."')";
	$result = mysqli_query($connect, $sql); 
	
	if($result)
			echo "INSERTED";
		else
			
		echo "Not Inserted";
?>