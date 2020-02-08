<?php session_start();

$_SESSION['regd_no'] = null;
$_SESSION['username'] = null;
$_SESSION['firstname'] = null;
$_SESSION['lastname'] = null;
$_SESSION['dob'] = null;
$_SESSION['branch'] = null;
$_SESSION['sem'] = null;
$_SESSION['email'] = null;
$_SESSION['phone'] = null;
$_SESSION['address'] = null;

header("Location: ../index.php");
?>