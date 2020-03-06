<?php
$host ='localhost';
$username ='admin';
$password ='admin';
$db ='v12';
$con= mysqli_connect($host,$username,$password,$db) or die("Error: " . mysqli_error($con));
mysqli_query($con, "SET NAMES 'utf8' ");
error_reporting( error_reporting() & ~E_NOTICE );


?>

