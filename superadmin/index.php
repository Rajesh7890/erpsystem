<?php include "includes/header.php";
include "includes/db.php";
if (!isset($_SESSION['name'])) {
  header("Location: login.php");
}

?>
<!--sidebar-menu-->
<div id="sidebar"><a href="index.php" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul>
    <li class="active"><a href="index.php"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
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
    <li><a href="requests.php"><i class="icon icon-exclamation-sign"></i> <span>Requests</span></a></li>
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
      <li class="bg_lg"> <a href="addstu.php"> <i class="icon-user"></i>Add Student</a> </li>
      <li class="bg_ly"> <a href="mngstu.php"> <i class=" icon-edit"></i>Manage Student</a> </li>
      <li class="bg_ls"> <a href="addtea.php"> <i class="icon-user"></i>Add Teacher</a> </li>
      <li class="bg_lo"> <a href="mngtea.php"> <i class="icon-edit"></i>Manage Teacher</a> </li>
      <li class="bg_ls"> <a href="feedback.php"> <i class="icon-comments"></i>Feedback</a> </li>
      <li class="bg_ls"> <a href="feedback.php"> <i class="icon-exclamation-sign"></i>Requests</a> </li>
    </ul>

  </div>
  <!--All The content Goes Here-->
  <div class="container-fluid">

    <!--All Contents goes here-->
    <div class="widget-box span6">
      <div class="widget-title"> <span class="icon"> <i class="icon-file"></i> </span>
        <h5>Recent Notices</h5>
      </div>
      <div class="widget-content nopadding">
        <ul class="recent-posts">
          <?php
          $count = 0;
          $query = "SELECT * FROM notices ORDER BY id DESC";
          $execute_query = mysqli_query($connection, $query);

          if (!$execute_query) {
            die("QUERY FAILED" . mysqli_error($connection));
          }
          while ($row = mysqli_fetch_array($execute_query)) {
            $count++;
            if ($count > 5) {
              break;
            }
            echo '<li>
                <div class="user-thumb"> <img width="40" height="40" alt="User" src="img/demo/av1.jpg"> </div>
                <div class="article-post">
                  <div class="fr"></div>
                  <span class="user-info"> By: ' . $row['post_by'] . ' / Date: ' . $row['date'] . ' </span>
                  <p><a href="#">' . $row['message'] . '</a> </p>
                </div>
              </li>';
          }
          ?>


          <li>
            <a href="notice.php"><button class="btn btn-success btn-mini">View All</button></a>
          </li>
        </ul>
      </div>
    </div>

  </div>
  <!--End Of Container Fluid-->
</div>

<!--end-main-container-part-->

<!--Footer-part-->

<?php include "includes/footer.php"; ?>

<!--end-Footer-part-->
