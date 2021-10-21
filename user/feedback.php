<?php session_start();
if ($_SESSION['role'] !== 'student') {
  header("Location: admin/index.php");
}
if (!isset($_SESSION['username'])) {
  header("Location: login.php");
}
include "../includes/db.php";

if (isset($_POST['submit'])) {
  $comment = $_POST['comment'];
  $query = "INSERT INTO feedback VALUES ('','{$_SESSION['regd_no']}','{$_SESSION['email']}','{$comment}','NO')";
  $execute_query = mysqli_query($connection, $query);

  if (!$execute_query) {
    die("QUERY FAILED" . mysqli_error($connection));
  }
  header("Location: feedback.php?id=3");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Matrix Admin</title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
  <link rel="stylesheet" href="css/colorpicker.css" />
  <link rel="stylesheet" href="css/datepicker.css" />
  <link rel="stylesheet" href="css/uniform.css" />
  <link rel="stylesheet" href="css/select2.css" />
  <link rel="stylesheet" href="css/matrix-style.css" />
  <link rel="stylesheet" href="css/matrix-media.css" />
  <link rel="stylesheet" href="css/bootstrap-wysihtml5.css" />
  <link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>

<body>

  <!--Header-part-->
  <div id="header">
    <h1><a href="dashboard.html">Matrix Admin</a></h1>
  </div>
  <!--close-Header-part-->


  <!--top-Header-menu-->
  <div id="user-nav" class="navbar navbar-inverse">
    <ul class="nav">
      <li class="dropdown" id="profile-messages"><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i> <span class="text"><?php echo $_SESSION['username']; ?>&nbsp;</span><b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="myprofile.php"><i class="icon-user"></i> My Profile</a></li>
          <li class="divider"></li>
          <li><a href="updateprofile.php"><i class="icon-user"></i> Edit Profile</a></li>
          <li class="divider"></li>
          <li><a href="changepassword.php"><i class="icon-key"></i> Change Password</a></li>
        </ul>
      </li>
      <li id="menu-messages"><a href="#"><i class="icon icon-envelope"></i> <span class="text">Messages</span></a></li>
      <li class=""><a title="" href="includes/logout.php"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>
    </ul>
  </div>
  <!--close-top-Header-menu-->
  <!--start-top-serch-->
  <!--close-top-serch-->
  <!--sidebar-menu-->
  <div id="sidebar">
  </div>
  <!--sidebar-menu-->

  <!--main-container-part-->
  <div id="content">
    <!--breadcrumbs-->
    <div id="content-header">
      <div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
        <a href="" title="Feedback" class="current tip-bottom">Feedback</a></div>
    </div>
    <!--End-breadcrumbs-->

    <!--All The content Goes Here-->
    <?php
    if (@$_GET['id'] == 3) {
      echo "<center><strong><font size=4 color='green'><i>Thanks for the feedback<i></font></strong></center>";
    }

    ?>
    <div class="container-fluid">
      <form action="feedback.php" method="post">
        <div class="row-fluid" style="margin-left: 200px;margin-top: 80px;">
          <div class="span8">

            <div class="widget-box">
              <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                <h5>Give Your Feedback &#187;</h5>
              </div>
              <div class="widget-content">
                <div class="control-group">
                  <form>
                    <div class="controls">
                      <textarea class="textarea_editor span12" name="comment" rows="6" placeholder="Enter text ..." required></textarea>
                    </div>
                  </form>
                </div><button type="submit" name="submit" class="btn btn-warning btn btn-md">Submit</button>
              </div>

            </div>

          </div>
        </div>
      </form>
      <!-- Feedback view here-->
    </div>
    <!--End Of Container Fluid-->
  </div>

  <!--end-main-container-part-->

  <script src="../dist/js/sidebar.js"></script>

  <!--Footer-part-->

  <div class="row-fluid">
    <div id="footer" class="span12"> 2018 &copy; Academia Developed by Rc and Rk Mob:+91-8117057035, +91-8342003789</div>
  </div>

  <!--end-Footer-part-->

  <script src="js/jquery.min.js"></script>
  <script src="js/jquery.ui.custom.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/bootstrap-colorpicker.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.toggle.buttons.js"></script>
  <script src="js/masked.js"></script>
  <script src="js/jquery.uniform.js"></script>
  <script src="js/select2.min.js"></script>
  <script src="js/matrix.js"></script>
  <script src="js/matrix.form_common.js"></script>
  <script src="js/wysihtml5-0.3.0.js"></script>
  <script src="js/jquery.peity.min.js"></script>
  <script src="js/bootstrap-wysihtml5.js"></script>

  <script>
    $('.textarea_editor').wysihtml5();
  </script>
  <script type="text/javascript">
    // This function is called from the pop-up menus to transfer to
    // a different page. Ignore if the value returned is a null string:
    function goPage(newURL) {

      // if url is empty, skip the menu dividers and reset the menu selection to default
      if (newURL != "") {

        // if url is "-", it is this page -- reset the menu:
        if (newURL == "-") {
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
