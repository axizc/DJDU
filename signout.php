Loading...
<?php
session_start();
$cookie_name = "user";
$cookie_value = '';
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
$_SESSION['incorrect']='';
header('location: index.php');
echo 'hi';
?>