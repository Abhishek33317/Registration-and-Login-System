<?php 
session_start(); 
 require('db_connect.php');

if (isset($_POST['email']) and isset($_POST['pass'])){
	
// Assigning POST values to variables.
$email = $_POST['email'];
$password = $_POST['pass'];

// CHECK FOR THE RECORD FROM TABLE
$query = "SELECT * FROM user WHERE email='.$email.' and password='.$password.'";
 
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);

if ($count == 2){
	$_SESSION['email']=$email;
	$_SESSION['password']=$password;
	header("Location: welcome.php");
    exit;

//echo "Login Credentials verified";
//echo "<script type='text/javascript'>alert('Login Credentials verified')</script>";

}
else
{
echo "<script type='text/javascript'>alert('Invalid Login Credentials')</script>";
//echo "Invalid Login Credentials";
}
}
?>
