<?php
$servername="localhost";
$username="root";
$password="root";

$connect=mysqli_connect($servername,$username,$password);
if(!$connect) die("ERROR");

$sql=$connect->query(
"SELECT Apartment FROM laundry.credentials  WHERE UserId='".$_REQUEST['UserId']."' AND Password='".$_REQUEST['Password']."'");
$apt = $sql->fetch_assoc();//must check if apt is stored there

session_start();
$_SESSION['UserId']=$_REQUEST['UserId']; //create variable for user
$_SESSION['Apartment']=$apt;

if($apt>0)
{
	
	echo "Login in!";
	header('Location:displaySchedule.php');
}
else 
{
	echo"User not found/password not correct. Try again.<br><a href=index.html>Login in</a> <br><br>";
	echo"If yout haven't registered ";
	echo "<br>	<a href=signup.html>Please Click to register	</a>";
	//
}
?>