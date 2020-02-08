<?php include "includes/header.php";
include "includes/db.php";
if(!isset($_SESSION['name'])) {
  header("Location: login.php");
}
$message = "";

?>
<!--sidebar-menu-->
<div id="sidebar"><a href="index.php" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul>
    <li><a href="index.php"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
    <li class="active submenu open"> <a href="#"><i class="icon icon-cogs"></i> <span>Manage Student</span></a>
      <ul>
          <li><a href="addstudent.php"><i class="icon icon-user"></i> <span>Add Student</span></a></li>
          <li class="active"><a href="managestudent.php"><em class="icon icon-edit"></em> <span>Manage Student</span></a></li>
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
    <div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a><a href="#" title="Manage Student" class="current tip-bottom">Manage Student</a></div>
  </div>
<!--End-breadcrumbs-->

<!--All Main content Goes Here-->
<div class="container-fluid">
	
  <!--All Contents goes here-->
    <?php 
    if(@$_GET['regd_no']) {
        
        $query1 = "SELECT * FROM users WHERE regd_no = '{$_GET['regd_no']}'";
        $execute_query1 = mysqli_query($connection,$query1);
        
        if(!$execute_query1) {
            die("QUERY FAILED".mysqli_error($connection));
        }
        while($row1 = mysqli_fetch_array($execute_query1)) {
            echo '<div class="row-fluid" style="margin-left: 300px;">

            <div class="span6">

            <div class="widget-box">
            <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
              <h5>New Student &#187;</h5>
            </div>
            <div class="widget-content nopadding">
              <form action="managestudent.php" method="post" class="form-horizontal">
                <div class="control-group">
                  <label class="control-label">Regd No :</label>
                  <div class="controls">
                    <input type="text" class="span11" name="regd_no" value="'.$row1['regd_no'].'" pattern="[0-9].{9}" required title="Registration number must be a 10 digit number"/>
                  </div>
                </div>
                 <div class="control-group">
                  <label class="control-label">User Name :</label>
                  <div class="controls">
                    <input type="text" class="span11" name="username" value="'.$row1['username'].'" pattern="[A-Za-z].{4,20}" required title="User name must have 5 to 20 characters long"/>
                  </div>
                </div>
                 <div class="control-group">
                  <label class="control-label">First Name :</label>
                  <div class="controls">
                    <input type="text" class="span11" name="firstname" value="'.$row1['firstname'].'" pattern="[A-Za-z].{4,20}" required title="Name must contain only alphabets"/>
                  </div>
                </div>
                 <div class="control-group">
                  <label class="control-label">Last Name :</label>
                  <div class="controls">
                    <input type="text" class="span11" name="lastname" value="'.$row1['lastname'].'" pattern="[A-Za-z].{2,20}" required title="Name must contain only alphabets"/>
                  </div>
                </div>
                 <div class="control-group">
                  <label class="control-label">Password :</label>
                  <div class="controls">
                    <input type="text" class="span11" name="password" value="'.$row1['password'].'" pattern=".{5,32}" required title="Password must be 6 to 32 characters long"/>
                  </div>
                </div>
                 <div class="control-group">
                  <label class="control-label">Date of Birth :</label>
                  <div class="controls">
                    <input type="date" class="span11" name="dob" min="1950-01-01" max="2999-01-01" value="'.$row1['dob'].'" required title="Registration number must be a 10 number"/>
                  </div>
                </div>
                 <div class="control-group">
              <label class="control-label">Branch :</label>
              <div class="controls">
                <select name="branch" required>
                <option value="'.$row1['branch'].'">'.$row1['branch'].'</option>
                <option value="CSE">Computer Science</option>
                <option value="IT">Information Technology</option>
                <option value="MECH">Mechanical</option>
                <option value="AUTO">Automobile</option>
                <option value="CIVIL">Civil</option>
                <option value="EE">Electrical Engineering</option>
                <option value="EEE">Electrical & Electronics Engineering</option>
                <option value="ETC">Electrical & Telecommunication Engineering</option>
              </select>
              </div>
            </div>
                 <div class="control-group">
            <label class="control-label">Select Semester :</label>
            <div class="controls">
              <select name="sem" required>
                <option value="'.$row1['sem'].'">'.$row1['sem'].' Semester</option>
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
                  <label class="control-label">Email :</label>
                  <div class="controls">
                    <input type="email" class="span11" value="'.$row1['email'].'" name="email" required/>
                  </div>
                </div>
                 <div class="control-group">
                  <label class="control-label">Mobile :</label>
                  <div class="controls">
                    <input type="text" class="span11" name="mobile" value="'.$row1['phone'].'" pattern="[0-9].{9}" required title="Invalid Mobile number"/>
                  </div>
                </div>
                 <div class="control-group">
                  <label class="control-label">Address :</label>
                  <div class="controls">
                    <textarea class="span11" name="address" required>'.$row1['address'].'</textarea>
                  </div>
                </div>


                <div class="form-actions">
                  <button type="submit" name="save" class="btn btn-info" style="margin-left: 180px;">Save</button>
                </div>
              </form>
            </div>
          </div>

             </div>

        </div>';
        }
    }else{
        
        echo '<div class="row-fluid" style="margin-left: 300px;">
         
        <div class="span6">
         
        <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>New Student &#187;</h5>
        </div>
        <div class="widget-content nopadding">
          <form action="managestudent.php" method="post" class="form-horizontal">
            <div class="control-group">
              <label class="control-label">Regd No :</label>
              <div class="controls">
                <input type="text" class="span11" name="regd_no" pattern="[0-9].{9}" required title="Registration number must be a 10 number"/>
              </div>
            </div>
            
            
            <div class="form-actions">
              <button type="submit" name="search" class="btn btn-info" style="margin-left: 180px;">Search</button>
            </div>
          </form>
        </div>
      </div>
         
         </div>
         
    </div>';
        
    }
    
    
    ?>
     
