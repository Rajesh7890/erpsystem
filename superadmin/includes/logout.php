<?php session_start();
$_SESSION['name'] = null;
$_SESSION['login_id'] = null;
$_SESSION['email'] = null;
$_SESSION['address'] = null;
$_SESSION['mobile'] = null;
$_SESSION['password'] = null;
header("Location: ../login.php");
?>