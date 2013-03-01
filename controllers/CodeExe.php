<?php
session_start();
include('connect.php');
$firstName=$_POST['firstName'];
$lastName=$_POST['lastName'];
$email= $_POST['email'];
$username=$_POST['username'];
$password=$_POST['password'];

mysql_query("INSERT INTO users(user_fullname, lastname, email, user_name, user_password )VALUES('$firstName', '$lastName', '$email', '$username', '$password')");
header("location: ..success.php?remarks=success");
mysql_close($con);

?>
