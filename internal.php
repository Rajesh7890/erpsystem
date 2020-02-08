<?php include "includes/header.php";
include "includes/db.php";
?>
<?php 
if($_SESSION['role'] !== 'student') {
    header("Location: Admin/index.php");
}
if(!isset($_SESSION['username'])){
    header("Location: login.php");
}
?>
<!--sidebar-menu-->
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul>
    <li class=""><a href="index.php"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
    <li class="active submenu open"> <a href="#"><i class="icon icon-copy"></i> <span>Exams</span></a>
      <ul>
          <li class="active"><a href="internal.php"><i class="icon icon-file"></i> <span>Internal Exam</span></a></li>
          <li><a href="semester.php"><i class="icon icon-file"></i> <span>Semester Exam</span></a></li>
      </ul>
    </li>
    <li ><a href="library.php"><i class="icon icon-book"></i> <span>Library</span></a> </li>
    <li><a href="attendance.php"><i class="icon icon-signal"></i> <span>Attendance</span></a> </li>
    <li><a href="timetable.php"><i class="icon icon-table"></i> <span>Timetable</span></a></li>
    <li><a href="calender.php"><i class="icon icon-calendar"></i> <span>Calender</span></a></li>
    <li><a href="Elearning/pages/site/index.html" target="_blank"><i class="icon icon-copy"></i> <span>Lectures Note</span></a></li>
    <li class="submenu"> <a href="#"><i class="icon icon-picture"></i> <span>Gallery</span></a>
      <ul>
          <li><a href="cultural.php"><i class="icon icon-camera-retro"></i> <span>Culture Event</span></a></li>
          <li><a href="techfest.php"><i class="icon icon-film"></i> <span>Techfest</span></a></li>
      </ul>
    </li>
    <li><a href="transport.php"><i class="icon icon-truck"></i> <span>Transport</span></a></li>
    <li><a href="discipline.php"><i class="icon icon-bullhorn"></i> <span>Discipline</span></a></li>
    <li><a href="feedback.php"><i class="icon icon-comments"></i> <span>Feedback</span></a></li>
  </ul>
</div>
<!--sidebar-menu-->

<!--main-container-part-->
<div id="content">
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
    <a href="#" title="Exams" class="tip-bottom">Exams</a><a href="#"title="Internal Exam" class="current tip-bottom">Internal</a></div>
  </div>
<!--End-breadcrumbs-->
<!--All The content Goes Here-->
<div class="container-fluid">
  <div class="row-fluid">
    <div class="span12">
      <div class="widget-box">
        <div class="widget-title">
          <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#tab1">&nbsp;&nbsp;&nbsp;First Internal&nbsp;&nbsp;&nbsp;</a></li>
            <li><a data-toggle="tab" href="#tab2">&nbsp;&nbsp;&nbsp;Second Internal&nbsp;&nbsp;&nbsp;</a></li>
          </ul>
        </div>
        <div class="widget-content tab-content">
          <div id="tab1" class="tab-pane active">
            <!--Sample Table:-Use The Table Class For Better Viewing During database query-->
            <table class="table table-bordered table-striped">
              <thead>
                  <tr>
                  <th>Registration Number</th>
                  <?php
                      if($_SESSION['sem']) {
                          $query = "SELECT * FROM subjects WHERE sem = '{$_SESSION['sem']}' AND branch = '{$_SESSION['branch']}'";
                          $execute_query = mysqli_query($connection,$query);
                          
                          if(!$execute_query) {
                              die("QUERY FAILED".mysqli_error($connection));
                          }
                          
                          while($row = mysqli_fetch_array($execute_query)) {
                              echo "<th>".$row['sub1']."</th>
                              <th>".$row['sub2']."</th>
                              <th>".$row['sub3']."</th>
                              <th>".$row['sub4']."</th>
                              <th>".$row['sub5']."</th>
                              <th>".$row['lab1']."</th>";
                          }
                      }
                      ?>
                </tr>
              </thead>
              <tbody>
                  <?php
                  if($_SESSION['sem']=='8th'){
                      $query = "SELECT * FROM exams WHERE regd_no = '{$_SESSION['regd_no']}' AND internal = '1st' AND sem = '{$_SESSION['sem']}' AND branch = '{$_SESSION['branch']}'";
                      $execute_query = mysqli_query($connection,$query);
                      
                      if(!$execute_query) {
                          die("QUERY FAILED".mysqli_error($connection));
                      }
                      
                      while($row = mysqli_fetch_array($execute_query)) {
                          echo "<tr class='odd gradeX'>
                          <td>".$_SESSION['regd_no']."</td>
                  <td>".$row['sub1']."</td>
                  <td>".$row['sub2']."</td>
                  <td>".$row['sub3']."</td>
                  <td>".$row['sub4']."</td>
                  <td>".$row['sub5']."</td>
                  <td>".$row['lab1']."</td>
                </tr>";
                      }
                  }
                  ?>
                
              </tbody>
            </table>
          </div>
          <div id="tab2" class="tab-pane">
            <table class="table table-bordered table-striped">
              <thead>
                  <tr>
                  <th>Registration Number</th>
                  <?php
                      if($_SESSION['sem']) {
                          $query = "SELECT * FROM subjects WHERE sem = '{$_SESSION['sem']}' AND branch = '{$_SESSION['branch']}'";
                          $execute_query = mysqli_query($connection,$query);
                          
                          if(!$execute_query) {
                              die("QUERY FAILED".mysqli_error($connection));
                          }
                          
                          while($row = mysqli_fetch_array($execute_query)) {
                              echo "<th>".$row['sub1']."</th>
                              <th>".$row['sub2']."</th>
                              <th>".$row['sub3']."</th>
                              <th>".$row['sub4']."</th>
                              <th>".$row['sub5']."</th>
                              <th>".$row['lab1']."</th>";
                          }
                      }
                      ?>
                </tr>
              </thead>
              <tbody>
                  <?php
                  if($_SESSION['sem']){
                      $query = "SELECT * FROM exams WHERE regd_no = '{$_SESSION['regd_no']}' AND internal = '2nd' AND sem = '{$_SESSION['sem']}' AND branch = '{$_SESSION['branch']}'";
                      $execute_query = mysqli_query($connection,$query);
                      
                      if(!$execute_query) {
                          die("QUERY FAILED".mysqli_error($connection));
                      }
                      
                      while($row = mysqli_fetch_array($execute_query)) {
                          echo "<tr class='odd gradeX'>
                          <td>".$_SESSION['regd_no']."</td>
                  <td>".$row['sub1']."</td>
                  <td>".$row['sub2']."</td>
                  <td>".$row['sub3']."</td>
                  <td>".$row['sub4']."</td>
                  <td>".$row['sub5']."</td>
                  <td>".$row['lab1']."</td>
                </tr>";
                      }
                  }
                  ?>
                
              </tbody>
            </table>
          </div>
        </div>
      </div><center><strong><font color='red'>Note: Total mark in each subject is 30</font></strong></center>
    </div>
  </div>
</div>
<!--End Of Container Fluid--> 
</div>

<!--end-main-container-part-->

<!--Footer-part-->

<?php include "includes/footer.php";?>

<!--end-Footer-part-->
