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
    <li class="active"><a href="internal.php"><i class="icon icon-file"></i> <span>Internal Exam</span></a></li>
    <li><a href="attendance.php"><i class="icon icon-signal"></i> <span>Attendance</span></a> </li>
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

  <div class="widget-content nopadding">
        <form action="internal.php" method="post" class="form-horizontal">
<!--
           <div class="control-group">
              <label class="control-label">Enter Regd No :</label>
              <div class="controls">
                <input type="text" name="regd_no" class="span2"/>
              </div>
            </div>
-->
            
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
                
                
                
              
            </div>
          </div>
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
        </form>
      
      </div>
    <div class="widget-content tab-content">
          <div class="tab-pane active">
            <!--Sample Table:-Use The Table Class For Better Viewing During database query-->
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                    <?php include "../includes/db.php";
                    if(isset($_POST['view'])) {
                        $sem = $_POST['sem'];
                        $internal = $_POST['internal'];
                        echo "<th>Registration No.</th>
                        <th>Name</th>";
                        
                        $query = "SELECT * FROM subjects WHERE sem = '{$sem}' AND branch = '{$_SESSION['branch']}'";
                        $execute_query = mysqli_query($connection,$query);
                        
                        if(!$execute_query) {
                            die("QUERY FAILED".mysqli_error($connection));
                        }
                        
                        while($row = mysqli_fetch_array($execute_query)) {
                            
                            echo "<th>".$row['sub1']."</th>
                              <th>".$row['sub2']."</th>
                              <th>".$row['sub3']."</th>
                              <th>".$row['sub4']."</th>
                              <th>".$row['sub5']."</th>
                              <th>".$row['lab1']."</th>
                              <th>Task</th>";
                        }
                    
                    ?>
<!--
                  <th>Rendering engine</th>
                  <th>Browser</th>
                  <th>Platform(s)</th>
                  <th>Engine version</th>
                  <th>CSS grade</th>
-->
                </tr>
              </thead>
                <tbody>
                <?php /*if(@$_GET['regd'] != null) {
                        
                        $query4 = "SELECT * FROM exams WHERE sem = '{$sem}' AND internal = '{$internal}' AND regd_no = '{$_GET['regd']}'";
                        $execute_query4 = mysqli_query($connection,$query4);
                        
                        if(!$execute_query4) {
                            die("QUERY FAILED".mysqli_error($connection));
                        }
                        
                        while($row4 = mysqli_fetch_array($execute_query4)) {
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
                        <td><a href='internal.php?regd=".$row2['regd_no']."'>"."<button class='btn btn-warning btn-mini'>Update</button>"."</a></td></tr>";
                        }
                    }else*/{
                        $query2 = "SELECT * FROM exams WHERE sem = '{$sem}' AND internal = '{$internal}' AND branch = '{$_SESSION['branch']}'";
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
                        <td><a href='internal2.php?regd=".$row2['regd_no']."&sem=".$sem."&internal=".$internal."'>"."<button class='btn btn-warning btn-mini'>Update</button>"."</a></td></tr>";
                        }
                    }
                    }
                    
                    
                    ?>
              
<!--    Demo table Start
                <tr class="odd gradeX">
                  <td>Trident</td>
                  <td>Internet
                    Explorer 4.0</td>
                  <td>Win 95+</td>
                  <td class="center"> 4</td>
                  <td class="center">X</td>
                </tr>
                
                
        Demo table end -->
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