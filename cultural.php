<?php session_start();
if ($_SESSION['role'] !== 'student') {
  header("Location: Admin/index.php");
}
if (!isset($_SESSION['username'])) {
  header("Location: login.php");
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
  <link rel="stylesheet" href="css/fullcalendar.css" />
  <link rel="stylesheet" href="css/matrix-style.css" />
  <link rel="stylesheet" href="css/matrix-media.css" />
  <link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" href="css/jquery.gritter.css" />
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,700,800" rel="stylesheet" type="text/css">


  <!--gallery css-->
  <style>
    .gallery {
      -webkit-column-count: 3;
      -moz-column-count: 3;
      column-count: 3;
      -webkit-column-gap: 10px;
      -moz-column-gap: 10px;
      column-gap: 10px;
      margin-top: 10px;
      overflow: hidden;
    }

    .gallery img {
      width: 100%;
      height: auto;
      transition: 500ms;
      margin-bottom: 10px;
      opacity: 0.8;
      page-break-inside: avoid;
      /* For Firefox. */
      -webkit-column-break-inside: avoid;
      /* For Chrome & friends. */
      break-inside: avoid;
      /* For standard browsers like IE. :-) */
    }

    .gallery img:hover {
      opacity: 1;
    }

    .modal-img,
    .model-vid {
      width: 100%;
      height: auto;
    }

    .modal-body {
      padding: 0px;
    }

    .modal-dialog {
      text-align: center;
      vertical-align: middle;
      display: block;
      top: 10%;
    }

    .modal-content {
      border: none;
    }

    @media screen and (max-width: 767px) {
      .gallery {
        -webkit-column-count: 2;
        -moz-column-count: 2;
        column-count: 2;
      }

      .gallery div {
        margin: 0;
        width: 200px;
      }
    }

    @media screen and (max-width: 479px) {
      .gallery {
        -webkit-column-count: 1;
        -moz-column-count: 1;
        column-count: 1;
      }

      .gallery div {
        margin: 0;
        width: 200px;
      }
    }













    // Import icon font, I've used Entypo (http://entypo.com/)
    @import url(http://weloveiconfonts.com/api/?family=entypo);

    // Import Roboto font
    @import url(https://fonts.googleapis.com/css?family=Roboto:300);

    html,
    body {
      font-family: 'Roboto', sans-serif;
      font-size: 16px;
      line-height: 24px;
    }

    .pagination-container {
      margin-top: 1em;
      padding-top: 2em;
      border-top: 1px solid #d7dadb;
      text-align: center;
    }

    .pagination-item {
      list-style-type: none;
      display: inline-block;
      border-right: 1px solid #d7dadb;

      transform: scale(1) rotate(19deg) translateX(0px) translateY(0px) skewX(-10deg) skewY(-20deg);
    }

    .pagination-item:hover,
    .pagination-item.is-active {
      background-color: #fa4248;
      border-right: 1px solid #fff;

      .pagination-link {
        color: #fff;
      }

    }

    .pagination-item.first-number {
      border-left: 1px solid #d7dadb;
    }

    .pagination-link {
      padding: 1.1em 1.6em;
      display: inline-block;
      text-decoration: none;
      color: #8b969c;

      transform: scale(1) rotate(0deg) translateX(0px) translateY(0px) skewX(20deg) skewY(0deg);
    }

    .pagination-item--wide {
      //@extend .pagination-item;
      list-style-type: none;
      display: inline-block;
    }

    .pagination-item--wide.first {
      margin: 0 1em 0 0;
    }

    .pagination-item--wide.last {
      margin: 0 0 0 1em;
    }

    .pagination-link--wide {
      text-decoration: none;
      color: #8b969c;
      padding: 1.1em 1.6em;
    }

    .pagination-link--wide:hover {
      color: #fa4248;
    }

    .pagination-link--wide.first:before,
    .pagination-link--wide.last:after {
      font-family: 'entypo';
      speak: none;
      font-style: normal;
      font-weight: normal;
      font-variant: normal;
      text-transform: none;
      line-height: 1;

      // Better Font Rendering
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
    }

    .pagination-link--wide.first::before {
      content: "\E765";
      margin-right: 0.5em;
    }

    .pagination-link--wide.last::after {
      content: "\E766";
      margin-left: 0.5em;
    }
  </style>
  <!--gallery css and pagination end-->



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
  <div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
    <ul>
      <li class=""><a href="index.php"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
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
      <li class="active submenu open"> <a href="#"><i class="icon icon-picture"></i> <span>Gallery</span></a>
        <ul>
          <li class="active"><a href="cultural.html"><i class="icon icon-camera-retro"></i> <span>Culture Event</span></a></li>
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
      <div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a><a href="#" title="Gallery" class="tip-bottom">Gallery</a><a href="#" title="Cultural Event" class="current tip-bottom">Cultural Events</a></div>
    </div>
    <!--End-breadcrumbs-->

    <!--All The content Goes Here-->
    <div class="container-fluid">


      <!--gallery start-->

      <div class="container">
        <div class="gallery">
          <img src="https://img.buzzfeed.com/buzzfeed-static/static/2015-08/11/14/enhanced/webdr01/original-9161-1439317330-3.jpg?downsize=715:*&output-format=auto&output-quality=auto" alt="" width="100%" height="auto" class="gallery-img" />

          <img src="https://img.buzzfeed.com/buzzfeed-static/static/2015-08/11/14/enhanced/webdr08/original-1654-1439317465-3.jpg?downsize=715:*&output-format=auto&output-quality=auto" alt="" width="100%" height="auto" class="gallery-img" />
          <img src="https://img.buzzfeed.com/buzzfeed-static/static/2015-08/11/15/enhanced/webdr08/original-13354-1439321173-3.jpg?downsize=715:*&output-format=auto&output-quality=auto" alt="" width="100%" height="auto" class="gallery-img" />
          <img src="https://img.buzzfeed.com/buzzfeed-static/static/2015-08/11/15/enhanced/webdr04/original-25740-1439321209-5.jpg?downsize=715:*&output-format=auto&output-quality=auto" alt="" width="100%" height="auto" class="gallery-img" />
          <img src="https://img.buzzfeed.com/buzzfeed-static/static/2015-08/11/15/enhanced/webdr08/original-9292-1439319916-3.jpg?downsize=715:*&output-format=auto&output-quality=auto" alt="" width="100%" height="auto" class="gallery-img" />
          <img src="https://img.buzzfeed.com/buzzfeed-static/static/2015-08/11/14/enhanced/webdr05/original-6710-1439319334-17.jpg?downsize=715:*&output-format=auto&output-quality=auto" alt="" width="100%" height="auto" class="gallery-img" />

          <img src="https://img.buzzfeed.com/buzzfeed-static/static/2015-08/11/15/enhanced/webdr02/original-16901-1439320287-3.jpg?downsize=715:*&output-format=auto&output-quality=auto" alt="" width="100%" height="auto" class="gallery-img" />
          <img src="https://img.buzzfeed.com/buzzfeed-static/static/2015-08/11/15/enhanced/webdr04/original-29345-1439321306-8.jpg?downsize=715:*&output-format=auto&output-quality=auto" alt="" width="100%" height="auto" class="gallery-img" />
          <img src="https://img.buzzfeed.com/buzzfeed-static/static/2015-08/11/15/enhanced/webdr15/original-20286-1439320376-10.jpg?downsize=715:*&output-format=auto&output-quality=auto" alt="" width="100%" height="auto" class="gallery-img" />
          <img src="https://img.buzzfeed.com/buzzfeed-static/static/2015-08/11/14/enhanced/webdr02/original-6989-1439317507-15.jpg?downsize=715:*&output-format=auto&output-quality=auto" alt="" width="100%" height="auto" class="gallery-img" />
          <img src="https://img.buzzfeed.com/buzzfeed-static/static/2015-08/11/14/enhanced/webdr11/original-8867-1439317446-6.jpg?downsize=715:*&output-format=auto&output-quality=auto" alt="" width="100%" height="auto" class="gallery-img" />
          <img src="https://img.buzzfeed.com/buzzfeed-static/static/2015-08/11/14/enhanced/webdr03/original-22498-1439319085-3.jpg?downsize=715:*&output-format=auto&output-quality=auto" alt="" width="100%" height="auto" class="gallery-img" />
        </div>
      </div>

      <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-body">
            </div>
          </div>
        </div>
      </div>

      <!--gallery end-->



      <br>

      <!--pagination-->

      <div class="pagination-container wow zoomIn mar-b-1x" data-wow-duration="0.5s">

        <ul class="pagination">
          <li class="pagination-item--wide first"> <a class="pagination-link--wide first" href="#">Previous</a> </li>
          <li class="pagination-item first-number is-active"> <a class="pagination-link" href="#">1</a> </li>
          <li class="pagination-item"> <a class="pagination-link" href="#">2</a> </li>
          <li class="pagination-item "> <a class="pagination-link" href="#">3</a> </li>
          <li class="pagination-item"> <a class="pagination-link" href="#">4</a> </li>
          <li class="pagination-item"> <a class="pagination-link" href="#">5</a> </li>

          <li class="pagination-item--wide last"> <a class="pagination-link--wide last" href="#">Next</a> </li>
        </ul>

      </div>

      <!--pagination end-->





    </div>
    <!--End Of Container Fluid-->
  </div>

  <!--end-main-container-part-->

  <!--Footer-part-->

  <?php include "includes/footer.php"; ?>

  <!--end-Footer-part-->
