<?php include "../includes/header.php";
include "../includes/db.php";
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
      <a href="#" title="Exams" class="tip-bottom">Exams</a><a href="#" title="Internal Exam" class="current tip-bottom">Internal</a></div>
  </div>
  <!--End-breadcrumbs-->
  <!--All The content Goes Here-->
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title">
            <ul class="nav nav-tabs">
              <li class="active"><a data-toggle="tab" href="#tab1">&nbsp;&nbsp;&nbsp;First Internal&nbsp;&nbsp;&nbsp;</a></li>
              <li><a data-toggle="tab" href="#tab2">&nbsp;&nbsp;&nbsp;Second Internal&nbsp;&nbsp;&nbsp;</a></li>
            </ul>
          </div>
          <div class="widget-content tab-content">
            <div id="tab1" class="tab-pane active">
              <!--Sample Table:-Use The Table Class For Better Viewing During database query-->
              <table class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Registration Number</th>
                    <?php
                    if ($_SESSION['sem']) {
                      $query = "SELECT * FROM subjects WHERE sem = '{$_SESSION['sem']}' AND branch = '{$_SESSION['branch']}'";
                      $execute_query = mysqli_query($connection, $query);

                      if (!$execute_query) {
                        die("QUERY FAILED" . mysqli_error($connection));
                      }

                      while ($row = mysqli_fetch_array($execute_query)) {
                        echo "<th>" . $row['sub1'] . "</th>
                              <th>" . $row['sub2'] . "</th>
                              <th>" . $row['sub3'] . "</th>
                              <th>" . $row['sub4'] . "</th>
                              <th>" . $row['sub5'] . "</th>
                              <th>" . $row['lab1'] . "</th>";
                      }
                    }
                    ?>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  if ($_SESSION['sem'] == '8th') {
                    $query = "SELECT * FROM exams WHERE regd_no = '{$_SESSION['regd_no']}' AND internal = '1st' AND sem = '{$_SESSION['sem']}' AND branch = '{$_SESSION['branch']}'";
                    $execute_query = mysqli_query($connection, $query);

                    if (!$execute_query) {
                      die("QUERY FAILED" . mysqli_error($connection));
                    }

                    while ($row = mysqli_fetch_array($execute_query)) {
                      echo "<tr class='odd gradeX'>
                          <td>" . $_SESSION['regd_no'] . "</td>
                  <td>" . $row['sub1'] . "</td>
                  <td>" . $row['sub2'] . "</td>
                  <td>" . $row['sub3'] . "</td>
                  <td>" . $row['sub4'] . "</td>
                  <td>" . $row['sub5'] . "</td>
                  <td>" . $row['lab1'] . "</td>
                </tr>";
                    }
                  }
                  ?>

                </tbody>
              </table>
            </div>
            <div id="tab2" class="tab-pane">
              <table class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Registration Number</th>
                    <?php
                    if ($_SESSION['sem']) {
                      $query = "SELECT * FROM subjects WHERE sem = '{$_SESSION['sem']}' AND branch = '{$_SESSION['branch']}'";
                      $execute_query = mysqli_query($connection, $query);

                      if (!$execute_query) {
                        die("QUERY FAILED" . mysqli_error($connection));
                      }

                      while ($row = mysqli_fetch_array($execute_query)) {
                        echo "<th>" . $row['sub1'] . "</th>
                              <th>" . $row['sub2'] . "</th>
                              <th>" . $row['sub3'] . "</th>
                              <th>" . $row['sub4'] . "</th>
                              <th>" . $row['sub5'] . "</th>
                              <th>" . $row['lab1'] . "</th>";
                      }
                    }
                    ?>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  if ($_SESSION['sem']) {
                    $query = "SELECT * FROM exams WHERE regd_no = '{$_SESSION['regd_no']}' AND internal = '2nd' AND sem = '{$_SESSION['sem']}' AND branch = '{$_SESSION['branch']}'";
                    $execute_query = mysqli_query($connection, $query);

                    if (!$execute_query) {
                      die("QUERY FAILED" . mysqli_error($connection));
                    }

                    while ($row = mysqli_fetch_array($execute_query)) {
                      echo "<tr class='odd gradeX'>
                          <td>" . $_SESSION['regd_no'] . "</td>
                  <td>" . $row['sub1'] . "</td>
                  <td>" . $row['sub2'] . "</td>
                  <td>" . $row['sub3'] . "</td>
                  <td>" . $row['sub4'] . "</td>
                  <td>" . $row['sub5'] . "</td>
                  <td>" . $row['lab1'] . "</td>
                </tr>";
                    }
                  }
                  ?>

                </tbody>
              </table>
            </div>
          </div>
        </div>
        <center><strong>
            <font color='red'>Note: Total mark in each subject is 30</font>
          </strong></center>
      </div>
    </div>
  </div>
  <!--End Of Container Fluid-->
</div>

<!--end-main-container-part-->

<script src="../dist/js/sidebar.js"></script>

<!--Footer-part-->

<?php include "../includes/footer.php"; ?>

<!--end-Footer-part-->
