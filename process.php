<?php 
require('db_connect.php');

//Code for Registration 
if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$msg=mysqli_query($connection,"insert into user(name,email,password) values('$name','$email','$password')");

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