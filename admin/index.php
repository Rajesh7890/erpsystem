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
    <div class="quick-actions_homepage" style="margin-left:60px;">
       
    <ul class="quick-actions">
      <li class="bg_lb"> <a href="#"> <i class="icon-home"></i> My Dashboard </a> </li>
      <li class="bg_lg"> <a href="internal.php"> <i class="icon-file"></i>Internal Exams</a> </li>
      <li class="bg_ly"> <a href="attendance.php"> <i class="icon-signal"></i> Attendance </a> </li>
      <li class="bg_lo"> <a href="timetable.php"> <i class="icon-table"></i> Timetable</a> </li>
      <li class="bg_lv"> <a href="calender.php"> <i class="icon-table"></i> Calender</a> </li>
      <li class="bg_ls"> <a href="notice.php"> <i class="icon-comments"></i> Notice</a> </li>
    </ul>
            
  </div>
<!--All The content Goes Here-->
<div class="container-fluid">
	<div class="widget-box span6">
          <div class="widget-title"> <span class="icon"><i class="icon-ok"></i></span>
            <h5>Notices</h5>
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
                $count = 1;
                
                while($row = mysqli_fetch_array($execute_query)) {
                    echo '<li class="clearfix">
                  <div class="txt">'.$row['message'].'<span class="by label">'.$row['post_by'].'</span> <span class="date badge badge-important">'.$row['date'].'</span> </div>
                  
                </li>';
                $count++;
                    if($count>4) {
                        break;
                    }
                }
                
                ?>
              
                
<!--
                <li class="clearfix">
                  <div class="txt"> Manage Pending Orders <span class="by label">Alex</span> <span class="date badge badge-warning">Today</span> </div>
                  <div class="pull-right"> <a class="tip" href="#" title="Edit Task"><i class="icon-pencil"></i></a> <a class="tip" href="#" title="Delete"><i class="icon-remove"></i></a> </div>
                </li>
-->
                <li>
                <a href="noticeview.php"><button class="btn btn-warning btn-mini">View All</button></a>
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