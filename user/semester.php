<?php include "../includes/header.php";
?>
<?php
if ($_SESSION['role'] !== 'student') {
  header("Location: admin/index.php");
}
if (!isset($_SESSION['username'])) {
  header("Location: login.php");
}
?>
<!--sidebar-menu-->
<div id="sidebar">
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

<script src="../dist/js/sidebar.js"></script>

<!--Footer-part-->

<?php include "../includes/footer.php"; ?>

<!--end-Footer-part-->
