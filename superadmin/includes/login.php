<?php include "db.php";
session_start();
ob_start();

if(isset($_POST['login'])) {
    $login_id = $_POST['login_id'];
    $password = $_POST['password'];
    
    $login_id = mysqli_real_escape_string($connection, $login_id);
    $password = mysqli_real_escape_string($connection, $password);
    
    $query = "SELECT * FROM admin WHERE login_id = '{$login_id}'";
    $execute_query = mysqli_query($connection,$query);
    
    if(!$execute_query) {
        die("ERROR".mysqli_error($connection));
    }
    
    while($row = mysqli_fetch_array($execute_query)) {
        $db_login_id = $row['login_id'];
        $db_password = $row['password'];
        $db_name = $row['name'];
        $db_email = $row['email'];
        $db_address = $row['address'];
        $db_mobile = $row['mobile'];
    }
    
    if($login_id == $db_login_id && $password == $db_password) {
        $_SESSION['login_id'] = $db_login_id;
        $_SESSION['name'] = $db_name;
        $_SESSION['email'] = $db_email;
        $_SESSION['address'] = $db_address;
        $_SESSION['mobile'] = $db_mobile;
        $_SESSION['password'] = $db_password;
        header("Location: ../index.php");
    }else if($login_id !== $db_login_id && $password !== $db_password) {
        header("Location: ../login.php?id=deferfefefhvbfgfeyfeuhru654jbfet3t3");
    }else{
        header("Location: ../login.php?id=deferfefefhvbfgfeyfeuhru654jbfet3t3");
    }
}

?>