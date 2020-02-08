<?php include "includes/header.php";
?>
<?php 
if($_SESSION['role'] !== 'student') {
    header("Location: Admin/index.php");
}
if(!isset($_SESSION['username'])){
    header("Location: login.php");
}
?>
<!--sidebar-menu-->
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul>
    <li><a href="index.php"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
    <li class="submenu"> <a href="#"><i class="icon icon-copy"></i> <span>Exams</span></a>
      <ul>
          <li><a href="internal.php"><i class="icon icon-file"></i> <span>Internal Exam</span></a></li>
          <li><a href="semester.php"><i class="icon icon-file"></i> <span>Semester Exam</span></a></li>
      </ul>
    </li>
    <li class="active"><a href="library.php"><i class="icon icon-book"></i> <span>Library</span></a> </li>
    <li><a href="attendance.php"><i class="icon icon-signal"></i> <span>Attendance</span></a> </li>
    <li><a href="timetable.php"><i class="icon icon-table"></i> <span>Timetable</span></a></li>
    <li><a href="calender.php"><i class="icon icon-calendar"></i> <span>Calender</span></a></li>
    <li><a href="Elearning/pages/site/index.html" target="_blank"><i class="icon icon-copy"></i> <span>Lectures Note</span></a></li>
    <li class="submenu"> <a href="#"><i class="icon icon-picture"></i> <span>Gallery</span></a>
      <ul>
          <li><a href="cultural.php"><i class="icon icon-camera-retro"></i> <span>Culture Event</span></a></li>
          <li><a href="techfest.php"><i class="icon icon-film"></i> <span>Techfest</span></a></li>
      </ul>
    </li>
    <li><a href="transport.php"><i class="icon icon-truck"></i> <span>Transport</span></a></li>
    <li><a href="discipline.php"><i class="icon icon-bullhorn"></i> <span>Discipline</span></a></li>
    <li><a href="feedback.php"><i class="icon icon-comments"></i> <span>Feedback</span></a></li>
  </ul>
</div>
<!--sidebar-menu-->

<!--main-container-part-->
<div id="content">
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a><a href="#" title="Library" class="tip-bottom current">Library</a></div>
  </div>
<!--End-breadcrumbs-->

<!--All The content Goes Here-->
<div class="container-fluid">
	<center><strong><font color="blue">See the books you have barrowed</font></strong></center>
    
    <div class="widget-content">
              <!--Write In widget Content Sample Table:-Use The Table Class For Better Viewing During database query-->
              <table class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Book ID</th>
                    <th>Book Name</th>
                    <th>Author Name</th>
                    <th>Publisher</th>
                    <th>Issue Date</th>
                    <th>Return Date</th>
                  </tr>
                </thead>
                <tbody>
<!--
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
-->
                    <?php include "includes/db.php";
                    $query1 = "SELECT * FROM book_barrowed WHERE regd_no = '{$_SESSION['regd_no']}'";
                    $execute_query1 = mysqli_query($connection,$query1);
                    
                    if(!$execute_query1) {
                        die("QUERY FAILED".mysqli_error($connection));
                    }
                    while($row = mysqli_fetch_array($execute_query1)) {
                        $book_id = $row['book_id'];
                        $date_issue = $row['date_issue'];
                        $date_return = $row['date_return'];
                        
                        $query2 = "SELECT * FROM books WHERE book_id = '{$book_id}'";
                        $execute_query2 = mysqli_query($connection,$query2);
                        
                        if(!$execute_query2) {
                            die("QUERY FAILED".mysqli_error($connection));
                        }
                        
                        while($row2 = mysqli_fetch_array($execute_query2)) {
                            echo '<tr class="even gradeC">
                    <td>'.$book_id.'</td>
                    <td>'.$row2['book_name'].'</td>
                    <td>'.$row2['author_name'].'</td>
                    <td class="center">'.$row2['publisher'].'</td>
                    <td class="center">'.$date_issue.'</td>
                    <td class="center">'.$date_return.'</td>
                  </tr>';
                        }
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

<?php include "includes/footer.php";?>

<!--end-Footer-part-->
