<?php
session_start(); //will start the session
unset($_SESSIONS ['userInfo']);//will unset the session
session_destroy($_SESSION['userInfo']);//Will destroy the session 
session_regenerate_id(true);//Will allow the user to log in again
header('Locations: auth.php');//will take the users back to the auth.php page
exit;//will exit the program
?>