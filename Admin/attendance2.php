<?php include "../includes/header.php";
if(!isset($_SESSION['username'])) {
  header("Location: ../login.php");
}
if($_SESSION['role'] !== 'teacher'){
  header("Location: ../index.php");
}

?>
<!--sidebar-menu-->
<div id="sidebar"><a href="index.php" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul>
    <li><a href="index.php"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
    <li><a href="internal.php"><i class="icon icon-file"></i> <span>Internal Exam</span></a></li>
    <li class="active"><a href="attendance.php"><i class="icon icon-signal"></i> <span>Attendance</span></a> </li>
    <li><a href="timetable.php"><i class="icon icon-table"></i> <span>Timetable</span></a></li>
    <li><a href="notice.php"><i class="icon icon-comments"></i> <span>Notice</span></a></li>
  </ul>
</div>
<!--sidebar-menu-->

<!--main-container-part-->
<div id="content">
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
    <a href="#" class="current">Internal</a></div>
  </div>
<!--End-breadcrumbs-->
<!--All The content Goes Here-->

    <div class="widget-content tab-content">
          <div class="tab-pane active">
            <!--Sample Table:-Use The Table Class For Better Viewing During database query-->
            <table class="table table-bordered table-striped">
              <thead>
                  <tr>
                <?php include "../includes/db.php";
                      $regd_no = $_GET['regd'];
                  $sem = $_GET['sem'];
                  $query1 = "SELECT * FROM subjects WHERE sem = '{$sem}'";
                  $execute_query1 = mysqli_query($connection,$query1);
                  
                  if(!$execute_query1) {
                      die("QUERY FAILED".mysqli_error($connection));
                  }
                  while($row1 = mysqli_fetch_array($execute_query1)) {
                      echo "<th>Regd No.</th>
                      <th>".$row1['sub1']."</th>
                      <th>".$row1['sub2']."</th>
                      <th>".$row1['sub3']."</th>
                      <th>".$row1['sub4']."</th>
                      <th>".$row1['sub5']."</th>
                      <th>".$row1['lab1']."</th>
                      <th>Save</th>";
                  }
                      echo "</tr></thead>";
                  ?>
                      <tbody><?php
                  $query = "SELECT * FROM attendance WHERE regd_no = '{$regd_no}' AND sem = '{$sem}'";
                  $execute_query = mysqli_query($connection,$query);
                  
                  if(!$execute_query) {
                      die("QUERY FAILED".mysqli_error($connection));
                  }
                  
                  while($row = mysqli_fetch_array($execute_query)) {
                      echo '<form action="includes/attendance.php?regd_no='.$row['regd_no'].'&sem='.$sem.'" method="post">';
                      echo "<tr class='odd gradeX'>
                      <td>".$row['regd_no']."</td>
                          <td><input class='span2' min='0' type='number' name='sub1' value='".$row['sub1']."'></input></td>
                          <td><input class='span2' min='0' type='number' name='sub2' value='".$row['sub2']."'></input></td>
                          <td><input class='span2' min='0' type='number' name='sub3' value='".$row['sub3']."'></input></td>
                          <td><input class='span2' min='0' type='number' name='sub4' value='".$row['sub4']."'></input></td>
                          <td><input class='span2' min='0' type='number' name='sub5' value='".$row['sub5']."'></input></td>
                          <td><input class='span2' min='0' type='number' name='lab1' value='".$row['lab1']."'></input></td>
                        <td><button type='submit' name='save' class='btn btn-info btn-mini'>Save</button></td></tr></form>";
                  }
                  
                  ?>

              </tbody>
            </table>
          </div>
    </div>
<!--End Of Container Fluid--> 
</div>

<!--end-main-container-part-->

<!--Footer-part-->

<?php include "../includes/footer.php";?>

<!--end-Footer-part-->