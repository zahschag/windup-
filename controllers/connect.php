<?php
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_pass = "root";
$mysql_database = "windup";
$prefix = "";
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_pass) or die("Could not access database");
 mysql_select_db($mysql_database,$bd) or die("Coulnd't access database");


?>