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
    <li><a href="timetable.php"><i class="icon icon-table"></i> <span>Timetable</span></a></li>
    <li class="active"><a href="notice.php"><i class="icon icon-comments"></i> <span>Notice</span></a></li>
  </ul>
</div>
<!--sidebar-menu-->

<!--main-container-part-->
<div id="content">
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
    <a href="#" class="current">Notice</a></div>
  </div>
<!--End-breadcrumbs-->

<!--All The content Goes Here-->
<div class="container-fluid">
    <?php 
    
    if(isset($_POST['send'])) {
        $message = $_POST['message'];
/*        date_default_timezone_set('Asia/Kolkata'); echo date("h:i:sa");
        echo date("Y-m-d");*/
        
        $query = "INSERT INTO notices VALUES (NULL,'{$_SESSION['branch']} Department',CURRENT_TIMESTAMP , '{$message}')";
        $execute_query = mysqli_query($connection,$query);
        
        if(!$execute_query) {
            die("QUERY FAILED".mysqli_error($connection));
        }
        header("Location: notice.php?id=1214gnktnkhnthtmkkfkbnkfdndbkvjdjvvdvfb4545bfbf4bfb4fbfdfb4fb4f647bfdbfb14541fb3f1bb1f3b45f4bfb1f3b1f3b1f3b13zdfdfdfsfsfscvss");
    }
    
    ?>
	<form action="notice.php" method="post">
        <?php 
          if(@$_GET['id']=='1214gnktnkhnthtmkkfkbnkfdndbkvjdjvvdvfb4545bfbf4bfb4fbfdfb4fb4f647bfdbfb14541fb3f1bb1f3b45f4bfb1f3b1f3b1f3b13zdfdfdfsfsfscvss') {
            echo "<center><strong><font color='green'>Notice sent successfully</font></strong></center>";
            }
        ?>
    <div class="row-fluid" style="margin-left: 200px;margin-top: 80px;">
    <div class="span8">
        
        <div class="widget-box">
      <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
        <h5>Send a Notice &#187;</h5>
      </div>
      <div class="widget-content">
        <div class="control-group">
          <form>
            <div class="controls">
              <textarea class="textarea_editor span12" rows="6" name="message" placeholder="Enter text ..." required></textarea>
            </div>
          </form>
        </div>
<!--          <button type="submit" class="btn btn-warning btn btn-md" >SEND to BRANCH</button>-->
        <button type="submit" name="send" class="btn btn-success btn btn-md" >SEND</button>
        </div>
        
    </div>
        
        </div>
  </div>
    </form>
</div>
<!--End Of Container Fluid-->
</div>

<!--end-main-container-part-->

<!--Footer-part-->

<?php include "../includes/footer.php";?>

<!--end-Footer-part-->
