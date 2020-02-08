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
    <li><a href="index.php"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
    <li class="submenu"> <a href="#"><i class="icon icon-copy"></i> <span>Exams</span></a>
      <ul>
          <li><a href="internal.php"><i class="icon icon-file"></i> <span>Internal Exam</span></a></li>
          <li><a href="semester.php"><i class="icon icon-file"></i> <span>Semester Exam</span></a></li>
      </ul>
    </li>
    <li><a href="library.php"><i class="icon icon-book"></i> <span>Library</span></a> </li>
    <li><a href="attendance.php"><i class="icon icon-signal"></i> <span>Attendance</span></a> </li>
    <li class="active"><a href="timetable.php"><i class="icon icon-table"></i> <span>Timetable</span></a></li>
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
    <a href="#" title="Timetable" class="current tip-bottom">Timetable</a></div>
  </div>
<!--End-breadcrumbs-->

<!--All The content Goes Here-->
<div class="container-fluid">
	
     <div class="widget-content tab-content">
<!--          <div id="tab1" class="tab-pane active">-->
            <!--Sample Table:-Use The Table Class For Better Viewing During database query-->
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>DAY/PERIOD</th>
                  <th>10A.M-11A.M</th>
                  <th>11A.M-12P.M</th>
                  <th>12P.M-01P.M</th>
                  <th>01P.M-02P.M</th>
                  <th>02P.M-03P.M</th>
                  <th>03P.M-04P.M</th>
                  <th>04P.M-05P.M</th>
                </tr>
              </thead>
              <tbody>
                  <?php 
                  $query = "SELECT * FROM timetable WHERE sem = '{$_SESSION['sem']}' AND branch = '{$_SESSION['branch']}'";
                  $execute_query = mysqli_query($connection,$query);
                  
                  if(!$execute_query) {
                      die("QUERY FAILED".mysqli_error($connection));
                  }
                  
                  while($row = mysqli_fetch_array($execute_query)) {
                      echo '<tr class="odd gradeX">
                  <td>'.$row["day"].'</td>
                  <td>'.$row["p1"].'</td>
                  <td>'.$row["p2"].'</td>
                  <td>'.$row["p3"].'</td>
                  <td>'.$row["break"].'</td>
                  <td>'.$row["p4"].'</td>
                  <td>'.$row["p5"].'</td>
                  <td>'.$row["p6"].'</td>
                </tr>';
                  }
                  ?>
<!--
                <tr class="odd gradeX">
                  <td>Trident</td>
                  <td>Internet
                    Explorer 4.0</td>
                  <td>Win 95+</td>
                  <td class="center"> 4</td>
                  <td class="center">X</td>
                </tr>
-->
                
              </tbody>
            </table>
          
<!--        </div>
          <div id="tab2" class="tab-pane">
            <p> waffle to pad out the comment. Usually, you just wish these sorts of comments would come to an end.multiple paragraphs and is full of waffle to pad out the comment. Usually, you just wish these sorts of comments would come to an end. </p>
          </div>
-->
        </div>
    
</div>
<!--End Of Container Fluid-->
</div>

<!--end-main-container-part-->

<!--Footer-part-->

<?php include "includes/footer.php";?>

<!--end-Footer-part-->
