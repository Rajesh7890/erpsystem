<?php include "../../includes/db.php";
session_start();

if(isset($_POST['update']))
{
	$username = $_POST['username'];
	$dob = $_POST['dob'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$address = $_POST['address'];

	$query = "UPDATE users SET username = '{$username}', dob = '{$dob}', email = '{$email}', phone = '{$phone}', address = '{$address}' WHERE regd_no = '{$_SESSION['regd_no']}'";
	$execute_query = mysqli_query($connection,$query);

	if(!$execute_query) {
		die("QUERY FAILED".mysqli_error($connection));
	}

	$_SESSION['username'] = $username;
	$_SESSION['dob'] = $dob;
	$_SESSION['email'] = $email;
	$_SESSION['phone'] = $phone;
	$_SESSION['address'] = $address;

	header("Location: ../myprofile.php?id=12325994184dsde485621348796314879631sdedf8cdegrhtehth5t484152478563214875632");
}
?>