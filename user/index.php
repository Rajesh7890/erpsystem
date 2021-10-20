<?php include "includes/header.php";
?>
<?php
if ($_SESSION['role'] !== 'student') {
  header("Location: Admin/index.php");
}
if (!isset($_SESSION['username'])) {
  header("Location: login.php");
}
include "includes/db.php";
?>
<!--sidebar-menu-->
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul>
    <li class="active"><a href="index.php"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
    <li class="submenu"> <a href="#"><i class="icon icon-copy"></i> <span>Exams</span></a>
      <ul>
        <li><a href="internal.php"><i class="icon icon-file"></i> <span>Internal Exam</span></a></li>
        <li><a href="semester.php"><em class="icon icon-file"></em> <span>Semester Exam</span></a></li>
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
    <div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
  </div>
  <!--End-breadcrumbs-->
  <div id="quick-actions-homepage" class="quick-actions_homepage">
  </div>

  <!--All The content Goes Here-->
  <div class="container-fluid">
    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span6">
          <div class="widget-box">
            <div class="widget-title bg_ly" data-toggle="collapse" href="#collapseG2"><span class="icon"><i class="icon-chevron-down"></i></span>
              <h5>Latest Notices</h5>
            </div>
            <div class="widget-content nopadding collapse in" id="collapseG2">
              <ul class="recent-posts">
                <?php
                $query = "SELECT * FROM notices ORDER BY id DESC";
                $execute_query = mysqli_query($connection, $query);

                if (!$execute_query) {
                  die("QUERY FAILED" . mysqli_error($connection));
                }
                $count = 1;

                while ($row = mysqli_fetch_array($execute_query)) {
                  echo '<li>
                <div class="user-thumb"> <img width="40" height="40" alt="User" src="img/demo/av1.jpg"> </div>
                <div class="article-post"> <span class="user-info"> By: ' . $row['post_by'] . ' / Date: ' . $row['date'] . ' </span>
                  <p><a href="#">' . $row['message'] . '</a> </p>
                </div>
              </li>';
                  $count++;
                  if ($count > 4) {
                    break;
                  }
                }

                ?>

                <li>
                  <a href="notice.php"><button class="btn btn-warning btn-mini">View All</button></a>
                </li>
              </ul>
            </div>
          </div>
          <!--Modal Start-->

          <!--Modal End-->

        </div>
        <!--<div class="span6">
        
        <div class="widget-box">
          <div class="widget-title bg_lo"  data-toggle="collapse" href="#collapseG3" > <span class="icon"> <i class="icon-chevron-down"></i> </span>
            <h5>News updates</h5>
          </div>
          <div class="widget-content nopadding updates collapse in" id="collapseG3">
            <div class="new-update clearfix"><i class="icon-ok-sign"></i>
              <div class="update-done"><a title="" href="#"><strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</strong></a> <span>dolor sit amet, consectetur adipiscing eli</span> </div>
              <div class="update-date"><span class="update-day">20</span>jan</div>
            </div>
            <div class="new-update clearfix"> <i class="icon-gift"></i> <span class="update-notice"> <a title="" href="#"><strong>Congratulation Maruti, Happy Birthday </strong></a> <span>many many happy returns of the day</span> </span> <span class="update-date"><span class="update-day">11</span>jan</span> </div>
            <div class="new-update clearfix"> <i class="icon-move"></i> <span class="update-alert"> <a title="" href="#"><strong>Maruti is a Responsive Admin theme</strong></a> <span>But already everything was solved. It will ...</span> </span> <span class="update-date"><span class="update-day">07</span>Jan</span> </div>
            <div class="new-update clearfix"> <i class="icon-leaf"></i> <span class="update-done"> <a title="" href="#"><strong>Envato approved Maruti Admin template</strong></a> <span>i am very happy to approved by TF</span> </span> <span class="update-date"><span class="update-day">05</span>jan</span> </div>
            <div class="new-update clearfix"> <i class="icon-question-sign"></i> <span class="update-notice"> <a title="" href="#"><strong>I am alwayse here if you have any question</strong></a> <span>we glad that you choose our template</span> </span> <span class="update-date"><span class="update-day">01</span>jan</span> </div>
          </div>
        </div>
      </div>-->
      </div>
      <hr>
    </div>
  </div>
  <!--End Of Container Fluid-->
</div>

<!--end-main-container-part-->

<!--Footer-part-->
<script src="../dist/quick_action_items.js"></script>

<?php include "includes/footer.php"; ?>

<!--end-Footer-part-->