<!--Table start-->
    <?php 
    if(isset($_POST['save'])) {
        $regd_no = $_POST['regd_no'];
        $username = $_POST['username'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $password = $_POST['password'];
        $dob = $_POST['dob'];
        $branch = $_POST['branch'];
        $sem = $_POST['sem'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $address = $_POST['address'];
        
        $query = "UPDATE users SET regd_no = '{$regd_no}', username = '{$username}', firstname = '{$firstname}', lastname = '{$lastname}', password = '{$password}', dob = '{$dob}', branch = '{$branch}', sem = '{$sem}', email = '{$email}', phone = '{$mobile}', address = '{$address}' WHERE id = '{$_SESSION['id']}'";
        $execute_query = mysqli_query($connection,$query);
        
        $message = "<center><strong><font color='green'>**Data Updated**</font></strong></center>";
        if(!$execute_query) {
            die("QUERY FAILED".mysqli_error($connection));
        }
    }
    ?>
    <?php echo $message;?>
         <div class="widget-content">
              <!--Write In widget Content Sample Table:-Use The Table Class For Better Viewing During database query-->
              <table class="table table-bordered table-striped">
              
         <?php 
            if(isset($_POST['search'])) {
                $regd_no = $_POST['regd_no'];
                $query = "SELECT * FROM users WHERE regd_no = '{$regd_no}'";
                $execute_query = mysqli_query($connection,$query);
                
                if(mysqli_num_rows($execute_query) !== 1) {
                    echo "<center><strong><font color='red'>Sorry no data found. Please enter another registration number</font></strong></center>";
                }else{
                    echo "<thead>
                      <tr>
                        <th>Regd No</th>
                        <th>User Name</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Password</th>
                        <th>Date of Birth</th>
                        <th>Branch</th>
                        <th>Semester</th>
                        <th>Email</th>
                        <th>Contact Number</th>
                        <th>Address</th>
                      </tr>
                    </thead><tbody>";
                    while($row = mysqli_fetch_array($execute_query)) {
                        $_SESSION['id'] = $row['id'];
                        echo '<tr class="odd gradeX">
                        <td>'.$row['regd_no'].'</td>
                        <td>'.$row['username'].'</td>
                        <td>'.$row['firstname'].'</td>
                        <td class="center">'.$row['lastname'].'</td>
                        <td class="center">'.$row['password'].'</td>
                        <td class="center">'.$row['dob'].'</td>
                        <td class="center">'.$row['branch'].'</td>
                        <td class="center">'.$row['sem'].'</td>
                        <td class="center">'.$row['email'].'</td>
                        <td class="center">'.$row['phone'].'</td>
                        <td class="center">'.$row['address'].'</td>
                        <td><a href="managestudent.php?regd_no='.$row['regd_no'].'"><button type="submit" name="edit" class="btn btn-info btn-mini">Edit</button></a></td>
                      </tr>';
                    }
                    echo "</tbody>";
                }
            }
            
            ?>
         </table> 
        </div>
         <!--Table end-->
</div>
<!--End Of Container Fluid-->
</div>

<!--end-main-container-part-->

<!--Footer-part-->

<?php include "includes/footer.php";?>

<!--end-Footer-part-->
