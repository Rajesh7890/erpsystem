<?php include "../includes/header.php";
include "../includes/db.php";
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
    <li><a href="attendance.php"><i class="icon icon-signal"></i> <span>Attendance</span></a> </li>
    <li class="active"><a href="timetable.php"><i class="icon icon-table"></i> <span>Timetable</span></a></li>
    <li><a href="notice.php"><i class="icon icon-comments"></i> <span>Notice</span></a></li>
  </ul>
</div>
<!--sidebar-menu-->

<!--main-container-part-->
<div id="content">
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
    <a href="#" class="current">Timetable</a></div>
  </div>
<!--End-breadcrumbs-->

<!--All The content Goes Here-->

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
                  if(isset($_GET['sem'])) {  
                          $sem = $_GET['sem'];
                          $day = $_GET['day'];
                          $query = "SELECT * FROM timetable WHERE sem = '{$sem}' AND branch = '{$_SESSION['branch']}' AND day = '{$day}'";
                          $execute_query = mysqli_query($connection,$query);

                          if(!$execute_query) {
                              die("QUERY FAILED".mysqli_error($connection));
                          }

                          while($row = mysqli_fetch_array($execute_query)) {
                              echo '<form action="timetable2.php?sem1='.$sem.'&day1='.$day.'" method="post">
                              <tr class="odd gradeX">
                          <td>'.$row['day'].'</td>
                          <td><input type="text" name="p1" value="'.$row["p1"].'"></input></td>
                          <td><input type="text" name="p2" value="'.$row["p2"].'"></input></td>
                          <td><input type="text" name="p3" value="'.$row["p3"].'"></input></td>
                          <td>'.$row["break"].'</td>
                          <td><input type="text" name="p4" value="'.$row["p4"].'"></input></td>
                          <td><input type="text" name="p5" value="'.$row["p5"].'"></input></td>
                          <td><input type="text" name="p6" value="'.$row["p6"].'"></input></td>
                          <td><button type="submit" name="save" class="btn btn-info btn-mini">Save</button></td>
                        </tr></form>';
                          }
                  }
                  
                  if(isset($_POST['save'])) {
                      $sem1 = $_GET['sem1'];
                      $day1 = $_GET['day1'];
                      $p1 = $_POST['p1'];
                      $p2 = $_POST['p2'];
                      $p3 = $_POST['p3'];
                      $p4 = $_POST['p4'];
                      $p5 = $_POST['p5'];
                      $p6 = $_POST['p6'];
                      $query = "UPDATE timetable SET p1='{$p1}', p2='{$p2}', p3='{$p3}', p4='{$p4}', p5='{$p5}', p6='{$p6}' WHERE sem = '{$sem1}' AND day='{$day1}' AND branch='{$_SESSION['branch']}'";
                      $execute_query = mysqli_query($connection,$query);
                      
                      if(!$execute_query) {
                          die("QUERY FAILED".mysqli_error($connection));
                      }
                      header("Location: timetable.php");
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
        
        </div>
<!--End Of Container Fluid-->
</div>

<!--end-main-container-part-->

<!--Footer-part-->

<?php include "../includes/footer.php";?>

<!--end-Footer-part-->
