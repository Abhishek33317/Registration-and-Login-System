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


if (mysqli_query($connection,$query)) 
{
  echo "New record created successfully";
 } 
else 
{
echo "Error: " . $query . "" . mysqli_error($connection);
}
}
?>

