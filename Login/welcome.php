<!DOCTYPE HTML>  
<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>  

<?php
session_start();
require('db_connect.php');
$emails=$_SESSION['email'];
$passwords=$_SESSION['password'];
$query = "SELECT * FROM images WHERE email='$emails' and password='$passwords'";
$data = mysqli_query($connection, $query) or die(mysqli_error($connection));
$result=mysqli_fetch_assoc($data);
echo "Welcome".$result['username'];
// define variables and set to empty values
?>
<br>

<p>
PHP Variables
A variable can have a short name (like x and y) or a more descriptive name (age, carname, total_volume).
Rules for PHP variables:
A variable starts with the $ sign, followed by the name of the variable
A variable name must start with a letter or the underscore character
A variable name cannot start with a number
A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
Variable names are case-sensitive ($age and $AGE are two different variables)
</p>
</div><br>
<br>
<div>
<p3>
PHP is a Loosely Typed Language
In the example above 
notice that we did not have to tell PHP which data type the variable is.

PHP automatically associates a data type to the variable
depending on its value. 
Since the data types are not set in a strict sense 
you can do things like adding a string to an integer without causing an error.

In PHP 7, type declarations were added. 
This gives an option to specify the data type expected when declaring a function
and by enabling the strict requirement, it will throw a "Fatal Error" on a type mismatch.

You will learn more about strict and non-strict requirements, and data type declarations in the PHP Functions chapter.
</p>
<a href="logout.php">Logout</a>

</div>
</body>
</html>