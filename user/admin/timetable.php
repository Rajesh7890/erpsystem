<?php include "../../includes/header.php";
include "../../includes/db.php";
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
<div class="container-fluid">
	<form action="timetable.php" method="post" class="form-horizontal">
    <div class="control-group">
            <label class="control-label">Select Semester</label>
            <div class="controls">
              <select name="sem" required>
                <option value="1st">1st Semester</option>
                <option value="2nd">2nd Semester</option>
                <option value="3rd">3rd Semester</option>
                <option value="4th">4th Semester</option>
                <option value="5th">5th Semester</option>
                <option value="6th">6th Semester</option>
                <option value="7th">7th Semester</option>
                <option value="8th">8th Semester</option>
              </select>
                
                <button type="submit" name="view" class="btn btn-info btn-medium">View</button>
                
              
            </div>
          </div>
    </form>
</div>
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
                  
                  if(isset($_POST['view'])) {
                      
                      $sem = $_POST['sem'];
                      $query = "SELECT * FROM timetable WHERE sem = '{$sem}' AND branch = '{$_SESSION['branch']}'";
                      $execute_query = mysqli_query($connection,$query);

                      if(!$execute_query) {
                          die("QUERY FAILED".mysqli_error($connection));
                      }

                      while($row = mysqli_fetch_array($execute_query)) {
                          echo '<tr class="odd gradeX">
                      <td>'.$row['day'].'</td>
                      <td>'.$row["p1"].'</td>
                      <td>'.$row["p2"].'</td>
                      <td>'.$row["p3"].'</td>
                      <td>'.$row["break"].'</td>
                      <td>'.$row["p4"].'</td>
                      <td>'.$row["p5"].'</td>
                      <td>'.$row["p6"].'</td>
                      <td><a href="timetable2.php?sem='.$sem.'&day='.$row['day'].'"><button class="btn btn-warning btn-mini">Update</button></a></td>
                    </tr>';
                      }
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

<?php include "../../includes/footer.php";?>

<!--end-Footer-part-->
