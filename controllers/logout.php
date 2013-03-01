<?php
session_start();
unset($_SESSIONS ['userInfo']);
session_destroy($_SESSION['userInfo']);
session_regenerate_id(true);
header('Locations: auth.php');
exit;
?>