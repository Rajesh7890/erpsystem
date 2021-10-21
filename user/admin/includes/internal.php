<?php include "../../../includes/db.php";
if(isset($_POST['save'])) {
    $regd_no = $_GET['regd_no'];
    $sem = $_GET['sem'];
    $internal = $_GET['internal'];
    $sub1 = $_POST['sub1'];
    $sub2 = $_POST['sub2'];
    $sub3 = $_POST['sub3'];
    $sub4 = $_POST['sub4'];
    $sub5 = $_POST['sub5'];
    $lab1 = $_POST['lab1'];
    
    $query = "UPDATE exams SET sub1 = '{$sub1}', sub2 = '{$sub2}', sub3 = '{$sub3}', sub4 = '{$sub4}', sub5 = '{$sub5}', lab1 = '{$lab1}' WHERE regd_no = '{$regd_no}' AND sem = '{$sem}' AND internal = '{$internal}'";
    $execute_query = mysqli_query($connection,$query);
    
    if(!$execute_query) {
        die("QUERY FAILED".mysqli_error($connection));
    }else{
        header("Location: ../internal.php");
    }
    
}

?>
