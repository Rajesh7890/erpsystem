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
      <a href="#" title="Transport" class="current tip-bottom">Transport</a></div>
  </div>
  <!--End-breadcrumbs-->

  <!--All The content Goes Here-->
  <div class="container-fluid">

  </div>
  <!--End Of Container Fluid-->
</div>

<!--end-main-container-part-->

<script src="../dist/js/sidebar.js"></script>

<!--Footer-part-->

<?php include "../includes/footer.php"; ?>

<!--end-Footer-part-->
