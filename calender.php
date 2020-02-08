<?php include "includes/header.php";
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
    <li ><a href="index.php"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
    <li class="submenu"> <a href="#"><i class="icon icon-copy"></i> <span>Exams</span></a>
      <ul>
          <li><a href="internal.php"><i class="icon icon-file"></i> <span>Internal Exam</span></a></li>
          <li><a href="semester.php"><i class="icon icon-file"></i> <span>Semester Exam</span></a></li>
      </ul>
    </li>
    <li><a href="library.php"><i class="icon icon-book"></i> <span>Library</span></a> </li>
    <li><a href="attendance.php"><i class="icon icon-signal"></i> <span>Attendance</span></a> </li>
    <li><a href="timetable.php"><i class="icon icon-table"></i> <span>Timetable</span></a></li>
    <li class="active"><a href="calender.php"><i class="icon icon-calendar"></i> <span>Calender</span></a></li>
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
    <a href="#" title="Calender" class="current tip-bottom">Calender</a></div>
  </div>
<!--End-breadcrumbs-->

<!--All The content Goes Here-->
<div class="container-fluid">
	<hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box widget-calendar">
          <div class="widget-title"> <span class="icon"><i class="icon-calendar"></i></span>
            <h5>Calendar</h5>
          </div>
          <div class="widget-content">
            <div>
                <br>
              <div id="fullcalendar"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    
</div>
<!--End Of Container Fluid-->
</div>

<!--end-main-container-part-->

<!--Footer-part-->

<div class="row-fluid">
  <div id="footer" class="span12"> 2018 &copy; Academia Developed by Rc and Rk Mob:+91-8117057035, +91-8342003789</div>
</div>

<!--end-Footer-part-->

<script src="js/jquery.min.js"></script> 
<script src="js/jquery.ui.custom.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/fullcalendar.min.js"></script> 
<script src="js/matrix.js"></script> 
<script src="js/matrix.calendar.js"></script> 

<script type="text/javascript">
  // This function is called from the pop-up menus to transfer to
  // a different page. Ignore if the value returned is a null string:
  function goPage (newURL) {

      // if url is empty, skip the menu dividers and reset the menu selection to default
      if (newURL != "") {
      
          // if url is "-", it is this page -- reset the menu:
          if (newURL == "-" ) {
              resetMenu();            
          } 
          // else, send page to designated URL            
          else {  
            document.location.href = newURL;
          }
      }
  }

// resets the menu selection upon entry to this page:
function resetMenu() {
   document.gomenu.selector.selectedIndex = 2;
}
</script>
</body>
</html>
