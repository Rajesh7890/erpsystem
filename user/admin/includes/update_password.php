<?php include "../../../includes/db.php";
session_start();
ob_start();

if(isset($_POST['pass']))
{
	$old_password = $_POST['old_password'];
	$new_password = $_POST['new_password'];
	$confirm_password = $_POST['confirm_password'];
    if($new_password == $confirm_password){
        if($_SESSION['password'] == $old_password) {

            $query = "UPDATE users SET password = '{$new_password}' WHERE regd_no = '{$_SESSION['regd_no']}'";
            $execute_query = mysqli_query($connection,$query);

            if(!$execute_query) {
                die("QUERY FAILED".mysqli_error($connection));
            }
            $_SESSION['password'] = $new_password;
            header("Location: ../changepassword.php?id=2");
        } else {
            header("Location: ../changepassword.php?id=1");

        }
    }else{
        header("Location: ../changepassword.php?id=3");
    }
}
?>
