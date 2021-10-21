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
      <a href="#" title="Timetable" class="current tip-bottom">Timetable</a></div>
  </div>
  <!--End-breadcrumbs-->

  <!--All The content Goes Here-->
  <div class="container-fluid">

    <div class="widget-content tab-content">
      <!--          <div id="tab1" class="tab-pane active">-->
      <!--Sample Table:-Use The Table Class For Better Viewing During database query-->
      <table class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>DAY/PERIOD</th>
            <th>10A.M-11A.M</th>
            <th>11A.M-12P.M</th>
            <th>12P.M-01P.M</th>
            <th>01P.M-02P.M</th>
            <th>02P.M-03P.M</th>
            <th>03P.M-04P.M</th>
            <th>04P.M-05P.M</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $query = "SELECT * FROM timetable WHERE sem = '{$_SESSION['sem']}' AND branch = '{$_SESSION['branch']}'";
          $execute_query = mysqli_query($connection, $query);

          if (!$execute_query) {
            die("QUERY FAILED" . mysqli_error($connection));
          }

          while ($row = mysqli_fetch_array($execute_query)) {
            echo '<tr class="odd gradeX">
                  <td>' . $row["day"] . '</td>
                  <td>' . $row["p1"] . '</td>
                  <td>' . $row["p2"] . '</td>
                  <td>' . $row["p3"] . '</td>
                  <td>' . $row["break"] . '</td>
                  <td>' . $row["p4"] . '</td>
                  <td>' . $row["p5"] . '</td>
                  <td>' . $row["p6"] . '</td>
                </tr>';
          }
          ?>
          <!--
                <tr class="odd gradeX">
                  <td>Trident</td>
                  <td>Internet
                    Explorer 4.0</td>
                  <td>Win 95+</td>
                  <td class="center"> 4</td>
                  <td class="center">X</td>
                </tr>
-->

        </tbody>
      </table>

      <!--        </div>
          <div id="tab2" class="tab-pane">
            <p> waffle to pad out the comment. Usually, you just wish these sorts of comments would come to an end.multiple paragraphs and is full of waffle to pad out the comment. Usually, you just wish these sorts of comments would come to an end. </p>
          </div>
-->
    </div>

  </div>
  <!--End Of Container Fluid-->
</div>

<!--end-main-container-part-->

<script src="../dist/js/sidebar.js"></script>

<!--Footer-part-->

<?php include "../includes/footer.php"; ?>

<!--end-Footer-part-->
