<?php 
require('db_connect.php');

//Code for Registration 
if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$query="INSERT INTO `user`(`Id`, `name`, `email`, `password`) VALUES ('','$name','$email','$password')";
	$msg=mysqli_query($connection,$query);


if ($connection->query($msg) === TRUE)
{
    echo "New record created successfully";
} 
else
{
    echo "Error: " . $msg . "<br>" . $connection->error;
}
}
?>

