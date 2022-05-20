<?php
$servername="localhost";
$username="root";
$password="root";

$connect=mysqli_connect($servername,$username,$password);
if(!$connect) die("ERROR");

$sql=
"SELECT  *FROM laundry.credentials  WHERE Apartment='".$_REQUEST['Apartment']."' AND Password='".$_REQUEST['Password']."'";
session_start();
$SESSION['Apartment']=$_REQUEST['Apartment']; //create variable for apt
//$_SESSION['Password']=$_REQUEST['Password']//create variable for password
$result = mysqli_query($connect,$sql);
if($result)
{
	echo "Login in!";
header('Location:displaySchedule.php ');
}
else
	echo "Information not found: ".mysqli_query($connect,$sql);


?>