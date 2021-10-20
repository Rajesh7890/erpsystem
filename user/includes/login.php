<?php include "db.php";
session_start();
if(isset($_POST['login'])){
    
    $regd_no = $_POST['regd_no'];
    $password = $_POST['password'];
    
    $regd_no = mysqli_real_escape_string($connection, $regd_no);
    $password = mysqli_real_escape_string($connection, $password);
    
    $query = "SELECT * FROM users WHERE regd_no = '{$regd_no}'";
    $execute_query = mysqli_query($connection, $query);
    
    if(!$execute_query){
        die("QUERY FAILED".mysqli_error($connection));
    }
    
    while($row = mysqli_fetch_array($execute_query)){
        $db_regd_no = $row['regd_no'];
        $db_password = $row['password'];
        $db_username = $row['username'];
        $db_firstname = $row['firstname'];
        $db_lastname = $row['lastname'];
        $db_dob = $row['dob'];
        $db_branch = $row['branch'];
        $db_sem = $row['sem'];
        $db_email = $row['email'];
        $db_phone = $row['phone'];
        $db_address = $row['address'];
        $db_role = $row['role'];
    }
    
    if($regd_no !== $db_regd_no && $password !== $db_password) {
        header("Location: ../login.php?id=2345123475");
    } 
    else if($regd_no == $db_regd_no && $password == $db_password) {
        $_SESSION['regd_no'] = $db_regd_no;
        $_SESSION['password'] = $db_password;
        $_SESSION['username'] = $db_username;
        $_SESSION['firstname'] = $db_firstname;
        $_SESSION['lastname'] = $db_lastname;
        $_SESSION['dob'] = $db_dob;
        $_SESSION['branch'] = $db_branch;
        $_SESSION['sem'] = $db_sem;
        $_SESSION['email'] = $db_email;
        $_SESSION['phone'] = $db_phone;
        $_SESSION['address'] = $db_address;
        $_SESSION['role'] = $db_role;
        
        if($db_role == 'student') {
            header("Location: ../index.php");
        }else if($db_role == 'teacher'){
            header("Location: ../Admin/index.php");
        }
    } else {
        header("Location: ../login.php?id=2345123475");
    }
    
}

?>