<?php include "../../includes/header.php";
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
    <div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a><a href="#" class="current">Attendance</a></div>
  </div>
<!--End-breadcrumbs-->

<!--All The content Goes Here-->

<div class="widget-content nopadding">
        <form action="attendance.php" method="post" class="form-horizontal">
            
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
<!--
            <div class="control-group">
              <label class="control-label">Select Internal :</label>
              <div class="controls">
                <select name="internal" required>
                <option value="1st">1st Internal</option>
                <option value="2nd">2nd Internal</option>
              </select>
                  <button type="submit" name="view" class="btn btn-info btn-medium">View</button>
              </div>
            </div>
-->
        </form>
      
      </div>
    <div class="widget-content tab-content">
          <div class="tab-pane active">
            <!--Sample Table:-Use The Table Class For Better Viewing During database query-->
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                    <?php include "../../includes/db.php";
                    if(isset($_GET['sub'])){
                        $sub = $_GET['sub'];
                        $sem = $_GET['sem'];
                        if($sub == 'sub1') {
                            $query = "UPDATE attendance SET sub1 = sub1+1 WHERE sem = '{$sem}' AND branch = '{$_SESSION['branch']}'";
                        }else if($sub == 'sub2') {
                            $query = "UPDATE attendance SET sub2 = sub2+1 WHERE sem = '{$sem}' AND branch = '{$_SESSION['branch']}'";
                        }else if($sub == 'sub3') {
                            $query = "UPDATE attendance SET sub3 = sub3+1 WHERE sem = '{$sem}' AND branch = '{$_SESSION['branch']}'";
                        }else if($sub == 'sub4') {
                            $query = "UPDATE attendance SET sub4 = sub4+1 WHERE sem = '{$sem}' AND branch = '{$_SESSION['branch']}'";
                        }else if($sub == 'sub5') {
                            $query = "UPDATE attendance SET sub5 = sub5+1 WHERE sem = '{$sem}' AND branch = '{$_SESSION['branch']}'";
                        }else if($sub == 'lab1') {
                            $query = "UPDATE attendance SET lab1 = lab1+1 WHERE sem = '{$sem}' AND branch = '{$_SESSION['branch']}'";
                        }
                        
                        $execute_query = mysqli_query($connection,$query);
                        if(!$execute_query) {
                            die("QUERY FAILED".mysqli_error($connection));
                        }
                    }
                    if(isset($_POST['view'])) {
                        $sem = $_POST['sem'];
//                        $internal = $_POST['internal'];
                        echo "<th>Registration No.</th>
                        <th>Name</th>";
                        
                        $query = "SELECT * FROM subjects WHERE sem = '{$sem}' AND branch = '{$_SESSION['branch']}'";
                        $execute_query = mysqli_query($connection,$query);
                        
                        if(!$execute_query) {
                            die("QUERY FAILED".mysqli_error($connection));
                        }
                        
                        while($row = mysqli_fetch_array($execute_query)) {
                            
                            echo "<th>".$row['sub1']."<br><a href='attendance.php?sub=sub1&sem=".$sem."'><i class='icon-plus-sign'>Add</i></a></th>
                              <th>".$row['sub2']."<br><a href='attendance.php?sub=sub2&sem=".$sem."'><i class='icon-plus-sign'>Add</i></a></th>
                              <th>".$row['sub3']."<br><a href='attendance.php?sub=sub3&sem=".$sem."'><i class='icon-plus-sign'>Add</i></a></th>
                              <th>".$row['sub4']."<br><a href='attendance.php?sub=sub4&sem=".$sem."'><i class='icon-plus-sign'>Add</i></a></th>
                              <th>".$row['sub5']."<br><a href='attendance.php?sub=sub5&sem=".$sem."'><i class='icon-plus-sign'>Add</i></a></th>
                              <th>".$row['lab1']."<br><a href='attendance.php?sub=lab1&sem=".$sem."'><i class='icon-plus-sign'>Add</i></a></th>
                              <th>Task</th>";
                        }
                    
                    ?>
                </tr>
              </thead>
                <tbody>
                <?php {
                        $query2 = "SELECT * FROM attendance WHERE sem = '{$sem}' AND branch = '{$_SESSION['branch']}' AND branch = '{$_SESSION['branch']}'";
                        $execute_query2 = mysqli_query($connection,$query2);
                        
                        if(!$execute_query2) {
                            die("QUERY FAILED".mysqli_error($connection));
                        }
                        
                        while($row2 = mysqli_fetch_array($execute_query2)) {
                            echo "<tr class='odd gradeX'>
                          <td>".$row2['regd_no']."</td>";
                            
                            $query3 = "SELECT firstname,lastname FROM users WHERE regd_no = '{$row2["regd_no"]}'";
                            $execute_query3 = mysqli_query($connection,$query3);
                            
                            if(!$execute_query3) {
                                die("QUERY FAILED".mysqli_error($connection));
                            }
                            while($row3 = mysqli_fetch_array($execute_query3)) {
                                echo "<td>".$row3['firstname']." ".$row3['lastname']."</td>";
                            }
                            
                             echo "<td>".$row2['sub1']."</td>
                          <td>".$row2['sub2']."</td>
                          <td>".$row2['sub3']."</td>
                          <td>".$row2['sub4']."</td>
                          <td>".$row2['sub5']."</td>
                          <td>".$row2['lab1']."</td>
                        <td><a href='attendance2.php?regd=".$row2['regd_no']."&sem=".$sem."'><button class='btn btn-warning btn-mini'>Update</button>"."</a></td></tr>";
                        }
                    }
                    }
                    
                    
                    ?>

              </tbody>
            </table>
        </div></div>
    </div>
<!--end-main-container-part-->

<!--Footer-part-->

<?php include "../../includes/footer.php";?>

<!--end-Footer-part-->
