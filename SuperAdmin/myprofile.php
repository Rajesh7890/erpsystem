<?php include "includes/header.php";
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
    <div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
      <a href="myprofile.php" title="My Profile" class="tip-bottom"><i class="icon-user"></i>My Profile</a></div>
  </div>
  <!--End-breadcrumbs-->
  <!--All The content Goes Here-->
  <div class="container-fluid">
    <hr>

    <div class="row-fluid" style="margin-left: 300px;">

      <div class="span6">

        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
            <h5>My Profile &#187;</h5>
          </div>
          <div class="widget-content nopadding">
            <form action="updateprofile.php" method="post" class="form-horizontal">
              <div class="control-group">
                <label class="control-label">User ID :</label>
                <div class="controls">
                  <input type="text" class="span11" value="<?php echo $_SESSION['login_id']; ?>" readonly />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Name :</label>
                <div class="controls">
                  <input type="text" class="span11" value="<?php echo $_SESSION['name']; ?>" readonly />
                </div>
              </div>


              <div class="control-group">
                <label class="control-label">Email Id :</label>
                <div class="controls">
                  <input type="text" class="span11" value="<?php echo $_SESSION['email']; ?>" readonly />
                </div>
              </div>
              <div class="control-group">
                <label for="normal" class="control-label">Mob number :</label>
                <div class="controls">
                  <input type="text" id="" class="span8 mask text" value="<?php echo $_SESSION['mobile']; ?>" readonly>
                </div>
              </div>
              <div class="control-group">
                <label for="normal" class="control-label">Address :</label>
                <div class="controls">
                  <!--                <input type="text" id="" class="span8 mask text">-->
                  <textarea id="address" name="address" readonly><?php echo $_SESSION['address']; ?></textarea>
                </div>
              </div>


              <div class="form-actions">
                <button type="submit" name="submit" class="btn btn-info" style="margin-left: 200px;">Edit Profile</button>
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
