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
    <li class="active"><a href="index.php"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
    <li class="submenu"> <a href="#"><i class="icon icon-copy"></i> <span>Exams</span></a>
      <ul>
        <li><a href="internal.php"><i class="icon icon-file"></i> <span>Internal Exam</span></a></li>
        <li><a href="semester.php"><i class="icon icon-file"></i> <span>Semester Exam</span></a></li>
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
    <div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a><a href="updateprofile.php" title="Update Profile" class="current tip-bottom">Update Profile</a></div>
  </div>
  <!--End-breadcrumbs-->
  <!--All The content Goes Here-->
  <div class="container-fluid">
    <hr>

    <div class="row-fluid" style="margin-left: 300px;">

      <div class="span6">

        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
            <h5>Profile Update &#187;</h5>
          </div>
          <div class="widget-content nopadding">
            <form action="includes/update_profile.php" method="post" class="form-horizontal">
              <div class="control-group">
                <label class="control-label">User Name :</label>
                <div class="controls">
                  <input type="text" class="span11" name="username" pattern="[A-Za-z0-9].{5,10}" value="<?php echo $_SESSION['username']; ?>" required title="Username must be 6 to 10 characters and not support any special characters" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">First Name :</label>
                <div class="controls">
                  <input type="text" class="span11" value="<?php echo $_SESSION['firstname']; ?>" readonly />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Last Name :</label>
                <div class="controls">
                  <input type="text" class="span11" value="<?php echo $_SESSION['lastname']; ?>" readonly />
                </div>
              </div>

              <div class="control-group">
                <label class="control-label" for="normal">DOB :</label>
                <div class="controls">
                  <input type="date" id="mask-date" class="span11 mask text" name="dob" value="<?php echo $_SESSION['dob']; ?>" required /><span class="help-block blue span8">MM/DD/YYYY</span>
                </div>
              </div>

              <div class="control-group">
                <label class="control-label">Branch :</label>
                <div class="controls">
                  <input type="text" class="span11" value="<?php echo $_SESSION['branch']; ?>" readonly />
                </div>
              </div>

              <div class="control-group">
                <label class="control-label">Semester :</label>
                <div class="controls">
                  <input type="text" class="span11" value="<?php echo $_SESSION['sem']; ?>" readonly />
                </div>
              </div>


              <div class="control-group">
                <label class="control-label">Email Id :</label>
                <div class="controls">
                  <input type="email" class="span11" name="email" value="<?php echo $_SESSION['email']; ?>" required />
                </div>
              </div>
              <div class="control-group">
                <label for="normal" class="control-label">Mob number :</label>
                <div class="controls">
                  <input type="text" id="" class="span8 mask text" name="phone" pattern=".{10}" value="<?php echo $_SESSION['phone']; ?>" required title="Please enter a valid phone number">
                </div>
              </div>
              <div class="control-group">
                <label for="normal" class="control-label">Address :</label>
                <div class="controls">
                  <!--                <input type="text" id="" class="span8 mask text">-->
                  <textarea id="address" name="address" required><?php echo $_SESSION['address']; ?></textarea>
                </div>
              </div>


              <div class="form-actions">
                <button type="submit" name="update" class="btn btn-warning" style="margin-left: 180px;">Update</button>
              </div>
            </form>
          </div>
        </div>

      </div>


    </div>



  </div>
  <!--End Of Container Fluid-->
</div>

<!--end-main-container-part-->

<!--Footer-part-->

<?php include "includes/footer.php"; ?>

<!--end-Footer-part-->
