<?php include "includes/header.php";
include "includes/db.php";
if (!isset($_SESSION['name'])) {
  header("Location: login.php");
}

?>
<!--sidebar-menu-->
<div id="sidebar"><a href="index.php" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul>
    <li><a href="index.php"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
    <li class="active submenu open"> <a href="#"><i class="icon icon-cogs"></i> <span>Manage Student</span></a>
      <ul>
        <li class="active"><a href="addstudent.php"><i class="icon icon-user"></i> <span>Add Student</span></a></li>
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
    <div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a><a href="#" title="Add Student" class="current tip-bottom">Add Student</a></div>
  </div>
  <!--End-breadcrumbs-->

  <!--All Main content Goes Here-->
  <div class="container-fluid">

    <!--All Contents goes here-->
    <div class="row-fluid" style="margin-left: 300px;">

      <div class="span6">
        <?php
        if (isset($_POST['create'])) {
          $regd_no = $_POST['regd_no'];
          $firstname = $_POST['firstname'];
          $lastname = $_POST['lastname'];
          $dob = $_POST['dob'];
          $branch = $_POST['branch'];
          $sem = $_POST['sem'];
          $email = $_POST['email'];
          $mobile = $_POST['mobile'];
          $address = $_POST['address'];

          $query1 = "SELECT * FROM users WHERE regd_no = '{$regd_no}'";
          $execute_query1 = mysqli_query($connection, $query1);

          if (mysqli_num_rows($execute_query1) == 1) {
            echo "<center><strong><font color='red'>This registration number already Exist. Please choose another one or verify it</font></strong></center>";
          } else {

            $query = "INSERT INTO users VALUES (NULL, '{$regd_no}', '{$firstname}', '{$firstname}', '{$lastname}', '{$regd_no}','{$dob}', '{$branch}', '{$sem}', '{$email}', '{$mobile}', '{$address}', 'student')";

            $query1 = "INSERT INTO attendance VALUES (NULL, '{$regd_no}', '{$sem}', '', '', '', '', '', '', '', '', '', '{$branch}')";
            $query2 = "INSERT INTO exams VALUES (NULL, '{$regd_no}', '{$sem}', '', '', '', '', '', '', '', '', '','1st', '{$branch}')";
            $query3 = "INSERT INTO exams VALUES (NULL, '{$regd_no}', '{$sem}', '', '', '', '', '', '', '', '', '','2nd', '{$branch}')";

            $execute_query = mysqli_query($connection, $query);
            $execute_query1 = mysqli_query($connection, $query1);
            $execute_query2 = mysqli_query($connection, $query2);
            $execute_query3 = mysqli_query($connection, $query3);

            if (!$execute_query) {
              die("QUERY FAILED" . mysqli_error($connection));
            }
            if (!$execute_query1) {
              die("QUERY FAILED" . mysqli_error($connection));
            }
            if (!$execute_query2) {
              die("QUERY FAILED" . mysqli_error($connection));
            }
            if (!$execute_query3) {
              die("QUERY FAILED" . mysqli_error($connection));
            }
            echo "<center><strong><font color='green'>Data Inserted</font></strong></center>";
          }
        }
        ?>
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
            <h5>New Student &#187;</h5>
          </div>
          <div class="widget-content nopadding">
            <form action="addstudent.php" method="post" class="form-horizontal">
              <div class="control-group">
                <label class="control-label">Regd No :</label>
                <div class="controls">
                  <input type="text" class="span11" name="regd_no" pattern="[0-9].{9}" required title="Registration number must be a 10 digit number" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">First Name :</label>
                <div class="controls">
                  <input type="text" name="firstname" pattern="[A-Za-z].{4,20}" class="span11" required title="Name must not contain any numbers and must contain atleast 4 character" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Last Name :</label>
                <div class="controls">
                  <input type="text" name="lastname" pattern="[A-Za-z].{2,20}" class="span11" required title="Name must not contain any numbers and must contain atleast 4 character" />
                </div>
              </div>

              <div class="control-group">
                <label class="control-label" for="normal">DOB :</label>
                <div class="controls">
                  <input type="date" id="mask-date" class="span11 mask text" min="1950-01-01" max="2999-01-01" name="dob" /><span class="help-block blue span8">MM/DD/YYYY</span>
                </div>
              </div>

              <div class="control-group">
                <label class="control-label">Branch :</label>
                <div class="controls">
                  <select name="branch" required>
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
                <label class="control-label">Email Id :</label>
                <div class="controls">
                  <input type="email" class="span11" name="email" />
                </div>
              </div>
              <div class="control-group">
                <label for="normal" class="control-label">Mob number :</label>
                <div class="controls">
                  <input type="text" id="" class="span11 mask text" name="mobile" pattern=".{10}" title="Please enter a valid phone number">
                </div>
              </div>
              <div class="control-group">
                <label for="normal" class="control-label">Address :</label>
                <div class="controls">
                  <!--                <input type="text" id="" class="span8 mask text">-->
                  <textarea id="address" class="span11" name="address"></textarea>
                </div>
              </div>


              <div class="form-actions">
                <button type="submit" name="create" class="btn btn-warning" style="margin-left: 180px;">Add</button>
              </div>
            </form>
          </div>
        </div>

      </div>


    </div>

  </div>
  <!--End Of Container Fluid-->
</div>

<!--end-main-container-part-->

<!--Footer-part-->

<?php include "includes/footer.php"; ?>

<!--end-Footer-part-->
