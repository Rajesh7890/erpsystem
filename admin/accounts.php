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
    <li><a href="index.php"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
    <li><a href="internal.php"><i class="icon icon-file"></i> <span>Internal Exam</span></a></li>
    <li><a href="attendance.php"><i class="icon icon-signal"></i> <span>Attendance</span></a> </li>
    <li><a href="timetable.php"><i class="icon icon-table"></i> <span>Timetable</span></a></li>
    <li class="active"><a href="accounts.php"><i class="icon icon-money"></i> <span>Accounts</span></a></li>
    <li><a href="events.php"><i class="icon icon-picture"></i> <span>Events and Activities</span></a></li>
    <li><a href="notice.php"><i class="icon icon-comments"></i> <span>Notice</span></a></li>
  </ul>
</div>
<!--sidebar-menu-->

<!--main-container-part-->
<div id="content">
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a><a href="#" class="current">Accounts</a></div>
  </div>
<!--End-breadcrumbs-->

<!--All The content Goes Here-->


  <div class="widget-content nopadding">
        <form action="#" method="get" class="form-horizontal">
          <div class="control-group">
            <label class="control-label">Select Semister</label>
            <div class="controls">
              <select >
                <option>1st Semister</option>
                <option>2nd Semister</option>
                <option>3rd Semister</option>
                <option>4th Semister</option>
                <option>5th Semister</option>
                <option>6th Semister</option>
                <option>7th Semister</option>
                <option>8th Semister</option>
                
              </select>
            </div>
          </div>
        </form>
      </div>

<!--End Of Container Fluid-->
</div>

<!--end-main-container-part-->

<!--Footer-part-->

<?php include "../includes/footer.php";?>

<!--end-Footer-part-->