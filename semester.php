<?php include "includes/header.php";
?>
<?php
if ($_SESSION['role'] !== 'student') {
  header("Location: Admin/index.php");
}
if (!isset($_SESSION['username'])) {
  header("Location: login.php");
}
?>
<!--sidebar-menu-->
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul>
    <li class=""><a href="index.php"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
    <li class="active submenu open"> <a href="#"><i class="icon icon-copy"></i> <span>Exams</span></a>
      <ul>
        <li><a href="internal.php"><i class="icon icon-file"></i> <span>Internal Exam</span></a></li>
        <li class="active"><a href="semester.php"><i class="icon icon-file"></i> <span>Semester Exam</span></a></li>
      </ul>
    </li>
    <li><a href="library.php"><i class="icon icon-book"></i> <span>Library</span></a> </li>
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
      <a href="#" title="Exams" class="tip-bottom">Exams</a><a href="#" title="Semester Exam" class="tip-bottom current">Semester</a></div>
  </div>
  <!--End-breadcrumbs-->





  <!--All The content Goes Here-->
  <div class="container-fluid">
    <!--	<p style="font-family: serif;font-size: 20px;text-decoration: none;margin-top: 15px;"><a href="http://bputexam.in/studentsection/resultpublished/studentresult.aspx" target="iframe_a">Click here to view semister results</a></p>-->
    <iframe style="margin-top: 20px;" height="500px" width="100%" src="http://bputexam.in/studentsection/resultpublished/studentresult.aspx" name="iframe_a"></iframe>


  </div>
  <!--End Of Container Fluid-->
</div>

<!--end-main-container-part-->

<!--Footer-part-->

<?php include "includes/footer.php"; ?>

<!--end-Footer-part-->
