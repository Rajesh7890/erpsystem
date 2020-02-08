<?php include "includes/header.php";
include "includes/db.php";
if(!isset($_SESSION['name'])) {
  header("Location: login.php");
}

?>
<!--sidebar-menu-->
<div id="sidebar"><a href="index.php" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul>
    <li class="active"><a href="index.php"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
    <li class="submenu"> <a href="#"><i class="icon icon-cogs"></i> <span>Manage Student</span></a>
      <ul>
          <li><a href="addstudent.php"><i class="icon icon-user"></i> <span>Add Student</span></a></li>
          <li><a href="managestudent.php"><em class="icon icon-edit"></em> <span>Manage Student</span></a></li>
      </ul>
    </li>
    <li class="submenu"> <a href="#"><i class="icon icon-cogs"></i> <span>Manage Teacher</span></a>
      <ul>
          <li><a href="addteacher.php"><i class="icon icon-user"></i> <span>Add Teacher</span></a></li>
          <li><a href="manageteacher.php"><em class="icon icon-edit"></em> <span>Manage Teacher</span></a></li>
      </ul>
    </li>
    <li><a href="feedback.php"><i class="icon icon-comments"></i> <span>Feedback</span></a></li>
    <li><a href="requests.php"><i class="icon icon-exclamation-sign"></i> <span>Requests</span></a></li>
  </ul>
</div>
<!--sidebar-menu-->

<!--main-container-part-->
<div id="content">
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a><a href="#" title="Notice" class="current tip-bottom">Notice</a></div>
  </div>
<!--End-breadcrumbs-->

<!--All Main content Goes Here-->
<div class="container-fluid">
	
  <!--All Contents goes here-->
    
                <?php
                if(isset($_POST['send'])) {
                    $message = $_POST['message'];
                    $query = "INSERT INTO notices VALUES (NULL,'Admin',CURRENT_TIMESTAMP,'{$message}')";
                    $execute_query = mysqli_query($connection,$query);
                    
                    if(!$execute_query) {
                        die("QUERY FAILED".mysqli_error($connection));
                    }
                    echo "<center><strong><font color='green'>*Notice sent successfully*</font></strong></center>";
                }
                if(isset($_POST['update'])) {
                    $message = $_POST['message'];
                    $id = $_GET['id'];
                    $query = "UPDATE notices SET message = '{$message}' WHERE id = '{$id}'";
                    $execute_query = mysqli_query($connection,$query);
                    
                    if(!$execute_query) {
                        die("QUERY FAILED".mysqli_error($connection));
                    }
                    echo "<center><strong><font color='green'>*Notice get updated successfully*</font></strong></center>";
                }
                if(@$_GET['id'] == 2) {
                    $id = $_GET['dbid'];
                    $query = "DELETE FROM notices WHERE id = '{$id}'";
                    $execute_query = mysqli_query($connection,$query);
                    
                    if(!$execute_query) {
                        die("QUERY FAILED".mysqli_error($connection));
                    }
                    echo "<center><strong><font color='red'>*A Notice get deleted successfully*</font></strong></center>";
                }else if(@$_GET['id'] == 1) {
                    $id = $_GET['dbid'];
                    $query = "SELECT * FROM notices WHERE id = '{$id}'";
                    $execute_query = mysqli_query($connection,$query);
                    
                    if(!$execute_query) {
                        die("QUERY FAILED".mysqli_error($connection));
                    }
                    while($row = mysqli_fetch_array($execute_query)) {
                      echo '<div class="row-fluid" style="margin-left: 200px;margin-top: 80px;">
                    <div class="span8">
                        <form action="notice.php?id='.$row['id'].'" method="post">
                        <div class="widget-box">
                      <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                        <h5>Send a Notice &#187;</h5>
                      </div>
                      <div class="widget-content">
                        <div class="control-group">
                          <form>
                            <div class="controls">
                              <textarea class="textarea_editor span12" rows="6" name="message" placeholder="Enter text ..." required>'.$row['message'].'</textarea>
                            </div>
                          </form>
                        </div>
                        <button type="submit" name="update" class="btn btn-success btn btn-md" >Update</button>
                        </div>

                    </div>
                        </form>
                        </div>
                  </div>';  
                    }
                    
                }
                if(isset($_POST['add'])) {
                    echo '<div class="row-fluid" style="margin-left: 200px;margin-top: 80px;">
                    <div class="span8">
                        <form action="notice.php" method="post">
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
                        <button type="submit" name="send" class="btn btn-success btn btn-md" >SEND</button>
                        </div>

                    </div>
                        </form>
                        </div>
                  </div>';
                }else{
                echo '<div class="widget-box">
                  <div class="widget-title"> <span class="icon"> <i class="icon-file"></i> </span>
                    <h5>All Notices</h5>
                  </div>
                  <form action="notice.php" method="post">
                  <div class="widget-content nopadding">
                    <ul class="recent-posts">';
                $query = "SELECT * FROM notices ORDER BY id DESC";
                $execute_query = mysqli_query($connection,$query);
                
                if(!$execute_query) {
                    die("QUERY FAILED".mysqli_error($connection));
                }
                while($row = mysqli_fetch_array($execute_query)) {
                    echo '<li>
                    <div class="user-thumb"> <img width="40" height="40" alt="User" src="img/demo/av1.jpg"> </div>
                    <div class="article-post">
                      <div class="fr"><a href="notice.php?id=1&dbid='.$row['id'].'" class="btn btn-primary btn-mini">Edit</a>&nbsp;<a href="notice.php?id=2&dbid='.$row['id'].'" class="btn btn-danger btn-mini">Delete</a></div>
                      <span class="user-info"> By: '.$row['post_by'].' / Date: '.$row['date'].' </span>
                      <p><a href="#">'.$row['message'].'</a> </p>
                    </div>
                  </li>';
                }
                echo '<li>
                <button type="submit" name="add" class="btn btn-warning btn-mini">Add New</button>
                </li>
                </ul></div></form>
                </div>';
                }
                ?>
              

              
          

</div>
<!--End Of Container Fluid-->
</div>

<!--end-main-container-part-->

<!--Footer-part-->

<?php include "includes/footer.php";?>

<!--end-Footer-part-->
