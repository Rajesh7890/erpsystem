<?php include "../includes/header.php";
?>
<?php
if ($_SESSION['role'] !== 'student') {
  header("Location: admin/index.php");
}
if (!isset($_SESSION['username'])) {
  header("Location: login.php");
}
include "../includes/db.php";
?>
<!--sidebar-menu-->
<div id="sidebar">
</div>
<!--sidebar-menu-->

<!--main-container-part-->
<div id="content">
  <!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a><a href="#" title="Attendance" class="current tip-bottom">Attendance</a></div>
  </div>
  <!--End-breadcrumbs-->

  <!--All The content Goes Here-->
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="span12">
        <div class="accordion" id="collapse-group">
          <div class="accordion-group widget-box">
            <div class="accordion-heading">
              <div class="widget-title"> <a data-parent="#collapse-group" href="#collapseGOne" data-toggle="collapse"> <span class="icon"><i class="icon-bookmark"></i></span>
                  <h5>First Semester</h5>
                </a> </div>
            </div>
            <div class="collapse accordion-body" id="collapseGOne">
              <div class="widget-content">
                <!--Write In widget Content Sample Table:-Use The Table Class For Better Viewing During database query-->
                <table class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>Rendering engine</th>
                      <th>Browser</th>
                      <th>Platform(s)</th>
                      <th>Engine version</th>
                      <th>CSS grade</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="odd gradeX">
                      <td>Trident</td>
                      <td>Internet
                        Explorer 4.0</td>
                      <td>Win 95+</td>
                      <td class="center"> 4</td>
                      <td class="center">X</td>
                    </tr>
                    <tr class="even gradeC">
                      <td>Trident</td>
                      <td>Internet
                        Explorer 5.0</td>
                      <td>Win 95+</td>
                      <td class="center">5</td>
                      <td class="center">C</td>
                    </tr>
                    <tr class="odd gradeA">
                      <td>Trident</td>
                      <td>Internet
                        Explorer 5.5</td>
                      <td>Win 95+</td>
                      <td class="center">5.5</td>
                      <td class="center">A</td>
                    </tr>
                    <tr class="even gradeA">
                      <td>Trident</td>
                      <td>Internet
                        Explorer 6</td>
                      <td>Win 98+</td>
                      <td class="center">6</td>
                      <td class="center">A</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="accordion-group widget-box">
            <div class="accordion-heading">
              <div class="widget-title"> <a data-parent="#collapse-group" href="#collapseGTwo" data-toggle="collapse"> <span class="icon"><i class="icon-bookmark"></i></span>
                  <h5>Second Semester</h5>
                </a> </div>
            </div>
            <div class="collapse accordion-body" id="collapseGTwo">
              <div class="widget-content">
                <ul class="unstyled">
                  <li>Math : 20 <span class="pull-right strong">Total : 27</span>
                    <div class="progress progress-striped progress-success active">
                      <div class="bar" style="width: 80%;"></div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="accordion-group widget-box">
            <div class="accordion-heading">
              <div class="widget-title"> <a data-parent="#collapse-group" href="#collapseGThree" data-toggle="collapse"> <span class="icon"><i class="icon-bookmark"></i></span>
                  <h5>Third Semester</h5>
                </a> </div>
            </div>
            <div class="collapse accordion-body" id="collapseGThree">
              <div class="widget-content"> Another is open </div>
            </div>
          </div>
          <div class="accordion-group widget-box">
            <div class="accordion-heading">
              <div class="widget-title"> <a data-parent="#collapse-group" href="#collapseGFour" data-toggle="collapse"> <span class="icon"><i class="icon-bookmark"></i></span>
                  <h5>Fourth Semester</h5>
                </a> </div>
            </div>
            <div class="collapse accordion-body" id="collapseGFour">
              <div class="widget-content"> Another is open </div>
            </div>
          </div>
          <div class="accordion-group widget-box">
            <div class="accordion-heading">
              <div class="widget-title"> <a data-parent="#collapse-group" href="#collapseGFive" data-toggle="collapse"> <span class="icon"><i class="icon-bookmark"></i></span>
                  <h5>Fifth Semester</h5>
                </a> </div>
            </div>
            <div class="collapse accordion-body" id="collapseGFive">
              <div class="widget-content"> Another is open </div>
            </div>
          </div>
          <div class="accordion-group widget-box">
            <div class="accordion-heading">
              <div class="widget-title"> <a data-parent="#collapse-group" href="#collapseGSix" data-toggle="collapse"> <span class="icon"><i class="icon-bookmark"></i></span>
                  <h5>Sixth Semester</h5>
                </a> </div>
            </div>
            <div class="collapse accordion-body" id="collapseGSix">
              <div class="widget-content"> Another is open </div>
            </div>
          </div>
          <div class="accordion-group widget-box">
            <div class="accordion-heading">
              <div class="widget-title"> <a data-parent="#collapse-group" href="#collapseGSeven" data-toggle="collapse"> <span class="icon"><i class="icon-bookmark"></i></span>
                  <h5>Seventh Semester</h5>
                </a> </div>
            </div>
            <div class="collapse accordion-body" id="collapseGSeven">
              <div class="widget-content"> Another is open </div>
            </div>
          </div>
          <div class="accordion-group widget-box">
            <div class="accordion-heading">
              <div class="widget-title"> <a data-parent="#collapse-group" href="#collapseGEight" data-toggle="collapse"> <span class="icon"><i class="icon-bookmark"></i></span>
                  <h5>Eight Semester</h5>
                </a> </div>
            </div>
            <div class="collapse accordion-body" id="collapseGEight">
              <div class="widget-content">
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
                      $query = "SELECT * FROM attendance WHERE regd_no = '{$_SESSION['regd_no']}' AND sem = '{$_SESSION['sem']}' AND branch = '{$_SESSION['branch']}'";
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

                      $query1 = "SELECT * FROM attendance WHERE regd_no = 'total' AND sem = '{$_SESSION['sem']}' AND branch = '{$_SESSION['branch']}'";
                      $execute_query1 = mysqli_query($connection, $query1);

                      if (!$execute_query1) {
                        die("QUERY FAILED" . mysqli_error($connection));
                      }
                      while ($row1 = mysqli_fetch_array($execute_query1)) {
                        echo "<tr class='odd gradeX'>
                          <td>" . $row1['regd_no'] . "</td>
                          <td>" . $row1['sub1'] . "</td>
                          <td>" . $row1['sub2'] . "</td>
                          <td>" . $row1['sub3'] . "</td>
                          <td>" . $row1['sub4'] . "</td>
                          <td>" . $row1['sub5'] . "</td>
                          <td>" . $row1['lab1'] . "</td>
                        </tr>";
                      }
                    }
                    ?>
                    <!--<tr class="even gradeC">
                    <td>Trident</td>
                    <td>Internet
                      Explorer 5.0</td>
                    <td>Win 95+</td>
                    <td class="center">5</td>
                    <td class="center">C</td>
                  </tr>-->

                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
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
