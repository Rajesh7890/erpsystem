<?php include "db.php";
session_start();

if(isset($_POST['update']))
{
	$login_id = $_POST['login_id'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$mobile = $_POST['mobile'];
	$address = $_POST['address'];

	$query = "UPDATE admin SET login_id = '{$login_id}', name = '{$name}', email = '{$email}', mobile = '{$mobile}', address = '{$address}'";
	$execute_query = mysqli_query($connection,$query);

	if(!$execute_query) {
		die("QUERY FAILED".mysqli_error($connection));
	}

	$_SESSION['login_id'] = $login_id;
    $_SESSION['name'] = $name;
    $_SESSION['email'] = $email;
    $_SESSION['address'] = $address;
    $_SESSION['mobile'] = $mobile;

	header("Location: ../myprofile.php");
}
?>