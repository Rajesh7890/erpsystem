<?php include "../includes/header.php";
if(!isset($_SESSION['username'])) {
  header("Location: ../login.php");
}
if($_SESSION['role'] !== 'teacher'){
  header("Location: ../index.php");
}

?>
<!--sidebar-menu-->
<div id="sidebar"><a href="index.php" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul>
    <li class="active"><a href="index.php"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
    <li><a href="internal.php"><i class="icon icon-file"></i> <span>Internal Exam</span></a></li>
    <li><a href="attendance.php"><i class="icon icon-signal"></i> <span>Attendance</span></a> </li>
    <li><a href="timetable.php"><i class="icon icon-table"></i> <span>Timetable</span></a></li>
    <li><a href="notice.php"><i class="icon icon-comments"></i> <span>Notice</span></a></li>
  </ul>
</div>
<!--sidebar-menu-->

<!--main-container-part-->
<div id="content">
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
  </div>
<!--End-breadcrumbs-->
    
<!--All The content Goes Here-->
<div class="container-fluid">
	<div class="widget-box span12">
          <div class="widget-title"> <span class="icon"><i class="icon-ok"></i></span>
            <h5>All Notices</h5>
          </div>
          <div class="widget-content">
            <div class="todo">
                <ul>
                <?php include "../includes/db.php";
                $query = "SELECT * FROM notices ORDER BY id DESC";
                $execute_query = mysqli_query($connection,$query);
                
                if(!$execute_query) {
                    die("QUERY FAILED".mysqli_error($connection));
                }
                
                while($row = mysqli_fetch_array($execute_query)) {
                    echo '<div class="user-thumb"> <img width="40" height="40" alt="User" src="img/demo/av2.jpg"> </div><li class="clearfix">
                  <div class="txt">'.$row['message'].'<span class="by label">'.$row['post_by'].'</span> <span class="date badge badge-important">'.$row['date'].'</span> </div>
                  
                </li>';
                 
                }
                
                ?>
              
                <li>
                <a href="notice.php"><button class="btn btn-info btn-mini">Add New</button></a>
              </li>

              </ul>
            </div>
          </div>
        </div>
</div>
<!--End Of Container Fluid-->
</div>

<!--end-main-container-part-->

<!--Footer-part-->

<?php include "../includes/footer.php";?>

<!--end-Footer-part-->