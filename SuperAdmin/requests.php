<?php include "includes/header.php";
include "includes/db.php";
if(!isset($_SESSION['name'])) {
  header("Location: login.php");
}

?>
<!--sidebar-menu-->
<div id="sidebar"><a href="index.php" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul>
    <li><a href="index.php"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
    <li class="submenu"> <a href="#"><i class="icon icon-cogs"></i> <span>Manage Student</span></a>
      <ul>
          <li><a href="addstudent.php"><i class="icon icon-user"></i> <span>Add Student</span></a></li>
          <li><a href="managestudent.php"><em class="icon icon-edit"></em> <span>Manage Student</span></a></li>
      </ul>
    </li>
    <li class="submenu"> <a href="#"><i class="icon icon-cogs"></i> <span>Manage Teacher</span></a>
      <ul>
          <li><a href="addteacher.php"><i class="icon icon-user"></i> <span>Add Teacher</span></a></li>
          <li><a href="manageteacher.php"><em class="icon icon-edit"></em> <span>Manage Teacher</span></a></li>
      </ul>
    </li>
    <li><a href="feedback.php"><i class="icon icon-comments"></i> <span>Feedback</span></a></li>
    <li class="active"><a href="requests.php"><i class="icon icon-exclamation-sign"></i> <span>Requests</span></a></li>
  </ul>
</div>
<!--sidebar-menu-->

<!--main-container-part-->
<div id="content">
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a><a href="#" title="Feedback" class="current tip-bottom">Feedback</a></div>
  </div>
<!--End-breadcrumbs-->

<!--All Main content Goes Here-->
<div class="container-fluid">
	
  <!--All Contents goes here-->
    <?php 
    if(@$_GET['id'] == 1) {
        $status = $_GET['status'];
        if($status == 'NO'){
            $t = 'YES';
        }else{
            $t = 'NO';
        }
        $regd = $_GET['regd'];
        $query = "UPDATE requests SET resolved = '{$t}'";
        $execute_query = mysqli_query($connection,$query);
        if(!$execute_query) {
            die("QUERY FAILED".mysqli_error($connection));
        }
    }else if(@$_GET['id'] == 2) {
        $regd = $_GET['regd'];
        $query = "DELETE FROM requests WHERE regd_no = '{$regd}'";
        $execute_query = mysqli_query($connection,$query);
        if(!$execute_query) {
            die("QUERY FAILED".mysqli_error($connection));
        }
        
    }
    
    $query = "SELECT * FROM requests";
    $execute_query = mysqli_query($connection,$query);
    echo '<div class="widget-box span10">
              <div class="widget-title"> <span class="icon"> <i class="icon-file"></i> </span>
                <h5>All Requests</h5>
              </div>
              <div class="widget-content nopadding">
                <ul class="recent-posts">';
    if(!$execute_query) {
        die("QUERY FAILED".mysqli_error($connection));
    }
    while($row = mysqli_fetch_array($execute_query)) {
        if($row['resolved'] == 'NO') {
            $button = 'class="btn btn-warning btn-mini">Resolve';
        }else{
            $button = 'class="btn btn-success btn-mini">Solved';
        }
        echo '<li>
                    <div class="user-thumb"> <img width="40" height="40" alt="User" src="img/demo/av2.jpg"> </div>
                    <div class="article-post">
                      <div class="fr"><a href="requests.php?id=1&status='.$row['resolved'].'&regd='.$row['regd_no'].'" '.$button.'</a> <a href="requests.php?id=2&regd='.$row['regd_no'].'" class="btn btn-danger btn-mini">Delete</a><br></div>
                      <span class="user-info"> By: '.$row['regd_no'].' </span>
                      <p>For: <a href="#">'.$row['purpose'].'</a> </p>
                    </div>
                  </li>';
    }
    echo '</ul>
              </div>
            </div>';
    ?>

</div>
<!--End Of Container Fluid-->
</div>

<!--end-main-container-part-->

<!--Footer-part-->

<?php include "includes/footer.php";?>

<!--end-Footer-part-->

