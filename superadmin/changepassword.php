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
    <div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a><a href="changepassword.php" class="current">Update Password</a></div>
  </div>
  <!--End-breadcrumbs-->
  <!--All The content Goes Here-->
  <?php if (@$_GET['id'] == 2) {
    echo "<center><strong><font color='green'>Password changed succesfully</font></strong></center>";
  }
  ?>
  <?php if (@$_GET['id'] == 3) {
    echo "<center><strong><font color='red'>Password not matching</font></strong></center>";
  }
  ?>
  <div class="container-fluid">
    <hr>

    <div class="row-fluid" style="margin-left: 300px;">

      <div class="span6">

        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
            <h5>Update Password &#187;</h5>
          </div>
          <div class="widget-content nopadding">
            <form action="includes/update_password.php" method="post" class="form-horizontal">
              <div class="control-group">
                <label class="control-label">Old Password :</label>
                <div class="controls">
                  <input type="password" class="span11" id="old_password" name="old_password" placeholder="Old Password" required />
                </div>
                <?php if (@$_GET['id'] == 1) {
                  echo "<center><strong><font color='red'>**Incorrect Password</font></strong></center>";
                }
                ?>
              </div>
              <div class="control-group">
                <label class="control-label">New Password :</label>
                <div class="controls">
                  <input type="password" class="span11" pattern=".{6,32}" id="new_password" name="new_password" placeholder="New Password" onkeyup="check();" required title="Password must be 6 to 32 characters" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Confirm Password :</label>
                <div class="controls">
                  <input type="password" class="span11" pattern=".{6,32}" id="confirm_password" name="confirm_password" placeholder="Repeat Password" onkeyup="check();" required title="Password must be 6 to 32 characters" />
                </div>
              </div>

              <center><span id='message'></span></center>

              <script>
                var check = function() {
                  if (document.getElementById('new_password').value ==
                    document.getElementById('confirm_password').value) {
                    document.getElementById('message').style.color = 'green';
                    document.getElementById('message').innerHTML = 'Password matched';
                  } else if (document.getElementById('new_password').value !=
                    document.getElementById('confirm_password').value) {
                    document.getElementById('message').style.color = 'red';
                    document.getElementById('message').innerHTML = 'Password not matching';
                  }
                }
              </script>

              <div class="form-actions">
                <button type="submit" name="pass" class="btn btn-success" style="margin-left: 180px;">Update</button>
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
